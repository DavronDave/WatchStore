<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\Basic\About;
use App\Models\Basic\Lang;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $item = About::getData();
        $languages= Lang::all()->where('status','1');
        return view('pages/about/index', compact('item', 'languages'));
    }

    public function edit()
    {
        $item = About::getData();
        $languages= Lang::all()->where('status','1');
        return view('pages/about/edit', compact('item', 'languages'));
    }

    public function update(UpdateAboutRequest $request)
    {
        //dd($request->validated());
        About::edit($request->validated());
        return redirect()->route('admin.about.index');
    }
}

