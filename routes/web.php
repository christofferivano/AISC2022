<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Competition\CompetitionPage;
use App\Http\Controllers\Competition\Poster\PosterCompetitionController;
use App\Http\Controllers\Competition\Paper\PaperCompetitionController;
use App\Http\Controllers\Competition\Jeopardy\JeopardyCompetitionController;
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
use App\Http\Controllers\Competition\Admin\CompetitionDataController;
use App\Http\Controllers\Competition\Admin\RegistrationDataController;
use App\Http\Controllers\Competency\CompetencyController;

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
<<<<<<< HEAD
Route::view('/dashboard', 'welcome')->name('dashboard');
// Route::get('/dashboard', [PaperCompetitionController::class, 'createStep2'])->name('dashboard');

=======
Route::view('/dashboard', 'sosnight')->name('dashboard');
// Route::get('/dashboard', [RegistrationDataController::class, 'index'])->name('dashboard');
>>>>>>> defc91bc11166e14694f808d3ef279ae76e4f048

Route::get('/competency', [CompetencyController::class, 'index'])->name('competency');
// Route::get('/competency/registration', [CompetencyController::class, 'registration_1'])->name('competency-regis-1');
// Route::post('/competency/registration', [CompetencyController::class, 'store_1'])->name('competency-regis-1-store');
// Route::get('/competency/registration-2', [CompetencyController::class, 'registration_2'])->name('competency-regis-2');
// Route::post('/competency/registration-2/store/{name}/{place}/{email}/{wa}', [CompetencyController::class, 'store_2'])->name('competency-regis-2-store');
// Route::get('/competency/registration/thanks', [CompetencyController::class, 'end'])->name('competency-regis-end');

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
Route::get('/aischat/registration', [WebinarPage::class, 'createStep1'])->name('aischat-regis-one');
Route::post('/aischat/registration', [WebinarPage::class, 'postCreateStep1'])->name('aischat-regis-one');
Route::get('/aischat/registration/2', [WebinarPage::class, 'createStep2'])->name('aischat-regis-two');
Route::post('/aischat/registration/2', [WebinarPage::class, 'postCreateStep2'])->name('aischat-regis-two');
Route::get('/aischat/registration-3', [WebinarPage::class, 'registration_3'])->name('aischat-regis-end');
//Route::get('/aischat/registration/payment/{id}', [WebinarPage::class, 'payment'])->name('aischat-regis-payment');

// Route for competition
Route::get('/competition', [CompetitionPage::class, 'index'])->name('competition');

//Route for admin competition
// Route::get()

//Route for poster
Route::get('/competition/poster', [PosterCompetitionController::class, 'index'])->name('poster-competition');
Route::get('/competition/poster/register', [PosterCompetitionController::class, 'createStep1'])->name('poster-competition-regis');
Route::post('/competition/poster/register', [PosterCompetitionController::class, 'postCreateStep1'])->name('poster-competition-regis');
Route::get('/competition/poster/register/voucher/{count}', [PosterCompetitionController::class, 'CreateStep3'])->name('poster-competition-regis-voucher-get');
Route::post('/competition/poster/register/voucher', [PosterCompetitionController::class, 'postCreateStep3'])->name('poster-competition-regis-voucher-post');
Route::get('/competition/poster/register/total/{count}', [PosterCompetitionController::class, 'createStep4'])->name('poster-competition-total');
Route::get('/competition/poster/register/payment', [PosterCompetitionController::class, 'createStep2'])->name('poster-competition-regis-payment');
Route::post('/competition/poster/register/payment', [PosterCompetitionController::class, 'postCreateStep2'])->name('poster-competition-regis-payment');
Route::get('/competition/poster/register/complete', [PosterCompetitionController::class, 'createStep5'])->name('poster-competition-regis-complete');

//Route for paper
Route::get('/competition/paper', [PaperCompetitionController::class, 'index'])->name('paper-competition');
Route::get('/competition/paper/register', [PaperCompetitionController::class, 'createStep1'])->name('paper-competition-regis');
Route::post('/competition/paper/register', [PaperCompetitionController::class, 'postCreateStep1'])->name('paper-competition-regis');
Route::get('/competition/paper/register/voucher/{count}', [PaperCompetitionController::class, 'CreateStep3'])->name('paper-competition-regis-voucher-get');
Route::post('/competition/paper/register/voucher', [PaperCompetitionController::class, 'postCreateStep3'])->name('paper-competition-regis-voucher-post');
Route::get('/competition/paper/register/total/{count}', [PaperCompetitionController::class, 'createStep4'])->name('paper-competition-total');
Route::get('/competition/paper/register/payment', [PaperCompetitionController::class, 'createStep2'])->name('paper-competition-regis-payment');
Route::post('/competition/paper/register/payment', [PaperCompetitionController::class, 'postCreateStep2'])->name('paper-competition-regis-payment');
Route::get('/competition/paper/register/complete', [PaperCompetitionController::class, 'createStep5'])->name('paper-competition-regis-complete');

