<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\Auth\LoginContoller;
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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/diagrams', function () {
        return view('diagrams');
    })->name('diagrams');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/tests', function () {
        return view('tests');
    })->name('tests');
    Route::get('/diagramActivity', function () {
        return view('diagrams.diagramActivity');
    })->name('diagramActivity');

    Route::get('/diagramStudents', function () {
        return view('diagrams.diagramStudents');
    })->name('diagramStudents');

    Route::get('/diagramRating', function () {
        return view('diagrams.diagramRating');
    })->name('diagramRating');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/settings', [Controller::class, 'setSettings'])->name('settings');

    Route::post('/saveFile', [Controller::class, 'saveFile'])->name('saveFile');

    Route::post('/addUser', [UserController::class, 'addUser'])->name('addUser');
    Route::post('/addTest', [TestController::class, 'addTest'])->name('addTest');


    Route::get('/tests/{test}', [TestController::class, 'deleteTest'])->name('deleteTest');
    Route::get('/users/{user}', [UserController::class, 'deleteUser'])->name('deleteUser');

});

