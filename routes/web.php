<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MadurityLevelController;
use App\Http\Controllers\DimensionsController;
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
    return view('startPage.index');
});

// RUTAS DE REGISTRO
Auth::routes();
Route::get('/register/verify/{code}', 'Auth\RegisterController@verify');
Route::resource('reminder', 'RemindersController');
Route::get('reminder',['as'=>'reminder','uses' => 'RemindersController@getRemind']);
Route::post('postRemind',['as'=>'postRemind','uses' => 'RemindersController@postRemind']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Rutas gestionadas una vez se inicia la sesion.
 */
Route::group( ['middleware' => ['auth']], function() { 
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    // RUTAS DASHBOARD
    Route::get('dashBoardAdmin',[App\Http\Controllers\DashboardController::class, 'dashBoardAdmin'])->name('dashBoardAdmin');
    Route::get('dashBoardUser',[App\Http\Controllers\DashboardController::class, 'dashBoardUser'] )->name('dashBoardUser');

    // RUTAS PARAMETRIZACION
    Route::resource('roles', RoleController::class);
    Route::put('/roles/{id}/update-status', [App\Http\Controllers\RoleController::class, 'rolUpdateStatus'])->name('roles.updateStatus');

    Route::resource('madurityLevel', MadurityLevelController::class);
    Route::put('/madurityLevel/{id}/update-status', [App\Http\Controllers\MadurityLevelController::class, 'UpdateStatus'])->name('madurityLevel.updateStatus');

    Route::resource('dimension', DimensionsController::class);
    Route::put('/dimension/{id}/update-status', [App\Http\Controllers\DimensionsController::class, 'UpdateStatus'])->name('dimension.updateStatus');
    
});
