<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\StoreBannerRequest;
use App\Http\Requests\Banner\UpdateBannerRequest;
use App\Models\Banner\Banner;
use App\Models\Basic\Contact;
use App\Models\Basic\Lang;
use App\Models\Methods\PublicMethod;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('pages/banner/index',compact('banners'));
    }

    public function create(){
        $languages= Lang::all()->where('status','1');
        return view('pages/banner/create',compact('languages'));
    }

    public function store(StoreBannerRequest  $request){
        Banner::store($request->validated());
        return redirect()->route('admin.banner.index');
    }
    public function edit($id){
        $banner = Banner::find($id);
        $banner = $banner->toArray();
        $languages = Lang::where('status', '1')->get();

        $banner['title'] = PublicMethod::translateAllLang('banners', $banner['id'], 'title');
        $banner['description'] = PublicMethod::translateAllLang('banners', $banner['id'], 'description');
        return view('pages/banner/edit', compact('banner', 'languages'));
    }
    public function update(UpdateBannerRequest $request, $id){
        Banner::edit($request->validated(),$id);
       return redirect(route('admin.banner.index'));
    }

    public function destroy($id){
        $banner = Banner::find($id);
        $banner->delete();

        return redirect(route('admin.banner.index'));
    }

}
