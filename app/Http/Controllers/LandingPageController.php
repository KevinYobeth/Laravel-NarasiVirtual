<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motd;
use App\Photo;

class LandingPageController extends Controller
{
    public function index()
    {
        $motd = Motd::all();

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
        $narasi = Photo::where('category', 0)->get();
        return view('submissions', [
            'photos' => $photos,
            'narasi' => $narasi,
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
}

// Route::get('/', 'LandingPageController@index')->name('landingPage');
// Route::get('/thestory', 'LandingPageController@theStory')->name('theStory');
// Route::get('/submissions', 'LandingPageController@submissions')->name('submissions');
// Route::get('/exhibition', 'LandingPageController@exhibition')->name('exhibition');
// Route::get('/about', 'LandingPageController@aboutUs')->name('aboutUs');
