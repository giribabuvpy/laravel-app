<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseItemController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', function () {
    $user = User::find(1);
    $expense = $user->userExpenses;
    dd($expense);
    //return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Role middleware defined to check the usertype and access
Route::middleware(['auth', 'role:admin'])->group(function () {

    //All AdminController routes
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard','AdminDashboard')->name('admin.dashboard');
    });

    //All CategoryController routes
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/category/all','AllCategory')->name('category.all');
        Route::get('/admin/category/add','AddCategory')->name('category.add');
        Route::post('/admin/category/store','StoreCategory')->name('category.store');
    }); 

     //All SubCategory(items) routes
     Route::controller(ExpenseItemController::class)->group(function(){
        Route::get('/admin/item/all','AllItems')->name('items.all');
        Route::get('/admin/item/add','AddItem')->name('item.add');
        Route::post('/admin/item/store','StoreItem')->name('item.store');
    }); 
     
});