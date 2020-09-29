<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SeminarDetails;

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
            ->where('seminars.userID', $user->id)
            ->get();

        $attendedList = DB::table('seminar_details')
            ->join('seminars', 'seminar_details.id', '=', 'seminars.seminarID')
            ->where('seminars.userID', $user->id)
            ->pluck('seminars.seminarID');

        error_log($attendedList);

        $seminars = DB::table('seminar_details')->whereNotIn('id', $attendedList)->get();

        return view('dash', [
            'photos' => $photos,
            'attendedSeminars' => $attendedSeminars,
            'seminars' => $seminars,
        ]);
    }
}
