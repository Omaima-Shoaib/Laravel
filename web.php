<?php
use App\Http\Controllers\MyController;
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
    return view('welcome');
})->name('welcome');
Route ::get('users',[MyController::class,'index'])->name('users.index');
Route ::get('users/{id}/edit',[MyController::class,'edit'])->where('id','[0-9]+')->name('users.edit');
Route ::delete('users/{id}',[MyController::class,'destroy'])->where('id','[0-9]+') ->name('users.destroy');
Route ::get('users/create' ,[MyController::class,'create'])->name('users.create');
Route ::get('users/{id}',[MyController::class,'show'])->where('id','[0-9]+')->name('users.show');

Route ::post('users',[MyController::class,'store'])->name('users.store');

