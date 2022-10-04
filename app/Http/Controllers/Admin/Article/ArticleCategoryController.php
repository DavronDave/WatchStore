<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleCategory\StoreCategoryRequest;
use App\Http\Requests\ArticleCategory\UpdateCategoryRequest;
use App\Models\Article\ArticleCategory;
use App\Models\Basic\Lang;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $languages = Lang::all()->where('status','1');
        $categories = ArticleCategory::all();
        return view('pages.article-categories.index', compact('categories', 'languages'));
    }

    public function store(StoreCategoryRequest $request)
    {
        ArticleCategory::store($request->validated());
        return redirect(route('admin.article-category.index'));
    }

    public function edit($category_id)
    {
        $languages = Lang::all()->where('status','1');
        return ArticleCategory::getCategoryData($category_id);
    }

    public function update(UpdateCategoryRequest $request)
    {
        $category = ArticleCategory::edit($request->validated(), $request->get('category_id'));
        return redirect(route('admin.article-category.index'));
    }
}
