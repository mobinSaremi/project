<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use App\Http\Requests\Admin\PersonalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class PersonalController extends Controller
{
  public function getList()
  {
    $personal = Personal::orderBy('id', 'DESC')->get();
    return view('admin.personal.list')
      ->with('personal', $personal);
  }

  public function getAdd()
  {
    return view('admin.personal.add');
  }
  public function postAdd(PersonalRequest $request)
  {
    $input = $request->except('_token');

    $input['status'] = $request->has('status');
    if ($request->hasfile('avatar')) {
      $address = "assets/upload";
      $extension = $request->file('avatar')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('avatar')->move($address, $fileName);
      $input['avatar'] = $fileName;
    }
    Personal::create($input);
    return Redirect::action([PersonalController::class, 'getlist']);
  }

  public function getEdit($id)
  {
    $personal = Personal::all();
    $data = Personal::findOrfail($id);
    return view('admin.personal.edit')
      ->with('data', $data)
      ->with('personals', $personal);
  }

  public function postEdit($id, PersonalRequest $request)
  {
    $input = $request->all();
    $personal = Personal::findOrfail($id);
    $input['status'] = $request->has('status');
    if ($request->hasFile('avatar')) {
      $path = 'assets/upload';
      File::delete($path . $personal->avatar);

      $extension = $request->file('avatar')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('avatar')->move($path, $fileName);
        $input['avatar'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['avatar'] = $personal->avatar;
    }
    $personal->update($input);
    return Redirect::action([PersonalController::class, 'getList']);
  }

  public function getDelete($id)
  {
    Personal::find($id)->delete();
    return Redirect::action([PersonalController::class, 'getList']);
  }
}
