<?php

use App\Http\Livewire\Index;
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Admin\Dashboard\Index as AdminDashboard;
use App\Http\Livewire\User\Viewtrainers\Index as Viewtrainers;
use App\Http\Livewire\Admin\Dashboard\Site\Add\Index as AddSite;

use App\Http\Livewire\User\Appointment\Index as MakeAppointment;
use App\Http\Livewire\Admin\Dashboard\Settings\Index as Settings;

use App\Http\Livewire\Admin\Dashboard\Site\Index as ViewAllSites;
use App\Http\Livewire\Admin\Dashboard\Site\Edit\Index as EditSite;
use App\Http\Livewire\Admin\Dashboard\Profile\Index as EditProfile;

use App\Http\Livewire\Admin\Dashboard\Password\Index as EditPassword;
use App\Http\Livewire\Admin\Dashboard\Trainers\Add\Index as AddTrainer;
use App\Http\Livewire\Admin\Dashboard\Trainers\Index as ViewAllTrainers;
use App\Http\Livewire\Admin\Dashboard\Trainers\Edit\Index as EditTrainer;

use App\Http\Livewire\Admin\Dashboard\Site\Trainers\Index as SiteTrainers;
use App\Http\Livewire\Admin\Dashboard\Appointment\Add\Index as AddAppointment;
use App\Http\Livewire\Admin\Dashboard\Appointment\Index as ViewAllAppointments;

use App\Http\Livewire\Admin\Dashboard\Appointment\Edit\Index as EditAppointment;
use App\Http\Livewire\Admin\Dashboard\TrainingTypes\Add\Index as AddTrainingType;
use App\Http\Livewire\Admin\Dashboard\TrainingTypes\Index as ViewAllTrainingTypes;
use App\Http\Livewire\Admin\Dashboard\TrainingTypes\Edit\Index as EditTrainingType;


Auth::routes();

Route::get('debug', function () {
    return "done";
});


Route::get('/home', function () {
    return redirect(route('AdminDashboard'));
})->name('home');

Route::get('/register', function () {
    return redirect(route('AdminDashboard'));
})->name('register');


Route::get('/', Index::class)
    ->name('main');

Route::get('ViewTrainers/{slug}', Viewtrainers::class)
    ->name('viewtrainers');

Route::get('MakeAppointment/{slug}', MakeAppointment::class)
    ->name('MakeAppointment');

/*Begin::Admin Group*/
Route::middleware('auth')->prefix('Admin')->group(function () {

    Route::get('Dashboard', AdminDashboard::class)->name('AdminDashboard');

    /*Begin::Trainer Operations*/
    Route::get('Trainers', ViewAllTrainers::class)->name('AdminTrainers');
    Route::get('AddTrainer', AddTrainer::class)->name('AdminAddTrainer');
    Route::get('EditTrainer/{slug}', EditTrainer::class)->name('AdminEditTrainer');
    /*End::Trainer Operations*/

    /*Begin::TrainingTypes Operations*/
    Route::get('TrainingTypes', ViewAllTrainingTypes::class)->name('AdminTrainingTypes');
    Route::get('AddTrainingType', AddTrainingType::class)->name('AdminAddTrainingType');
    Route::get('EditTrainingType/{slug}', EditTrainingType::class)->name('AdminEditTrainingType');
    /*End::Trainer Operations*/

    /*Begin::Site Operations*/
    Route::get('Sites', ViewAllSites::class)->name('AdminSites');
    Route::get('AddSite', AddSite::class)->name('AdminAddSite');
    Route::get('EditSite/{slug}', EditSite::class)->name('AdminEditSite');
    Route::get('SiteTrainers/{slug}', SiteTrainers::class)->name('AdminSiteTrainers');
    /*End::Site Operations*/

    /*Begin::Appointment Operations*/
    Route::get('Appointments', ViewAllAppointments::class)->name('AdminAppointments');
    Route::get('AddAppointment', AddAppointment::class)->name('AdminAddAppointment');
    Route::get('EditAppointment/{slug}', EditAppointment::class)->name('AdminEditAppointment');
    /*End::Appointment Operations*/

    /*Begin::Appointment Operations*/
    Route::get('EditProfile', EditProfile::class)->name('AdminEditProfile');
    Route::get('EditPassword', EditPassword::class)->name('AdminEditPassword');
    /*End::Appointment Operations*/

    /*Begin::Appointment Operations*/
    Route::get('Settings', Settings::class)->name('AdminSettings');
    /*End::Appointment Operations*/
});
/*End::Admin Group*/


/*Begin::Auth Group*/
Route::get('/login', Login::class)
    ->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)
    ->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)
    ->name('reset-password')->middleware('signed');
/*End::Auth Group*/
