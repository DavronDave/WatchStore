<?php

namespace App\Http\Controllers\Admin\Regulation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Regulation\StoreRegulationRequest;
use App\Http\Requests\Regulation\UpdateRegulationRequest;
use App\Models\Basic\Lang;
use App\Models\Methods\PublicMethod;
use App\Models\Regulation\Regulation;
use App\Models\Regulation\RegulationCategory;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        $regulations = Regulation::with('category')->get();
        return view('pages/regulation/index', compact('regulations'));
    }

    public function edit(Regulation $regulation)
    {
        $languages = Lang::where('status','1')->get();
        $categories = RegulationCategory::where('status', 1)->get();
        $regulation = $regulation->toArray();
        $regulation['title'] = PublicMethod::translateAllLang('regulations', $regulation['id'], 'title');
        return view('pages/regulation/edit', compact('regulation', 'categories', 'languages'));
    }

    public function create()
    {
        $languages = Lang::where('status','1')->get();
        $categories = RegulationCategory::where('status', 1)->get();
        return view('pages/regulation/create', compact('languages', 'categories'));
    }

    public function store(StoreRegulationRequest $request)
    {
        Regulation::store($request->validated());
        return redirect()->route('admin.regulation.index');

    }

    public function update(UpdateRegulationRequest $request, Regulation $regulation)
    {
        Regulation::edit($request->validated(), $regulation);
        return redirect()->route('admin.regulation.index');
    }
}
