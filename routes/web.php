<?php

use App\Http\Controllers\CompanyController;
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

Route::get("/companies/{company}", [CompanyController::class, 'show'])
    ->name('companies.view'); // set alias

//Route::resource('/companies', CompanyController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
