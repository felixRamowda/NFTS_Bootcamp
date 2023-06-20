<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Implementacion
    Route::resource('/item/create', ItemController::class)->except('show');
    Route::post('/collection/{collection}/Likes', [HomeController::class, 'like'])->name('collection.like');
    Route::get('/author', [ItemController::class, 'show'])->name('author');

});


/* Route::post('/item/{item}/like', [ItemController::class, 'like'])->name('item.like');
 */



require __DIR__ . '/auth.php';