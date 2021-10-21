<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts(){
        return Product::all();
    }

    public function getProductsByCatagories(Request $request) {
        if($request['subCatId'] != null){
            $products = Product::table('products')->where('subCatId', '=', $request['subCatId'])->get();
        } else{
            $products = Product::table('products')->where('catId', '=', $request['catId'])->get();
        }
        return response($products, 200);
    }

    public function createProduct(Request $request){
        Product::create([
            'price' => $request['price'],
            'size' => $request['size'],
            'productImg' => $request['productImg'],
            'matId' => $request['matId'],
            'catId' => $request['catId'],
            'subCatId' => $request['subCatId'],
        ]);
    }

    public function editProduct(Request $request){
        $product = Product::find($request['prod_id']);
        $product->price = $request['price'];
        $product->size = $request['size'];
        $product->productImg = $request['productImg'];
        $product->matId = $request['matId'];
        $product->catId = $request['catId'];
        $product->subCatId = $request['subCatId'];
        $product->save();
    }
}
