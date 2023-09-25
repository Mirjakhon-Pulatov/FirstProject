<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;





Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/project/view/{id}', [PageController::class, 'view'])->name('view');
Route::post('/message/send', [MessageController::class, 'send'])->name('send_message');


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('auth.partials.index');
    })->name('admin');

    Route::get('/messages', [MessageController::class, 'messages'])->name('messages');
    Route::delete('/messages/delete/{id}', [MessageController::class, 'destroy'])->name('delete_message');

    Route::resource('project', ProjectController::class);

    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/password/update/{id}', [ProfileController::class, 'update_password'])->name('profile.update_password');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
