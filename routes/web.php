<?php

use Illuminate\Support\Facades\Route;
use App\Motd;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $motd = Motd::all();

    return view('landingPage', [
        'motd' => $motd,
    ]);
})->name('landingPage');

Auth::routes(['verify' => true]);

Route::get('/dash', 'HomeController@index')->name('dash');

Route::get('/submission', 'SubmissionController@index')->middleware(['auth', 'verified']);
Route::post('/submission', 'SubmissionController@fileUpload')->name('uploadSubmission');

Route::get('/viewSubmission', 'SubmissionController@view')->middleware('auth');
Route::get('viewSubmission/{filename}', 'SubmissionController@getFile')->name('getfile');

Route::post('/verifySubmission', 'SubmissionController@verify');

Route::get('/seminar/register/{ID}', 'SeminarController@register')->middleware(['auth', 'verified'])->name('registerSeminar');
