<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;


Route::get('/', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/admin', [PortfolioController::class, 'admin'])->name('admin');

// Work routes
Route::get('/admin/works/create', [WorkController::class, 'create'])->name('admin.works.create');
Route::post('/admin/works/store', [WorkController::class, 'store'])->name('admin.works.store');
Route::get('/admin/works', [WorkController::class, 'index'])->name('admin.works.index');
Route::get('/admin/works/edit/{id}', [WorkController::class, 'edit'])->name('admin.works.edit');
Route::put('/admin/works/update/{id}', [WorkController::class, 'update'])->name('admin.works.update');
Route::delete('/admin/works/delete/{id}', [WorkController::class, 'destroy'])->name('admin.works.destroy');


//contact
 
 

Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/messages', [ContactController::class, 'showAllMessages'])->name('messages.index');
Route::delete('/messages/{id}', [ContactController::class, 'deleteMessage'])->name('messages.delete');



 


 
