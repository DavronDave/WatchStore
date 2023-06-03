<?php

namespace App\Http\Controllers\Site\About;

use App\Http\Controllers\Controller;
use App\Models\Basic\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::all();
        return view('site.about',compact('data'));
    }
}
