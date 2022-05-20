<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);

Route::get('/catalog', [ProductsController::class, 'index']);

Route::post('/catalog', [ProductsController::class, 'save']);

Route::get('/account', [MainController::class, 'account']);

Route::get('/create', [ProductsController::class, 'create']);

Route::get('/update/{id}', [ProductsController::class, 'showUpdate']) -> where('id', '[0-9]+');

Route::put('/catalog', [ProductsController::class, 'update']);

Route::get('/delete/{id}', [ProductsController::class, 'showDelete']) -> where('id', '[0-9]+');

Route::delete('/catalog', [ProductsController::class, 'destroy']);

Route::get('/details/{product_id}', [ProductsController::class, 'showDetails']);