<?php

use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\FrontController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::prefix('/')->controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{id}', 'blogDetail')->name('blogDetail');
});

Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::prefix('/categories')
        ->controller(Category::class)
        ->name('category.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/create', 'store');
            Route::get('/edit/{category}', 'edit')->name('edit');
            Route::put('/edit/{category}', 'update');
        });
});
