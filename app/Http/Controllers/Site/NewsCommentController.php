<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\NewsComment;
use Illuminate\Http\Request;


class NewsCommentController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->all();
        NewsComment::create($input);
        return redirect()->back();
    }
}
