<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\admin\page3;
use App\Livewire\admin\page2;
use App\Livewire\admin\page1;
///////////////////////////////
use App\Livewire\front\Courses;
use App\Livewire\front\CoursIndex;
use App\Livewire\front\index;
///////////////////////////////
Route::get('/', index::class);
Route::get('/Courses', Courses::class);
Route::get('/CoursIndex', CoursIndex::class);
// ////////////////////////////////
Route::get('/admin',page1::class);
Route::get('/admin/1', page2::class);
/////////////////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
