<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\websitController;

Route::get('/',[websitController::class ,'index'] )->name('website.index');
Route::get('/about',[websitController::class ,'about'] )->name('website.about');
Route::controller(AuthController::class)->group(function (){
    Route::get('/login','login')->name('Auth.login');
    Route::get('/register','register')->name('Auth.register');
    Route::post('/handleRegster','handleRegster')->name('Auth.handleRegster');
    Route::post('/handlelogin','handlelogin')->name('Auth.handlelogin');
    Route::get('/logout','logout')->name('Auth.logout');
});

Route::middleware('newLogin')->prefix('/admin')->name('admin.')->group(function(){
    Route::get('/',HomeController::class)->name('index');
    Route::controller(StudentController::class)->name('students.')->group(function(){
        // Route::get('/students','index')->name('index');
        // Route::get('/students/create','create')->name('create');
        // Route::post('/students/store','store')->name('store');
        // Route::get('/students/{id}/edit','edit')->name('edit'); //{id}>>> علشان اقوله ان لازم ارجع بحد معين 
        // Route::put('/students/{id}','update')->name('update'); // put >>> edit in database
        Route::get('/students/archive','archive')->name('archive');
        // Route::get('/students/{id}','show')->name('show');
        // Route::delete('/students/{id}/','destroy')->name('destroy');
        Route::delete('/students/{id}/archive','destroyArchive')->name('destroyArchive');
        Route::post('/students/{id}/restore','restore')->name('restore');
        Route::post('/students/addCourses/{id}','addCourses')->name('addCourses');

    });
    Route::resource('/students', StudentController::class);
    Route::get('/departments/{id}',[DepartmentController::class,'show'])->name('departments.show');
    // Route::controller(TestController::class)->name('test.')->group(function(){ //شغاله علي testColler.php
    //     Route::get('/test1','test1')->name('test1');
    //     Route::get('/test2/{id}/{name?}','test2')->name('test2')->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);
    // });
});
Route::get('/master',function(){
    return view('layout.master');
});
// Route::get('/store',function(){
//     return view('scced');
// });

// Route::get('/test1',[TestController::class,'test1'])->name('test.test1');
// Route::get('/test2/{id}/{name?}',[TestController::class,'test2'])->name('test.test2')->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

