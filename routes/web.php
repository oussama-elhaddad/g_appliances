<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplianceController;
use App\Http\Controllers\PovController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\SceanceController;
use App\Http\Controllers\ApplianceTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('appliances/create_type', [ApplianceController::class, 'create_type'])->name('appliances.create_type');
Route::post('appliances/store_type', [ApplianceController::class, 'store_type'])->name('appliances.store_type');
Route::put('appliances/edit_type', [ApplianceController::class, 'edit_type'])->name('appliances.edit_type');
Route::delete('appliances/{id}/destroy_type', [ApplianceController::class, 'destroy_type'])->name('appliances.destroy_type');

Route::resource('appliances', ApplianceController::class);//->middleware('auth');



Route::resource('clients', ClientController::class);
Route::resource('povs', PovController::class);
Route::resource('contacts', ContactController::class);
Route::resource('suivis', SuiviController::class);
Route::resource('sceances', SceanceController::class);



Route::get('login',array('as'=>'login',function(){
    return view('login');
}));

Route::get("/", function(){
    return redirect()->route("appliances.index");
});
Route::get("{path}", function(){
    return redirect()->route("appliances.index");
});
