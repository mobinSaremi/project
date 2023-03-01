<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Personal;


class PersonalController extends Controller
{
    public function Personallist()
    {
        $personal = Personal::orderBy('id', 'DESC')->where('status', 1)->take(6)->get();

        return view('site.personal.list')
            ->with('personals', $personal);
    }
}
