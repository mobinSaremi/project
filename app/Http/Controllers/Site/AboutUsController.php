<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\setting;

class AboutUsController extends Controller
{
    public function getabout()
    {
        setting::all();
        return view('site.about_us');
    }
}
