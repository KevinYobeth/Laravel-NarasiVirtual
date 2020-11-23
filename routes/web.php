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

Route::get('/', 'LandingPageController@index')->name('landingPage');
Route::get('/story', 'LandingPageController@theStory')->name('theStory');
Route::get('/submissions', 'LandingPageController@submissions')->name('submissions');
Route::get('/exhibition', 'LandingPageController@exhibition')->name('exhibition');
Route::get('/about', 'LandingPageController@aboutUs')->name('aboutUs');

Route::get('/submissions/{photoID}', 'LandingPageController@photoDetail')->name('photoDetail');

Auth::routes(['verify' => true]);
Route::get('/profile', 'HomeController@profile')->middleware(['auth', 'verified'])->name('profile');
Route::post('/profile', 'HomeController@saveProfile')->middleware(['auth', 'verified'])->name('saveProfile');

Route::get('/dash', 'HomeController@index')->name('dash');

// Route::get('/submission', 'SubmissionController@index')->middleware(['auth', 'verified']);
// Route::post('/submission', 'SubmissionController@fileUpload')->name('uploadSubmission');)

Route::get('/viewSubmission', 'SubmissionController@view')->middleware('auth');
Route::get('viewSubmission/{filename}', 'SubmissionController@getFile')->name('getfile');

Route::post('/verifySubmission', 'SubmissionController@verify');

Route::get('/seminar/register/{ID}', 'SeminarController@register')->middleware(['auth', 'verified'])->name('registerSeminar');
Route::post('/seminar/register/', 'SeminarController@fileUpload')->middleware(['auth', 'verified'])->name('uploadPaymentSeminar');

Route::get('/sendInvoice/{transactionID}', 'MailController@sendInvoice')->name('sendInvoice');
Route::get('/sendConfirmation/{transactionID}', 'MailController@sendConfirmation')->name('sendConfirmation');
Route::get('/invoice/{invoiceID}', 'MailController@viewInvoice');

Route::get('/admin', 'AdminController@index')->middleware(['auth', 'verified'])->name('admin');
Route::get('/admin/{transID}/verify', 'AdminController@verify')->middleware(['auth', 'verified'])->name('verify');
Route::get('/admin/{transID}', 'AdminController@detail')->name('transDetail');

Route::get('/exit', 'TicketController@index')->name('exitTicket');
Route::post('/exit', 'TicketController@store')->name('storeTicket');


Route::get('/invoice', function () {
    return view('mails.invoice-web');
});
