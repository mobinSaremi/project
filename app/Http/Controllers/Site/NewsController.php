<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;


class NewsController extends Controller
{
    public function NewsList()
    {
        $news = News::orderby('id', 'DESC')->where('status', 1)->take(6)->get();

        return view('site.news.list')
            ->with('new', $news);
    }
    public function NewsDetail($id)
    {
        $new = News::where('id', $id)->first();
        $comments = NewsComment::where('status', 1)->take(4)->get();

        return view('site.news.detail')
            ->with('news', $new)
            ->with('comment', $comments);
    }
}
