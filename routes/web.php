<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[FrontendController::class,'index']);
Route::middleware('auth')->group(function () {
Route::controller(BackendController::class)->group(function(){
    Route::get('/user/cv','UserCv')->name('usercv');
    Route::get('/user/logout','destroy')->name('user.logout');
    Route::post('/save/info','SaveInfo')->name('save.info');
    Route::get('/edit/info','EditInfo')->name('edit.info');
    Route::post('/update/info','UpdateInfo')->name('update.info');
    Route::get('/user/profile','UserProfile')->name('user.profile');
    Route::post('/save/profile','SaveProfile')->name('save.profile');
    Route::get('/edit/profile','EditProfile')->name('edit.profile');
    Route::post('/update/profile','UpdateProfile')->name('update.profile');
    Route::get('/user/skills','UserSkills')->name('user.skills');
    Route::post('/save/skills','SaveSkills')->name('save.skills');
    Route::get('/edit/skills','EditSkills')->name('edit.skills');
    Route::post('/update/skills','UpdateSkills')->name('update.skills');
    Route::get('/user/edu','UserEdu')->name('user.edu');
    Route::post('/save/edu','SaveEdu')->name('save.edu');
    Route::get('/edit/edu','EditEdu')->name('edit.edu');
    Route::get('/edit/education/{id}','EditEducation')->name('edit.education');
    Route::post('/update/edu','UpdateEdu')->name('update.edu');
    Route::get('/edit/delete/{id}','DeleteEducation')->name('delete.education');
    Route::get('/user/language','userLang')->name('user.languge');
    Route::post('/save/lang','SaveLang')->name('save.lang');
    Route::get('/edit/lang','EditLang')->name('edit.lang');
    Route::post('/update/lang','UpdateLang')->name('update.lang');
    Route::get('/user/image','userImage')->name('user.image');
    Route::post('/save/image','saveImage')->name('save.image');
    Route::get('/edit/image','EditImage')->name('edit.image');
    Route::post('/update/image','UpdateImage')->name('update.image');

    Route::get('/cv','Cv')->name('cv');
    Route::get('/downloadcv','downloadCv')->name('downloadcv');

    Route::get('/sendemail','sendEmail')->name('sendemail');

});

Route::get('/admin',[BackendController::class,'admin'])->name('admin')->middleware('admin');
Route::post('/save/admin',[BackendController::class,'saveAdmin'])->name('save.admin');










});
require __DIR__.'/auth.php';

