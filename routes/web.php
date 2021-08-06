<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Competition\CompetitionPage;
use App\Http\Controllers\Volunteer\VolunteerPage;
use App\Http\Controllers\Webinar\WebinarPage;
use App\Http\Controllers\Conference\ConferencePage;
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
Route::get('/volunteer/registration', [VolunteerPage::class, 'regis'])->prefix('volunteer')->name('volunteer-regis');
Route::get('/volunteer/thanks', [VolunteerPage::class, 'end'])->prefix('volunteer')->name('volunteer-end');

Route::get('/webinar', [WebinarPage::class, 'index'])->name('webinar');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('competition', '');
