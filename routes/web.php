<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;  

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
<!--|-->
<!--| Here is where you can register web routes for your application. These-->
<!--| routes are loaded by the RouteServiceProvider within a group which-->
<!--| contains the "web" middleware group. Now create something great!-->
<!--|-->
<!--*/
Route::get('/', [MedicineController::class, 'index']);
Route::get('/medicines/register', [MedicineController::class, 'show_register']);
Route::get('/medicines/show', [MedicineController::class, 'show_medicine']);
Route::get('/medicines/search', [MedicineController::class, 'search_jancode']);//検索機能の実装
Route::get('/medicines/{medicine}', [MedicineController::class, 'show_medicine_detail']);
Route::post('/medicines', [MedicineController::class, 'register']);
Route::delete('/medicines/{medicine}', [MedicineController::class, 'delete_medicine']);



