<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\EmploiyeeController;
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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});
Auth::routes();
// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

//-------------------event--------------------------------------------------//
Route::get('full-calender', [FullCalenderController::class, 'index'])->name('full-calender');

Route::post('full-calender/action', [FullCalenderController::class, 'action'])->name('full-calender/action');

//-------------------machine--------------------------------------------------//
Route::get('machine', [App\Http\Controllers\MachineController::class, 'index'])->name('machine');
Route::post('form/machine/save', [App\Http\Controllers\MachineController::class, 'saveRecord'])->name('form/machine/save');
Route::post('form/machine/delete', [App\Http\Controllers\MachineController::class, 'deleteMachine'])->name('form/machine/delete');
Route::post('form/machine/update', [App\Http\Controllers\MachineController::class, 'updateMachine'])->name('form/machine/update');

//-------------------emploiyee--------------------------------------------------//
Route::get('emploiyee', [App\Http\Controllers\EmploiyeeController::class, 'index'])->name('emploiyee');
Route::post('form/emploiyee/save', [App\Http\Controllers\EmploiyeeController::class, 'saveRecord'])->name('form/emploiyee/save');
Route::post('form/emploiyee/delete', [App\Http\Controllers\EmploiyeeController::class, 'deleteEmploiyee'])->name('form/emploiyee/delete');
Route::post('form/emploiyee/update', [App\Http\Controllers\EmploiyeeController::class, 'updateEmploiyee'])->name('form/emploiyee/update');
Route::post('form/presence/save', [App\Http\Controllers\EmploiyeeController::class, 'saveRecord'])->name('form/presence/save');
Route::get('presence', function () {  return view('emploiyee.e_presence'); 
})->name('presence');