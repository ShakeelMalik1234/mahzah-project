<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('login');
});
Route::get('registration',[Controller::class,'userRagistration'])->name('user-ragistration');
Route::get('welcome',[Controller::class,'userWelcome'])->name('user-welcome');
Route::get('welcome-about',[Controller::class,'userAbout'])->name('user-about');
Route::get('forgot-password',[Controller::class,'userForgotPassword'])->name('user-forgot-password');
Route::get('mahzah-dashboard',[Controller::class,'userDashboard'])->name('user-dashboard');
Route::get('students',[Controller::class,'userStudents'])->name('user-students');
Route::get('Leads',[Controller::class,'userStudentsLeads'])->name('user-students-leads');
Route::get('owners',[Controller::class,'userStudentsOwners'])->name('user-students-owners');
Route::get('authors',[Controller::class,'userStudentsAuthors'])->name('user-students-authors');
Route::get('affiliates',[Controller::class,'userStudentsAffiliates'])->name('user-students-affiliates');
Route::get('costume',[Controller::class,'userStudentsCostume'])->name('user-students-costume');

// site page
Route::get('sitepage',[Controller::class,'userSitePage'])->name('user-sitepage');
Route::get('themelibrary',[Controller::class,'userThemeLibrary'])->name('user-themelibrary');
