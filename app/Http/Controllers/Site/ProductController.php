<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;


class ProductController extends Controller
{
    public function Productlist()
    {
        $produc = Product::orderby('id', 'DESC')->where('status', 1)->get();
        return view('site.product.list')
            ->with('products', $produc);
    }

    public function Productdetail($id)
    {
        $product = Product::where('id', $id)->first();
        $images = ProductImage::where('product_id', $id)->get();

        return view('site.product.detail')
            ->with('product', $product)
            ->with('image', $images);
    }
}
