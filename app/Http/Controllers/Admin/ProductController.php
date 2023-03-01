<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
  public function getList()
  {
    $product = Product::orderBy('id', 'DESC')->get();
    return view('admin.product.list')
      ->with('product', $product);
  }


  public function getAdd()
  {
    $category = Category::get();
    return view('admin.product.add')
      ->with('category', $category);
  }

  public function postAdd(ProductRequest $request)
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

    Product::create($input);
    return Redirect::action([ProductController::class, 'getList']);
  }

  public function getEdit($id)
  {
    $category = Category::get();
    $data = Product::findOrfail($id);
    return view('admin.product.edit')
      ->with('category', $category)
      ->with('data', $data);
  }
  public function postEdit($id, ProductRequest $request)
  {
    $input = $request->except('_token');
    $product = Product::findOrfail($id);
    $input['status'] = $request->has('status');
    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $product->image);

      $extension = $request->file('image')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['image'] = $product->image;
    }
    $product->update($input);
    return Redirect::action([ProductController::class, 'getList']);
  }
  public function getDelete($id)
  {
    Product::find($id)->delete();
    return Redirect::action([ProductController::class, 'getList']);
  }
}
