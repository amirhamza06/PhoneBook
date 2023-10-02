<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

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

Route::get('/', [ContactController::class,'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');
Route::POST('/contacts/store', [ContactController::class,'store'])->name('contacts.store');
Route::get('contacts/{id}/edit', [ContactController::class, 'edit']);
Route::PUT('contacts/{id}/update', [ContactController::class, 'update']);
Route::delete('contacts/{id}/delete', [ContactController::class, 'destroy']);
Route::get('contacts/{id}/show',[ContactController::class, 'show']);
