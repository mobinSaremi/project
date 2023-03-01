<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleCategoryController extends Controller
{
  public function getList()
  {
    $articles = ArticleCategory::orderBy('id', 'DESC')->get();
    return view('admin.article-category.list')
      ->with('articles_category', $articles);
  }

  public function getAdd()
  {
    return view('admin.article-category.add');
  }

  public function postAdd(Request $request)
  {
    $input = $request->all();

    if ($request->hasfile('image')) {
      $address = "assets/upload";
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('image')->move($address, $fileName);
      $input['image'] = $fileName;
    }


    ArticleCategory::create($input);
    return Redirect::action([ArticleCategoryController::class, 'getList']);
  }

  public function getEdit($id)
  {
    $article_cat = ArticleCategory::all();
    $data = ArticleCategory::findOrfail($id);
    return view('admin.article-category.edit')
      ->with('data', $data)
      ->with('article_cat', $article_cat);
  }

  public function postEdit($id, Request $request)
  {
    $input = $request->all();
    $article = ArticleCategory::findOrfail($id);
    $input['status'] = $request->has('status');
    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $article->image);

      $extension = $request->file('image')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back();
      }
    } else {
      $input['image'] = $article->image;
    }
    $article->update($input);
    return Redirect::action([ArticleCategoryController::class, 'getList']);
  }

  public function getDelete($id)
  {
    ArticleCategory::findOrfail($id)->delete();
    return Redirect::action([ArticleCategoryController::class, 'getList']);
  }
}
