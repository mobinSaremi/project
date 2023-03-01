<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\Admin\SliderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
  public function getList()
  {

    $slider = Slider::orderBy('id', 'DESC')->get();
    return view('admin.slider.list')
      ->with('slider', $slider);
  }

  public function getAdd()
  {
    return view('admin.slider.add');
  }
  public function postAdd(SliderRequest $request)
  {
    $input = $request->except('_token');
    $input['status'] = $request->has('status');
    if ($request->hasfile('image')) {
      $address = "assets/upload";
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('image')->move($address, $fileName);
      $input['image'] = $fileName;
    }

    $slider = Slider::create($input);
    return Redirect::action([SliderController::class, 'getList']);
  }

  public function getEdit($id)
  {

    $data = Slider::findOrfail($id);
    return view('admin.slider.edit')
      ->with('data', $data);
  }
  public function postEdit($id, SliderRequest $request)
  {
    $input = $request->except('_token');
    $slider = Slider::find($id);
    $input['status'] = $request->has('status');
    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $slider->image);

      $extension = $request->file('image')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['image'] = $slider->image;
    }


    if (array_key_exists('status', $input) && $input['status'] == "on") {
      $input['status'] = 1;
    } else {
      $input['status'] = 0;
    }


    $slider->update($input);
    return Redirect::action([SliderController::class, 'getList']);
  }
  public function getDelete($id)
  {
    Slider::find($id)->delete();
    return Redirect::action([SliderController::class, 'getList']);
  }
}
