<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motd;
use App\Photo;

class LandingPageController extends Controller
{
    public function index()
    {
        $motd = Motd::findOrFail(1);

        return view('landingPage', [
            'motd' => $motd,
        ]);
    }

    public function theStory()
    {
        return view('theStory');
    }

    public function submissions()
    {
        $photos = Photo::whereIn('category', [1, 2])->get();
        $narasiColor = Photo::inRandomOrder()->whereBetween('id', [50, 70])->get();
        $narasiBW = Photo::inRandomOrder()->whereBetween('id', [71, 90])->get();
        return view('submissions', [
            'photos' => $photos,
            'narasiColor' => $narasiColor,
            'narasiBW' => $narasiBW,
        ]);
    }

    public function photoDetail($photoID)
    {
        $photo = Photo::findOrFail($photoID);

        return $photo;
    }

    public function exhibition()
    {
        return view('exhibition');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function live()
    {
        $motd = Motd::findOrFail(2);

        return redirect($motd->link);
    }
}

// Route::get('/', 'LandingPageController@index')->name('landingPage');
// Route::get('/thestory', 'LandingPageController@theStory')->name('theStory');
// Route::get('/submissions', 'LandingPageController@submissions')->name('submissions');
// Route::get('/exhibition', 'LandingPageController@exhibition')->name('exhibition');
// Route::get('/about', 'LandingPageController@aboutUs')->name('aboutUs');