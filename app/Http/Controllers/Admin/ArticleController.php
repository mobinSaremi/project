<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Http\Requests\Admin\ArticleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
  public function getList()
  {
    $articles = Article::orderBy('id', 'DESC')->get();
    return view('admin.article.list')
      ->with('articles', $articles);
  }
  public function getAdd()
  {
    $article = Article::all();
    return view('admin.article.add')
      ->with('articles', $article);
  }
  public function postAdd(ArticleRequest $request)
  {
    $input = $request->all();
    $input['status'] = $request->has('status');
    if ($request->hasfile('image')) {
      $address = "assets/upload";
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('image')->move($address, $fileName);
      $input['image'] = $fileName;
    }
    Article::create($input);
    return Redirect::action([ArticleController::class, 'getList']);
  }

  public function getEdit($id)
  {
    $article = Article::all();
    $data = Article::findOrfail($id);
    return view('admin.article.edit')
      ->with('data', $data)
      ->with('articles', $article);
  }
  public function postEdit($id, ArticleRequest $request)
  {
    $input = $request->except('_token');
    $article = Article::findOrfail($id);
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
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['image'] = $article->image;
    }
    $article->update($input);
    return Redirect::action([ArticleController::class, 'getList']);
  }
  public function getDelete($id)
  {
    Article::find($id)->delete();
    return Redirect::action([ArticleController::class, 'getList']);
  }
}
