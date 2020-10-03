<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingPage');
})->name('landingPage');

// Route::get('/land', function () {
//     return view('landing');
// });

Auth::routes(['verify' => true]);

Route::get('/dash', 'HomeController@index')->name('dash');

Route::get('/submission', 'SubmissionController@index')->middleware(['auth', 'verified']);
Route::post('/submission', 'SubmissionController@fileUpload')->name('uploadSubmission');

Route::get('/viewSubmission', 'SubmissionController@view')->middleware('auth');
Route::get('viewSubmission/{filename}', 'SubmissionController@getFile')->name('getfile');

Route::post('/verifySubmission', 'SubmissionController@verify');

Route::get('/seminar/register/{ID}', 'SeminarController@register')->middleware(['auth', 'verified'])->name('registerSeminar');
