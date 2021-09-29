<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileUpdate;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostjobController;
use App\Http\Controllers\ApplyforjobController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
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





Route::get('/',[Controller::class,'index'])->name('home');

//Route::get('/update-profile/{id}',[ProfileUpdate::class,'show'])->name('profileupdate');
Route::get('/all-jobs/{job_type?}',[Controller::class,'alljobs'])->name('alljobs');
Route::get('/job-detail/{id}/',[Controller::class,'jobdetail'])->name('jobdetail');

Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
Route::post('/contact-us',[ContactController::class,'store'])->name('contacts');


Route::get('/user-profile',[Controller::class,'profile'])->name('profile');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
   
    Route::get('/update-profile/{id}',[ProfileUpdate::class,'show'])->name('profileupdate');
    Route::post('/update-profile/{id}',[ProfileUpdate::class,'store'])->name('profileupdates');
    Route::get('/apply-for-job/{id}',[ApplyforjobController::class,'show'])->name('applyforjob');
Route::post('/apply-for-job/{id}',[ApplyforjobController::class,'store'])->name('apply-forjob');
Route::get('/user-experience/{id}/',[ExperienceController::class,'show'])->name('experience');
Route::post('/user-experience/{id}/',[ExperienceController::class,'store'])->name('experiences');

    
    
});


Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){

    Route::get('alljobs',[AdminController::class,'alljobs'])->name('all-jobs');
    Route::get('all-companies',[AdminController::class,'allcompanies'])->name('allcompanies');
    Route::get('delete-company/{id}',[AdminController::class,'deletecompany'])->name('deletecompany');
    
    Route::get('delete-job/{id}',[AdminController::class,'deletejob'])->name('deletejob');
    
Route::get('all-job-seekers',[AdminController::class,'alljobseekers'])->name('alljobseekers');
Route::get('delete-job-seekers/{id}/',[AdminController::class,'deletejobseeker'])->name('deletejobseeker');

    Route::get('/register-company/{id}',[CompanyController::class,'show'])->name('register-company');
    Route::post('/register-company/{id}',[CompanyController::class,'store'])->name('registercompany');
   
    Route::get('/post-job/{id}/',[PostjobController::class,'show'])->name('post-job');
    Route::post('/post-job/{user_id}/',[PostjobController::class,'store'])->name('postjob');

});