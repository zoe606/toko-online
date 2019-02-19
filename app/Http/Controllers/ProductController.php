<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function showAll() 
    {
        // $dataProductDariModel = Product::all();
        $dataProductDariModel = null;
        return view('product.display', ['products' => $dataProductDariModel]);
    }

    public function create(Reuqest $request)
    {
        $product_name = $request->get('product_name');
        $product_stock = $request->get('stock');
        $product_desc = $request->get('description');
        $product_price = $request->get('price');
    }

    public function saveNew(Request $request)
    {
        
    }

    public function show($id)
    {
        return $id;
    }

    public function search(Request $request)
    {
        $keyword = $request->get('product_name');
    }
}
