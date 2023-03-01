<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productImage;
use App\Models\Product;

class ProductImageController extends Controller
{

  public function getList($pro_id)
  {
    $images = ProductImage::where('product_id', $pro_id)->get();

    return view('admin.productimage.list')
      ->with('image', $images)->with('pro_id', $pro_id);
  }
  public function getAdd($pro_id)
  {
    $products = Product::findOrfail($pro_id);
    return view('admin.productimage.add')
      ->with('product', $products)
      ->with('pro_id', $pro_id);
  }
  public function postAdd(Request $request)
  {
    $input = $request->all();

    $input['thumbnail'] = $request->has('thumbnail');

    if ($request->hasfile('image')) {
      $address = "assets/upload";
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('image')->move($address, $fileName);
      $input['image'] = $fileName;
    }
    $input['product_id'];

    ProductImage::create($input);
    return redirect('admin/image/list/' . $input['product_id']);
  }
  public function getDelete($id)
  {
    ProductImage::find($id)->delete();
    return redirect()->back();
  }
}
