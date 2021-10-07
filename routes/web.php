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
    return view('home');
})->name('home-main');

Route::get('/about', [App\Http\Controllers\MasterController::class, 'about']);

Route::get('/resume', [App\Http\Controllers\ResumeController::class, 'index']);

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index']);

Route::get('/admin/login', [App\Http\Controllers\AuthController::class, 'index']);

Route::post('/admin/login/auth', [App\Http\Controllers\AuthController::class, 'login_process']);

Route::get('/admin/logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::middleware('isLogged')->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    // USERS MANAGEMENT    
    Route::get('/admin/users', [App\Http\Controllers\UsersController::class, 'index'])->middleware('management')->name('admin.users');

    Route::get('/admin/users/add', [App\Http\Controllers\UsersController::class, 'showAddUserForm'])->middleware('management')->name('admin.users.showAddUserForm');

    Route::post('/admin/users/add/process', [App\Http\Controllers\UsersController::class, 'AddUserProcess'])->middleware('management');

    Route::get('/admin/users/edit/{id}', [App\Http\Controllers\UsersController::class, 'showEditUserForm'])->middleware('management');

    Route::post('/admin/users/edit/process', [App\Http\Controllers\UsersController::class, 'EditUserProcess'])->middleware('management');

    Route::get('/admin/users/delete/{id}', [App\Http\Controllers\UsersController::class, 'DeleteUser'])->middleware('management');

    // PORTFOLIO
    // EDUCATION   
    Route::get('/admin/education', [App\Http\Controllers\ResumeController::class, 'adminEducation'])->name('admin.education');

    Route::get('/admin/education/add', [App\Http\Controllers\ResumeController::class, 'showAddEducationForm'])->name('admin.education.showAddEducationForm');

    Route::post('/admin/education/add/process', [App\Http\Controllers\ResumeController::class, 'AddEducationProcess']);

    Route::get('/admin/education/edit/{id}', [App\Http\Controllers\ResumeController::class, 'showEditEducationForm']);

    Route::post('/admin/education/edit/process', [App\Http\Controllers\ResumeController::class, 'EditEducationProcess']);

    Route::get('/admin/education/delete/{id}', [App\Http\Controllers\ResumeController::class, 'DeleteEducationProcess']);
    
    // EXPERIENCE
    Route::get('/admin/experience', [App\Http\Controllers\ResumeController::class, 'adminExperience'])->name('admin.experience');

    Route::get('/admin/experience/add', [App\Http\Controllers\ResumeController::class, 'showAddExperienceForm'])->name('admin.experience.showAddExperienceForm');

    Route::post('/admin/experience/add/process', [App\Http\Controllers\ResumeController::class, 'AddExperienceProcess']);

    Route::get('/admin/experience/edit/{id}', [App\Http\Controllers\ResumeController::class, 'showEditExperienceForm']);

    Route::post('/admin/experience/edit/process', [App\Http\Controllers\ResumeController::class, 'EditExperienceProcess']);

    Route::get('/admin/experience/delete/{id}', [App\Http\Controllers\ResumeController::class, 'DeleteExperienceProcess']);

    // SKILLS
    Route::get('/admin/skills', [App\Http\Controllers\ResumeController::class, 'adminSkills'])->name('admin.skills');

    Route::get('/admin/skills/add', [App\Http\Controllers\ResumeController::class, 'showAddSkillsForm'])->name('admin.skills.showAddSkillsForm');

    Route::post('/admin/skills/add/process', [App\Http\Controllers\ResumeController::class, 'AddSkillsProcess']);

    Route::get('/admin/skills/edit/{id}', [App\Http\Controllers\ResumeController::class, 'showEditSkillsForm']);

    Route::post('/admin/skills/edit/process', [App\Http\Controllers\ResumeController::class, 'EditSkillsProcess']);

    Route::get('/admin/skills/delete/{id}', [App\Http\Controllers\ResumeController::class, 'DeleteSkillsProcess']);

    // PROJECTS
    Route::get('/admin/portfolio',[App\Http\Controllers\PortfolioController::class, 'adminPortfolio'])->name('admin.portfolio');

    Route::get('/admin/portfolio/add',[App\Http\Controllers\PortfolioController::class, 'showAddPortfolioForm'])->name('admin.portfolio.showAddPortfolioForm');
    
    Route::post('/admin/portfolio/add/process',[App\Http\Controllers\PortfolioController::class, 'AddPortfolioProcess']);
    
    Route::get('/admin/portfolio/edit/{id}',[App\Http\Controllers\PortfolioController::class, 'showEditPortfolioForm']);
    
    Route::post('/admin/portfolio/edit/process',[App\Http\Controllers\PortfolioController::class, 'EditPortfolioProcess']);
    
    Route::get('/admin/portfolio/delete/{id}',[App\Http\Controllers\PortfolioController::class, 'DeletePortfolioProcess']);
});

