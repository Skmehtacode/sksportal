<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;


Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::match(["post","get"],"/apply",[HomeController::class,"apply"])->name("apply");
Route::get("/contact",[HomeController::class,"contact"])->name("contact");
Route::get("/courses",[HomeController::class,"courses"])->name("course");
Route::get("/onlinepayment",[HomeController::class,"onlinepayment"])->name("online-payment");


Route::prefix("admin")->group(function(){
    Route::get('/',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/approve-student/{id}',[AdminController::class,"approveStudent"])->name('admin.approve.student');
    Route::get('/passout/student/{id}',[AdminController::class,"passoutStudent"])->name('admin.passout.student');
    Route::get('/manage/student/active',[StudentController::class,"index"])->name('admin.manage.student.active');
    Route::get('/manage/student/new',[StudentController::class,"newAdmission"])->name('admin.manage.student.new');
    Route::get('/manage/student/pass',[StudentController::class,"passOut"])->name('admin.manage.student.passout');
});