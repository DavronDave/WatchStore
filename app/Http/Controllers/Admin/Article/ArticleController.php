<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article\Article;
use App\Models\Article\ArticleCategory;
use App\Models\Article\ArticleImage;
use App\Models\Basic\Lang;
use App\Models\Methods\PublicMethod;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article ::with('category')->get();
        return view('pages/article/index', compact('articles'));
    }

    public function edit(Article $article)
    {
        $languages = Lang::where('status','1')->get();
        $categories = ArticleCategory::where('status', 1)->get();
        $images = ArticleImage::where('article_id', $article->id)->get();
        $article = $article->toArray();
        $article['title'] = PublicMethod::translateAllLang('articles', $article['id'], 'title');
        $article['description'] = PublicMethod::translateAllLang('articles', $article['id'], 'description');
        return view('pages/article/edit', compact('article', 'categories', 'languages', 'images'));
    }

    public function create()
    {
        $languages = Lang::where('status','1')->get();
        $categories = ArticleCategory::where('status', 1)->get();
        return view('pages/article/create', compact('languages', 'categories'));
    }

    public function store(StoreArticleRequest $request)
    {
        Article::store($request->validated());
        return redirect()->route('admin.article.index');

    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        Article::edit($request->validated(), $article);
        return redirect()->route('admin.article.index');
    }
}
