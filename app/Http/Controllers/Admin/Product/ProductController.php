<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Banner\Banner;
use App\Models\Basic\Lang;
use App\Models\Characteristic\Characteristic;
use App\Models\Methods\PublicMethod;
use App\Models\Product\Product;
use App\Models\Product\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages/product/index', compact('products'));
    }

    public function create(){
        $languages= Lang::all()->where('status','1');
        $characteristics = Characteristic::all();
        return view('pages/product/create',compact('languages','characteristics'));
    }

    public function store(StoreProductRequest $request){
        $product = Product::store($request->validated());
        return redirect(route('admin.product.index',['product' =>$product->id]));
    }

    public function edit($id){
        $product = Product::find($id);
        $product = $product->toArray();
        $languages = Lang::where('status', '1')->get();

        $product['title'] = PublicMethod::translateAllLang('products', $product['id'], 'title');
        $product['description'] = PublicMethod::translateAllLang('products', $product['id'], 'description');
        $product['function'] = PublicMethod::translateAllLang('products', $product['id'], 'function');
        //dd($product);
        return view('pages/product/edit', compact('product', 'languages'));
    }

    public function update(UpdateProductRequest $request, $id){
        Product::edit($request->validated(),$id);
        return redirect(route('admin.product.index'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect(route('admin.product.index'));
    }

}
