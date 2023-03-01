<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsComment;
use Illuminate\Support\Facades\Redirect;

class NewsCommentController extends Controller
{
    public function getList()
  {
    $newcomment = NewsComment::orderBy('id', 'DESC')->get();
    return view('admin.news-comment.list')
      ->with('newscomment', $newcomment);
  }

  public function getUpdate(Request $request)
  {
    $input = $request->all();

    $newcooment = NewsComment::findOrfail($input['id']);
    if ($newcooment->status == 0) {
      $newcooment->update([
        'status' => 1
      ]);
    } else {
      $newcooment->update(['status' => 0]);
    }
    return redirect()->back();
  }
  public function getDelete($id)
  {
    NewsComment::find($id)->delete();
    return Redirect::action([NewsCommentController::class, 'getList']);
  }
}
