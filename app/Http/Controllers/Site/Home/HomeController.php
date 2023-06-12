<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner\Banner;
use App\Models\Basic\About;
use App\Models\Methods\PublicMethod;
use App\Models\Product\Product;
use App\Models\Basic\Lang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $about = About::firstOrFail();
        $lastProducts = Product::latest('id')->take(6)->get();
        $languages = Lang::all();
        return view('site.index',compact('banners','about','lastProducts','languages'));
    }

    public function searchData(Request $request)
    {
        $response = PublicMethod::searchContent();
        return view('site.search', compact('response'));
    }
}
