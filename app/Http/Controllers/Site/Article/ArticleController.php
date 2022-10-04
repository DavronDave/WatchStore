<?php

namespace App\Http\Controllers\Site\Article;

use App\Http\Controllers\Controller;
use App\Models\Article\Article;
use App\Models\Article\ArticleCategory;
use App\Models\Article\ArticleVisit;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::getSiteData();
        return view('site.news', compact('data'));
    }

    public function categoryArticle(ArticleCategory $category)
    {
        if (!$category->status) {
            return abort(404);
        }
        $data = Article::getSiteCategoryData($category);
        return view('site.news', compact('data'));
    }

    public function show(Article $article)
    {
        if (!$article->status) {
            return abort(404);
        }
        ArticleVisit::store($article);
        $categories = ArticleCategory::where('status', 1)->get();
        return view('site.news-show', compact('article', 'categories'));
    }
}
