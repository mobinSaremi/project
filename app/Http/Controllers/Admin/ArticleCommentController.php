<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleComment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
  public function getList()
  {
    $comments = ArticleComment::orderBy('id', 'DESC')->get();
    return view('admin.article-comment.list')
      ->with('comments', $comments);
  }

  public function getUpdate(Request $request)
  {
    $input = $request->all();

    $comment = ArticleComment::findOrfail($input['id']);
    if ($comment->status == 0) {
      $comment->update([
        'status' => 1
      ]);
    } else {
      $comment->update(['status' => 0]);
    }
    return redirect()->back();
  }
  public function getDelete($id)
  {
    ArticleComment::find($id)->delete();
    return Redirect::action([ArticleCommentController::class, 'getList']);
  }
}
