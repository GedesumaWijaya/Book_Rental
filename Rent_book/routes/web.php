<?php
use App\Http\Controllers\RatingController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BooksController::class, 'Showing_the_books'])->name('booklist');
Route::get('/author',[AuthorController::class, 'Showing_the_author']);
Route::get('/rating', [RatingController::class, 'showing_rating_form']);
Route::post('/rating', [RatingController::class, 'storing_rating'])->name('storing_rating');