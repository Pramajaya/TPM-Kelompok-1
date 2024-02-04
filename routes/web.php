<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HackController;
use App\Http\Controllers\AuthController;
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



Route::get('/', [HackController::class, 'homepage'])->name('homepage');

Route::get('/adminPanel', [HackController::class, 'adminPanel'])->name('adminPanel');

Route::get('/create', [HackController::class, 'create'])->name('create');

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');

Route::post('/registration', [AuthController::class, 'registration_post'])->name('registration_post');

Route::post('/send-mail', [MailController::class, 'sendMail'])->name('sendMail');

Route::post('/store', [HackController::class, 'store'])->name('store');

Route::get('/edit/{id}', [HackController::class, 'edit'] )->name('edit');

Route::patch('/update/{id}', [HackController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [HackController::class, 'delete'])->name('delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
