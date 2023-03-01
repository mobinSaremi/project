<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ArticleComment;
use Illuminate\Http\Request;


class ArticleCommentController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->all();
        ArticleComment::create($input);
        return redirect()->back();
    }
}
