<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Competition\CompetitionPage;
use App\Http\Controllers\Volunteer\VolunteerPage;
use App\Http\Controllers\Volunteer\Registration\VolunteerRegistrationPage;
use App\Http\Controllers\Volunteer\Registration\VolunteerRegistrationPage2;
use App\Http\Controllers\Volunteer\Registration\VolunteerRegistrationPage3;
use App\Http\Controllers\Volunteer\Admin\VolunteerRegistrationDataController;
use App\Http\Controllers\Volunteer\Admin\VolunteerRegistrationProof;
use App\Http\Controllers\Volunteer\Admin\VolunteerExportController;
use App\Http\Controllers\Volunteer\VolunteerEndPage;
use App\Http\Controllers\Webinar\WebinarPage;
use App\Http\Controllers\Conference\ConferencePage;
use App\Http\Controllers\SocialNight\SocialNightPage;
use App\Http\Controllers\ShowFileController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Webinar\Admin\AischatRegistrationDataController;
use App\Http\Controllers\Webinar\Admin\AischatExportController;
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
Route::view('/dashboard', 'welcome')->name('dashboard');

Route::get('/competition', [CompetitionPage::class, 'index'])->name('competition');

Route::get('/conference', [ConferencePage::class, 'index'])->name('conference');

Route::get('/volunteer', [VolunteerPage::class, 'index'])->name('volunteer');
Route::get('/registration', [VolunteerRegistrationPage::class, 'index'])->prefix('volunteer')->name('volunteer-regis');
Route::post('/registration', [VolunteerRegistrationPage::class, 'store'])->prefix('volunteer')->name('volunteer-regis');
Route::get('/registration-2/{name}/{radio}/{major}/{batch}', [VolunteerRegistrationPage2::class, 'index'])->prefix('volunteer')->name('volunteer-regis-2-get');
Route::post('/registration-2/{name}/{radio}/{major}/{batch}', [VolunteerRegistrationPage2::class, 'store'])->prefix('volunteer')->name('volunteer-regis-2');
Route::get('/registration-3/{name}/{radio}/{major}/{batch}/{domicile}/{email}/{wa}/{line}/{position1}/{position2}', [VolunteerRegistrationPage3::class, 'index'])->prefix('volunteer')->name('volunteer-regis-3-get');
Route::post('/registration-3/{name}/{radio}/{major}/{batch}/{domicile}/{email}/{wa}/{line}/{position1}/{position2}', [VolunteerRegistrationPage3::class, 'store'])->prefix('volunteer')->name('volunteer-regis-3');
Route::get('/thanks', [VolunteerEndPage::class, 'index'])->prefix('volunteer')->name('volunteer-end');

Route::get('/aischat', [WebinarPage::class, 'index'])->name('aischat');
Route::get('/aischat/kosong', [WebinarPage::class, 'index_k'])->name('aischat-kosong');
Route::get('/aischat/registration', [WebinarPage::class, 'registration_1'])->name('aischat-regis');
Route::post('/aischat/registration', [WebinarPage::class, 'store_1'])->name('aischat-regis');
Route::get('/aischat/registration-2', [WebinarPage::class, 'registration_2'])->name('aischat-regis-2');
Route::post('/aischat/registration-2', [WebinarPage::class, 'store_2'])->name('aischat-regis-2-store');
Route::get('/aischat/registration-3', [WebinarPage::class, 'registration_3'])->name('aischat-regis-end');
Route::post('/aischat/registration-3/{name}/{email}/{major}/{wa}/{place}', [WebinarPage::class, 'store_3'])->name('aischat-regis-3-store');

Route::get('/socialnight', [SocialNightPage::class, 'index'])->name('sosnight');

Route::get('/admin/volunteer/registration', [VolunteerRegistrationDataController::class, 'index'])->name('admin-volunteer');
Route::get('/admin/volunteer/registration/proof/{volregis}', [VolunteerRegistrationProof::class, 'index'])->name('admin-volunteer-proof');
Route::get('/admin/volunteer/registration/{volregis}', [VolunteerRegistrationDataController::class, 'delete'])->name('admin-volunteer-delete');

Route::get('/admin/aischat/registration', [AischatRegistrationDataController::class, 'index'])->name('admin-aischat');
Route::get('/admin/aischat/registration/{chatregis}', [AischatRegistrationDataController::class, 'delete'])->name('admin-aischat-delete');

Route::get('/show/{file_path}', [ShowFileController::class, 'index'])->name('show-file');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/export/volunteer', [VolunteerExportController::class, 'exportExcel'])->name('export-volunteer');
Route::get('/export/aischat', [AischatExportController::class, 'exportExcel'])->name('export-aischat');

Route::get('/admin/list', [Admin::class, 'index'])->name('admin');

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/admin', function () {
    return redirect()->route('login');
});

// Route::get('competition', '');
