<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    $data = [
        [
            "id" => 1,
            "name" => "Introduction to Machine Learning"
        ],
        [
            "id" => 2,
            "name" => "Advanced Deep Learning"
        ],
        [
            "id" => 3,
            "name" => "Introduction to Python"
        ],
        [
            "id" => 4,
            "name" => "Introduction to PHP"
        ],
        [
            "id" => 5,
            "name" => "Introduction to Laravel"
        ],
    ];
    return view('book')->with('book', $data)->with('name', "Wendi");
});

Route::get('/detail/{id}', function($id) {
    $data = [
        [
            "id" => 1,
            "name" => "Introduction to Machine Learning"
        ],
        [
            "id" => 2,
            "name" => "Advanced Deep Learning"
        ],
        [
            "id" => 3,
            "name" => "Introduction to Python"
        ],
        [
            "id" => 4,
            "name" => "Introduction to PHP"
        ],
        [
            "id" => 5,
            "name" => "Introduction to Laravel"
        ],
    ];
    return view('detail')->with('book', $data[$id-1]);
})->name('detail');


Route::get('/profile', [UserController::class, 'index']);
