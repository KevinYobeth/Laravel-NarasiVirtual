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

Route::get('/download/zip/{folderName}', 'CertificateController@downloadZip')->name('downZip');
Route::get('/download/{filepath}', 'CertificateController@downloadCertificate')->where('filepath', '.*')->name('downCertificate');

Route::get('/claim', 'CertificateController@index')->name('certificate');
Route::post('/claim', 'CertificateController@showCertificate')->name('claimCertificate');

Route::get('{allExcept}', function () {
    return redirect('https://narasi.klifonara.com/seeyou');
})->where('allExcept', '[^/claim]*');

Route::get('/seeyou', function () {
    return view('seeyou.index');
});

Route::get('/', 'LandingPageController@index')->name('landingPage');
Route::get('/story', 'LandingPageController@theStory')->name('theStory');
Route::get('/submissions', 'LandingPageController@submissions')->name('submissions');
Route::get('/exhibition', 'LandingPageController@exhibition')->name('exhibition');
Route::get('/about', 'LandingPageController@aboutUs')->name('aboutUs');
Route::get('/live', 'LandingPageController@live')->name('live');

Route::get('/submissions/{photoID}', 'LandingPageController@photoDetail')->name('photoDetail');

Auth::routes(['verify' => true]);
Route::get('/profile', 'HomeController@profile')->middleware(['auth', 'verified'])->name('profile');
Route::post('/profile', 'HomeController@saveProfile')->middleware(['auth', 'verified'])->name('saveProfile');

Route::get('/dash', 'HomeController@index')->name('dash');

Route::get('/viewSubmission', 'SubmissionController@view')->middleware('auth');
Route::get('viewSubmission/{filename}', 'SubmissionController@getFile')->name('getfile');

Route::post('/verifySubmission', 'SubmissionController@verify');

Route::get('/seminar/register/{ID}', 'SeminarController@register')->middleware(['auth', 'verified'])->name('registerSeminar');
Route::post('/seminar/register/', 'SeminarController@fileUpload')->middleware(['auth', 'verified'])->name('uploadPaymentSeminar');

Route::get('/sendInvoice/{transactionID}', 'MailController@sendInvoice')->name('sendInvoice');
Route::get('/sendConfirmation/{transactionID}', 'MailController@sendConfirmation')->name('sendConfirmation');
Route::get('/invoice/{invoiceID}', 'MailController@viewInvoice');

Route::get('/admin', 'AdminController@index')->middleware(['auth', 'verified'])->name('admin');
Route::post('/admin', 'AdminController@motd')->middleware(['auth', 'verified'])->name('adminMotd');
Route::get('/admin/ticket', 'AdminController@ticket')->middleware(['auth', 'verified'])->name('adminTicket');
Route::get('/admin/ticket/{slug}', 'AdminController@viewTicket')->middleware(['auth', 'verified'])->name('adminView');
Route::get('/admin/ticket/{slug}/status', 'AdminController@ticketStatus')->middleware(['auth', 'verified'])->name('adminTicketStatus');
Route::get('/admin/{transID}/verify', 'AdminController@verify')->middleware(['auth', 'verified'])->name('verify');
Route::get('/admin/{transID}', 'AdminController@detail')->name('transDetail');

Route::get('/exit/{seminarCode}', 'TicketController@index')->name('exitTicket');
Route::post('/exit/{seminarCode}', 'TicketController@store')->name('storeTicket');

Route::get('/download/virtual-bg', 'HomeController@download')->name('downVirtualBG');
