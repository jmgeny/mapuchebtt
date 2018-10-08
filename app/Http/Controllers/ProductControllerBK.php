<?php

namespace mapuchebtt\Http\Controllers;

use Illuminate\Http\Request;
use mapuchebtt\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(3);
        
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
    	$product = Product::find('$id');

    	return view('products.show', compact('product'));
    }
}