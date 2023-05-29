<?php
use Illuminate\Support\Facades\Route;
use Modules\AdminPanel\Http\Controllers\PageCategoryController;
use Modules\AdminPanel\Http\Controllers\PageController;

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

Route::group([
    'prefix' => 'adminpanel',
    'middleware' => ['auth','can:isAdmin']
],function() {
    Route::get('/', 'AdminPanelController@index');

    // index
    Route::get('/page-categories',[PageCategoryController::class, 'index'])->name('admin.page-category.index');

    // create
    Route::get('/page-categories/create',[PageCategoryController::class, 'create'])->name('admin.page-category.create');
    Route::post('/page-categories/create',[PageCategoryController::class, 'store'])->name('admin.page-category.create');

    // edit
    Route::get('/page-categories/edit/{category}',[PageCategoryController::class, 'edit'])->name('admin.page-category.edit');
    Route::patch('/page-categories/edit/{category}',[PageCategoryController::class, 'update'])->name('admin.page-category.edit');

    // delete
    Route::get('/page-categories/delete/{category}',[PageCategoryController::class, 'destroy'])->name('admin.page-category.delete');


    // page controller
    Route::resource("/pages", PageController::class);

});
