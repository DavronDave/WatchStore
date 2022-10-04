<?php

namespace App\Http\Controllers\Admin\Regulation;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegulationCategory\StoreCategoryRequest;
use App\Http\Requests\RegulationCategory\UpdateCategoryRequest;
use App\Models\Basic\Lang;
use App\Models\Regulation\RegulationCategory;
use Illuminate\Http\Request;

class RegulationCategoryController extends Controller
{
    public function index()
    {
        $languages = Lang::all()->where('status','1');
        $categories = RegulationCategory::all();
        return view('pages.regulation-categories.index', compact('categories', 'languages'));
    }

    public function store(StoreCategoryRequest $request)
    {
        RegulationCategory::store($request->validated());
        return redirect(route('admin.regulation-category.index'));
    }

    public function edit($category_id)
    {
        $languages = Lang::all()->where('status','1');
        return RegulationCategory::getCategoryData($category_id);
    }

    public function update(UpdateCategoryRequest $request)
    {
        $category = RegulationCategory::edit($request->validated(), $request->get('category_id'));
        return redirect(route('admin.regulation-category.index'));
    }
}
