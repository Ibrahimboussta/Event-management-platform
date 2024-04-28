<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/oragnisateur', function () {
//     return view('admin.oragnisateur');
// })->name('oragnisateur.index');

Route::get('/oragnisateur', [EventController::class, 'index'])->name('oragnisateur.index')->middleware('role:Organisateur');


Route::get('/attends', function () {
    return view('Attendees.attendees');
})->name('attends.attends')->middleware('role:Attends');


Route::post('/admin/post', [EventController::class, 'store']);
Route::get('/event/show', [EventController::class, 'show']);

Route::post('/events/buy/{event}', [EventController::class, 'buy'])->name('events.buy');

// Route::put("/calender/update/{calenders}", [CalnederController::class, 'update'])->name('calender.update');
Route::get('/admin/show/{event}' , [EventController::class, 'update'])->name('admin.show');
Route::put('/admin/update/{event}' , [EventController::class, 'update'])->name('admin.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/events', [EventController::class, 'event'])->name('events.index');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', function () {
    return view('About.about');
})->name('about.about');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware(AdminMiddleware::class);

Route::post('/event/pay/{eventId}', [EventController::class, 'session'])->name('event.pay');

Route::get('/session', [StripeController::class, 'session']);
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::delete('/user/delete/{user}', [UserController::class, 'destroy'])->name('user.delete');


Route::get('/search', [EventController::class, 'search'])->name('search');

Route::get('/ticket', [EventController::class, 'ticket'])->name('ticket');
require __DIR__.'/auth.php';
