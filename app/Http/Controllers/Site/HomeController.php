<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use App\Models\Slider;
use App\Models\Suggestion;


class HomeController extends Controller
{
    public function index(){

        $slider = Slider::orderby('id' , 'DESC')->where('status',1)->first();
        $personal = Personal::orderby('id' , 'DESC')->take(3)->get(); 
        $suggestion = Suggestion::orderby('id', 'DESC')->take(3)->where('status' ,1)->get();

        return view('site.index')
            ->with('sliders',$slider )
            ->with('personals' ,$personal)
            ->with('suggestions' ,$suggestion);
    }


}
