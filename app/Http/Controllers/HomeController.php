<?php

namespace App\Http\Controllers;

use App\Submission;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\SeminarDetails;
use Monolog\Handler\ErrorLogHandler;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user->id);
        $photos = DB::table('submissions')->where('userID', $user->id)->get();

        $attendedSeminars = DB::table('seminar_details')
            ->join('seminars', 'seminar_details.id', '=', 'seminars.seminarID')
            ->join('transactions', 'transactions.transactionID', '=', 'seminars.transactionID')
            ->where([['seminars.userID', '=', $user->id], ['transactions.verified', '=', 1]]);

        $unverifiedSeminar = DB::table('seminar_details')
            ->join('seminars', 'seminar_details.id', '=', 'seminars.seminarID')
            ->join('transactions', 'transactions.transactionID', '=', 'seminars.transactionID')
            ->where([['seminars.userID', '=', $user->id], ['transactions.verified', '=', 0]]);

        $seminars = DB::table('seminar_details')
            ->whereNotIn('id', $attendedSeminars->pluck('seminars.seminarID'))
            ->whereNotIn('id', $unverifiedSeminar->pluck('seminars.seminarID'))
            ->get();

        // https://stackoverflow.com/questions/1699958/formatting-a-number-with-leading-zeros-in-php
        $uniqueName =  '&uname=' . str_pad($user->id, 3, '0', STR_PAD_LEFT) . ' - ' . $user->name;

        return view('dash', [
            'photos' => $photos,
            'attendedSeminars' => $attendedSeminars->get(),
            'seminars' => $seminars,
            'unverifiedSeminars' => $unverifiedSeminar->get(),
            'uniqueName' => $uniqueName,
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('auth.profile', ['user' => $user]);
    }

    public function saveProfile(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'numeric', 'digits:10'],
            'jurusan' => ['required', 'string', 'max:100'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->nim = $request->nim;
        $user->jurusan = $request->jurusan;

        $user->save();

        Alert::toast('Profile updated', 'success');
        return back();
    }
}
