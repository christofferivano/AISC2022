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

Route::get('/webinar', [WebinarPage::class, 'index'])->name('webinar');

Route::get('/socialnight', [SocialNightPage::class, 'index'])->name('sosnight');

Route::get('/admin/volunteer/registration', [VolunteerRegistrationDataController::class, 'index'])->name('admin-volunteer');
Route::get('/admin/volunteer/registration/proof/{volregis}', [VolunteerRegistrationProof::class, 'index'])->name('admin-volunteer-proof');
Route::get('/admin/volunteer/registration/{volregis}', [VolunteerRegistrationDataController::class, 'delete'])->name('admin-volunteer-delete');

Route::get('/show/{file_path}', [ShowFileController::class, 'index'])->name('show-file');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/export/volunteer', [VolunteerExportController::class, 'exportExcel'])->name('export-volunteer');

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