//Route for Cheme Jeopardy
Route::get('/competition/cheme', [JeopardyCompetitionController::class, 'index'])->name('cheme-competition');
Route::get('/competition/cheme/register', [JeopardyCompetitionController::class, 'createStep1'])->name('cheme-competition-regis');
Route::post('/competition/cheme/register', [JeopardyCompetitionController::class, 'postCreateStep1'])->name('cheme-competition-regis');
Route::get('/competition/cheme/register/voucher/{count}', [JeopardyCompetitionController::class, 'CreateStep3'])->name('cheme-competition-regis-voucher-get');
Route::post('/competition/cheme/register/voucher', [JeopardyCompetitionController::class, 'postCreateStep3'])->name('cheme-competition-regis-voucher-post');
Route::get('/competition/cheme/register/total/{count}', [JeopardyCompetitionController::class, 'createStep4'])->name('cheme-competition-total');
Route::get('/competition/cheme/register/payment', [JeopardyCompetitionController::class, 'createStep2'])->name('cheme-competition-regis-payment');
Route::post('/competition/cheme/register/payment', [JeopardyCompetitionController::class, 'postCreateStep2'])->name('cheme-competition-regis-payment');
Route::get('/competition/cheme/register/complete', [JeopardyCompetitionController::class, 'createStep5'])->name('cheme-competition-regis-complete');

Route::get('/socialnight', [SocialNightPage::class, 'index'])->name('sosnight');

Route::get('/admin/volunteer/registration', [VolunteerRegistrationDataController::class, 'index'])->name('admin-volunteer');
Route::get('/admin/volunteer/registration/proof/{volregis}', [VolunteerRegistrationProof::class, 'index'])->name('admin-volunteer-proof');
Route::get('/admin/volunteer/registration/{volregis}', [VolunteerRegistrationDataController::class, 'delete'])->name('admin-volunteer-delete');

Route::get('/admin/aischat/registration', [AischatRegistrationDataController::class, 'index'])->name('admin-aischat');
Route::get('/admin/aischat/registration/delete/{chatregis}', [AischatRegistrationDataController::class, 'delete'])->name('admin-aischat-delete');
Route::get('/admin/aischat/registration/show/{id}', [AischatRegistrationDataController::class, 'show'])->name('admin-aischat-show');

//Route for competition admin

//Route for institution CRUD
Route::view('/admin/competition', 'admin-competition')->name('admin-competition');
Route::get('/admin/competition/institution', [CompetitionDataController::class, 'index_institution'])->name('institution');
Route::get('/admin/competition/institution/add', [CompetitionDataController::class, 'index_institution_add'])->name('institution-add');
Route::post('/admin/competition/institution/add', [CompetitionDataController::class, 'index_institution_add_add'])->name('institution-add');
Route::get('/admin/competition/institution/delete/{institute}', [CompetitionDataController::class, 'institution_delete'])->name('institution-delete');
Route::get('/admin/competition/institution/edit/{id}', [CompetitionDataController::class, 'institution_edit'])->name('institution-edit');
Route::post('/admin/competition/institution/edit/{id}', [CompetitionDataController::class, 'institution_update'])->name('institution-update');

//Route for voucher CRUD
Route::get('/admin/competition/voucher', [CompetitionDataController::class, 'index_voucher'])->name('voucher');
Route::get('/admin/competition/voucher/add', [CompetitionDataController::class, 'voucher_add'])->name('voucher-add');
Route::post('/admin/competition/voucher/add', [CompetitionDataController::class, 'post_voucher_add'])->name('voucher-add');
Route::get('/admin/competition/voucher/delete/{voucher}', [CompetitionDataController::class, 'voucher_delete'])->name('voucher-delete');
Route::get('/admin/competition/voucher/edit/{id}', [CompetitionDataController::class, 'voucher_edit'])->name('voucher-edit');
Route::post('/admin/competition/voucher/edit/{id}', [CompetitionDataController::class, 'voucher_update'])->name('voucher-update');

//Route for competition registration data show
Route::get('/admin/competition/competition/{type}', [RegistrationDataController::class, 'index'])->name('competition-data');
Route::get('/admin/competition/competition/payment/{id}', [RegistrationDataController::class, 'payment_view'])->name('payment-view');
Route::get('/admin/competition/competition/members/{id}', [RegistrationDataController::class, 'members_view'])->name('members-view');
Route::get('/admin/competition/competition/validate/{id}/{num}', [RegistrationDataController::class, 'validate_registration'])->name('validate-competition');

//Route to access storage
// Route::get('storage/app/{filename}', function ($filename)
// {
//     $path = storage_path('public/' . $filename);

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });

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
