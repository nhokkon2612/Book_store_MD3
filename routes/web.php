<?php

use App\Http\Controllers\Admins\BookController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\CustomerController;
use App\Http\Controllers\Admins\PublisherController;
use App\Http\Controllers\Admins\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AuthorsController;

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
    return view('backend.layout.page');
})->name('homepage');

Route::get('/1', function () {
    return view('backend.layout.dashboard');
});
Route::get('/2', function () {
    return view('layouts.master');
});


Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/create', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('{id}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::post('{id}/edit', [BookController::class, 'update'])->name('admin.books.update');
    Route::get('{id}/destroy', [BookController::class, 'destroy'])->name('admin.books.destroy');
});
Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('admin.customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('admin.customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('admin.customers.store');
    Route::get('{id}/edit', [CustomerController::class, 'edit'])->name('admin.customers.edit');
    Route::post('{id}/edit', [CustomerController::class, 'update'])->name('admin.customers.update');
    Route::get('{id}/destroy', [CustomerController::class, 'destroy'])->name('admin.customers.destroy');
});
Route::prefix('authors')->group(function () {
    Route::get('/', [AuthorsController::class, 'index'])->name('admin.authors.index');
    Route::get('/create', [AuthorsController::class, 'create'])->name('admin.authors.create');
    Route::post('/create', [AuthorsController::class, 'store'])->name('admin.authors.store');
    Route::get('{id}/edit', [AuthorsController::class, 'edit'])->name('admin.authors.edit');
    Route::post('{id}/edit', [AuthorsController::class, 'update'])->name('admin.authors.update');
    Route::get('{id}/destroy', [AuthorsController::class, 'destroy'])->name('admin.authors.destroy');
});
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('{id}/edit', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('{id}/destroy', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/create', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('{id}/edit', [UserController::class, 'update'])->name('admin.users.update');
    Route::get('{id}/destroy', [UserController::class, 'destroy'])->name('admin.users.destroy');
});
Route::prefix('publishers')->group(function () {
    Route::get('/', [PublisherController::class, 'index'])->name('admin.publishers.index');
    Route::get('/create', [PublisherController::class, 'create'])->name('admin.publishers.create');
    Route::post('/create', [PublisherController::class, 'store'])->name('admin.publishers.store');
    Route::get('{id}/edit', [PublisherController::class, 'edit'])->name('admin.publishers.edit');
    Route::post('{id}/edit', [PublisherController::class, 'update'])->name('admin.publishers.update');
    Route::get('{id}/destroy', [PublisherController::class, 'destroy'])->name('admin.publishers.destroy');
});
