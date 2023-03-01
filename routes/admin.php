<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleCommentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\NewsCommentController;
use App\Http\Controllers\Admin\SuggestionController;



Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('login');
Route::get('/generate-password/{password}', function ($password) {
});
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('admin')->group(function () {

   Route::controller(CategoryController::class)->prefix('/admin/category')->name('category')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(ProductImageController::class)->prefix('/admin/image')->name('image')->group(function () {
      Route::get('/list/{id}', [ProductImageController::class, 'getList'])->name('');
      Route::get('/add/{id}', [ProductImageController::class, 'getAdd'])->name('.Add');
      Route::post('/add', [ProductImageController::class, 'postAdd'])->name('.add');
      Route::get('/delete/{id}', [ProductImageController::class, 'getDelete'])->name('.delete');
   });
   
   Route::controller(ProductController::class)->prefix('/admin/product')->name('product')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(SliderController::class)->prefix('/admin/slider')->name('slider')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(ArticleController::class)->prefix('/admin/article')->name('article')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(SuggestionController::class)->prefix('/admin/suggestion')->name('suggestion')->group(function () {
      Route::get('/list', 'getsuggestion')->name('');
      Route::get('/add', 'getAddSuggestion')->name('.add');
      Route::post('/add', 'postAddSuggestion')->name('.add');
      Route::get('/edit/{id}', 'getEditSuggestion')->name('.edit');
      Route::post('/edit/{id}', 'postEditSuggestion')->name('.edit');
      Route::get('/delete/{id}', 'getDeleteSuggestion')->name('.delete');
   });

   Route::controller(PersonalController::class)->prefix('/admin/personal')->name('personal')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(ArticleCategoryController::class)->prefix('/admin/article-category')->name('article_category')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(NewsController::class)->prefix('/admin/news')->name('news')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/add', 'getAdd')->name('.add');
      Route::post('/add', 'postAdd')->name('.add');
      Route::get('/edit/{id}', 'getEdit')->name('.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(ArticleCommentController::class)->prefix('/admin/articlecomment')->name('comment')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/update',  'getUpdate')->name('.update');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(NewsCommentController::class)->prefix('/admin/newscomment')->name('newcomment')->group(function () {
      Route::get('/list', 'getList')->name('');
      Route::get('/update',  'getUpdate')->name('.update');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(ContactUsController::class)->prefix('/admin/contact_us')->name('contact_us')->group(function () {
      Route::get('/list', 'getlist')->name('');
      Route::get('/delete/{id}', 'getDelete')->name('.delete');
   });

   Route::controller(SettingController::class)->prefix('/admin/setting')->name('setting')->group(function () {
      Route::get('',  'getEdit')->name('.admin');
      Route::post('',  'postEdit')->name('');
   });

   Route::get('/admin', [IndexController::class, 'index'])->name('index.admin');
});
