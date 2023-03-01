<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
  public function getEdit()
  {
    $data = Setting::first();
    return view('admin.setting.edit')
      ->with('data', $data);
  }
  public function postEdit(Request  $request)
  {
    $input = $request->all();

    $setting = Setting::first();

    if ($request->hasFile('logo')) {
      $path = 'assets/upload';
      File::delete($path . $setting->logo);

      $extension = $request->file('logo')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('logo')->move($path, $fileName);
        $input['logo'] = $fileName;
      } else {
        return Redirect::back();
      }
    } else {
      $input['image'] = $setting->logo;
    }
    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $setting->image);
      $extension = $request->file('image')->getClientOriginalExtension();
      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back();
      }
    } else {
      $input['image'] = $setting->image;
    }
    $setting->update($input);
    return Redirect::action([SettingController::class, 'getEdit']);
  }
}
