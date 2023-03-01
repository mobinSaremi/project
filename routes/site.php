<?php

use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ArticleCommentController;
use App\Http\Controllers\Site\NewsCommentController;
use App\Http\Controllers\Site\ContactUsController;
use App\Http\Controllers\Site\AboutUsController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\PersonalController;
use App\Http\Controllers\Site\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product/list', [ProductController::class, 'productlist'])->name('productlist');
Route::get('/product/detail/{id}', [ProductController::class, 'productdetail'])->name('productdetail');


Route::get('/blog/list', [BlogController::class, 'BlogList'])->name('bloglist');
Route::get('/blog/detail/{id}', [BlogController::class, 'BlogDetail'])->name('blogdetail');


Route::get('/news/list', [NewsController::class, 'NewsList'])->name('newslist');
Route::get('/news/detail/{id}', [NewsController::class, 'NewsDetail'])->name('newsdetail');


Route::get('/personal/list', [PersonalController::class, 'Personallist'])->name('personal-list');

Route::post('/blog/comment', [ArticleCommentController::class, 'create'])->name('postcomment');
Route::post('/news/comment', [NewsCommentController::class, 'create'])->name('newscomment');

Route::get('/site/contact_us', [ContactUsController::class, 'getcontact'])->name('getcontact');
Route::post('/contact_us/comment', [ContactUsController::class, 'createContact_us'])->name('postcontact');

Route::get('/site/about_us', [AboutUsController::class, 'getabout'])->name('getabout');
