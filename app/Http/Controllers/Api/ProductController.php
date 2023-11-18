<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\productsResource;
use App\Models\Product;

class ProductController extends Controller{

    function getProducts(){
        $products=Product::all();
        $data=productsResource::collection($products);
        return $data;
    }
}
