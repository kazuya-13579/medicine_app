<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\AdminLogoutController;




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

// Route::get('/medicines/register', [MedicineController::class, 'show_register'])->name('show_register')->middleware('show_register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [MedicineController::class, 'show_customer_view'])->name('show_customer_view');
// Route::get('/', [MedicineController::class, 'index']);
Route::get('/medicines/register', [MedicineController::class, 'show_register'])->name('show_register');
Route::get('/medicines/show', [MedicineController::class, 'show_medicine'])->name('show_medicine');
Route::get('/medicines/search', [MedicineController::class, 'search_jancode'])->name('search_jancode');//検索機能の実装
Route::get('/medicines/search_medicine', [MedicineController::class, 'search_medicine'])->name('search_medicine');
Route::get('/medicines/{medicine}', [MedicineController::class, 'show_medicine_detail'])->name('show_medicine_detail');
Route::get('/categories/{category}', [CategoryController::class, 'category_list'])->name('category_list');
Route::post('/medicines', [MedicineController::class, 'register'])->name('register');
Route::delete('/medicines/{medicine}', [MedicineController::class, 'delete_medicine'])->name('delete_medicine');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/medicines/register', [MedicineController::class, 'show_register'])->name('show_register');
});

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    // 登録
    Route::get('register', [AdminRegisterController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [AdminRegisterController::class, 'store']);

    // ログイン
    Route::get('login', [AdminLoginController::class, 'showLoginPage'])
        ->name('admin.login');

    Route::post('login', [AdminLoginController::class, 'login']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('dashboard', fn() => view('admin.dashboard'))
            ->name('admin.dashboard');
    });
    
    Route::get('logout', [AdminLogoutController::class, 'logout'])
        ->name('admin.logout');
});
