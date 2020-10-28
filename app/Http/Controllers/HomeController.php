<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $seminars = DB::table('seminar_details')->whereNotIn('id', $attendedSeminars->pluck('seminars.seminarID'))->get();

        // https://stackoverflow.com/questions/1699958/formatting-a-number-with-leading-zeros-in-php
        $uniqueName =  '&uname=' . str_pad($user->id, 3, '0', STR_PAD_LEFT) . ' - ' . $user->name;

        return view('dash', [
            'photos' => $photos,
            'attendedSeminars' => $attendedSeminars->get(),
            'seminars' => $seminars,
            'uniqueName' => $uniqueName,
        ]);
    }
}
