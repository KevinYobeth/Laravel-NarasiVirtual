<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        return view('dash', [
            'photos' => $photos
        ]);
    }
}
