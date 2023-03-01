<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
  public function getList()
  {

    $category = Category::orderBy('id', 'DESC')->get();
    return view('admin.category.list')
      ->with('category', $category);
  }
  public function getAdd()
  {
    $parents = Category::all();
    return view('admin.category.add')
      ->with('parents', $parents);
  }
  public function postAddCategory(CategoryRequest $request)
  {
    $input = $request->all();

    if ($request->parent_id == 0) {
      $input['parent_id']  = null;
    } else {
      $input['parent_id'] = $request->parent_id;
    }
    $input['status'] = $request->has('status');

    category::create($input);
    return Redirect::action([CategoryController::class, 'getList']);
  }
  public function getEdit($id)
  {
    $parents = Category::all();
    $data = Category::findOrfail($id);
    return view('admin.category.edit')
      ->with('data', $data)
      ->with('parents', $parents);
  }
  public function postEdit($id, CategoryRequest $request)
  {
    $input = $request->except('_token');
    $category = Category::findOrfail($id);
    $input['status'] = $request->has('status');
    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $category->image);
      $extension = $request->file('image')->getClientOriginalExtension();
      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['image'] = $category->image;
    }
    if ($request->hasFile('icon')) {
      $path = 'assets/upload';
      File::delete($path . $category->image);
      $extension = $request->file('icon')->getClientOriginalExtension();
      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('icon')->move($path, $fileName);
        $input['icon'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['icon'] = $category->icon;
    }
    if (array_key_exists('status', $input) && $input['status'] == "on") {
      $input['status'] = 1;
    } else {
      $input['status'] = 0;
    }
    $category->update($input);
    return Redirect::action([CategoryController::class, 'getList']);
  }

  public function getDelete($id)
  {
    Category::find($id)->delete();
    return Redirect::action([CategoryController::class, 'getList']);
  }
}
