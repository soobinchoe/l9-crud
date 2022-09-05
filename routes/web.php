<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// http://localhost/companies
Route::get("/companies", [CompanyController::class, 'index'])
    ->name('companies.index');

Route::get("/companies/create", [CompanyController::class, 'create'])
    ->name('companies.create');

Route::post("/companies", [CompanyController::class, 'store'])
    ->name('companies.store');

// update every data
Route::put("/companies/{company}", [CompanyController::class, 'update'])
    ->name('companies.update');

// only update the one want to change
/*Route::patch("/companies/{company}", [CompanyController::class, 'update'])
    ->name('companies.update');*/

Route::get("/companies/{company}/edit", [CompanyController::class, 'edit'])
    ->name('companies.edit');

//Route::get("/companies/{company}", [CompanyController::class, 'show'])
//    ->name('companies.view'); // set alias

Route::get("/companies/{company}/delete", [CompanyController::class, 'delete'])
    ->name('companies.delete');

Route::post("/companies/{company}", [CompanyController::class, 'destroy'])
    ->name('companies.destroy');

Route::get('/companies/{company}', [CompanyController::class, 'show'])
    ->name('companies.view');

//Route::resource('/companies', CompanyController::class);


// Products Route
Route::get("/products", [ProductController::class, 'index'])
    ->name('products.index');

Route::get("/products/create", [ProductController::class, 'create'])
    ->name('products.create');

Route::post("/products", [ProductController::class, 'store'])
    ->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.view');

Route::get("/products/{product}/edit", [ProductController::class, 'edit'])
    ->name('products.edit');

Route::put("/products/{product}", [ProductController::class, 'update'])
    ->name('products.update');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
