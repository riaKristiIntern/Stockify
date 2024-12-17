<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductAttributeController;

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

// Route::name('index-practice')->get('/', function () {
//     return view('pages.practice.index');
// });

// Route::name('practice.')->group(function () {
//     Route::name('first')->get('practice/1', function () {
//         return view('pages.practice.1');
//     });
//     Route::name('second')->get('practice/2', function () {
//         return view('pages.practice.2');
//     });
// });

// Admin
// Dashboard
Route::middleware('role:admin')->get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

// Produk
Route::middleware('role:admin')->prefix('admin/products')->name('admin.products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('/import', [ProductController::class, 'import'])->name('import');
    Route::get('/export', [ProductController::class, 'export'])->name('export');
});

// Kategori Produk
Route::middleware('role:admin')->prefix('admin/categories')->name('admin.categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::put('{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

// Routes untuk Product Attributes
Route::middleware('role:admin')->prefix('admin.products.attributes.index')->name('admin.attributes.')->group(function () {
    Route::get('/', [ProductAttributeController::class, 'index'])->name('index'); // Menampilkan daftar atribut
    Route::get('/create', [ProductAttributeController::class, 'create'])->name('create'); // Form tambah atribut
    Route::post('/', [ProductAttributeController::class, 'store'])->name('store'); // Menyimpan atribut baru
    Route::get('/{attribute}/edit', [ProductAttributeController::class, 'edit'])->name('edit'); // Form edit atribut
    Route::put('/{attribute}', [ProductAttributeController::class, 'update'])->name('update'); // Update atribut
    Route::delete('/{attribute}', [ProductAttributeController::class, 'destroy'])->name('destroy'); // Hapus atribut
});

// Supplier
Route::middleware('role:admin')->prefix('admin/suppliers')->name('admin.suppliers.')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/create', [SupplierController::class, 'create'])->name('create');
    Route::post('/store', [SupplierController::class, 'store'])->name('store');
});

// Stok
Route::middleware('role:admin')->prefix('admin/stock')->name('admin.stock.')->group(function () {
    Route::get('/', [StockController::class, 'index'])->name('index');
    Route::get('/history', [StockController::class, 'history'])->name('history');
    Route::get('/opname', [StockController::class, 'opname'])->name('opname');
    Route::get('/min', [StockController::class, 'min'])->name('min');
});

// Pengguna
Route::middleware('role:admin')->prefix('admin/users')->name('admin.users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
});

// Laporan
Route::middleware('role:admin')->prefix('admin/reports')->name('admin.reports.')->group(function () {
    Route::get('/', [ReportController::class, 'index'])->name('index');
    Route::get('/stock', [ReportController::class, 'stock'])->name('stock');
    Route::get('/transactions', [ReportController::class, 'transactions'])->name('transactions');
    Route::get('/users', [ReportController::class, 'users'])->name('users');
});

// Pengaturan
Route::middleware('role:admin')->prefix('admin/settings')->name('admin.settings.')->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
});


Route::middleware('role:manager')->group(function () {
    // Route::get('/manager/dashboard', [DashboardController::class, 'managerDashboard'])->name('manager.dashboard');
    // Route::get('/manager/products', [ProductController::class, 'index'])->name('manager.products.index');
});

Route::middleware('role:staff')->group(function () {
    // Route::get('/staff/dashboard', [DashboardController::class, 'staffDashboard'])->name('staff.dashboard');
    // Route::get('/staff/products', [ProductController::class, 'index'])->name('staff.products.index');
});

// // Root URL
// Route::get('/', function () {
//     return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
// })->name('home');

// // Halaman Login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Middleware untuk redirect ke dashboard sesuai peran
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'redirectToDashboard'])->name('dashboard');

//     // Dashboard untuk Admin
//     Route::middleware('role:Admin')->group(function () {
//         Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
//     });

//     // Dashboard untuk Manajer Gudang
//     Route::middleware('role:Manajer Gudang')->group(function () {
//         Route::get('/manager/dashboard', [DashboardController::class, 'managerDashboard'])->name('manager.dashboard');
//     });

//     // Dashboard untuk Staff Gudang
//     Route::middleware('role:Staff Gudang')->group(function () {
//         Route::get('/staff/dashboard', [DashboardController::class, 'staffDashboard'])->name('staff.dashboard');
//     });
// });
