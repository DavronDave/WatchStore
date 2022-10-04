<?php

namespace App\Models\Article;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value==null)
        {
            return null;
        }
        return asset($value);
    }

    public function getCoverImageAttribute($value)
    {
        if ($value==null)
        {
            return null;
        }
        return asset($value);
    }

    public function getTitleAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('articles', 'title', $language, $this->id);
    }

    public function getDescriptionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('articles', 'description', $language, $this->id);
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class,'article_category_id');
    }

    public function images()
    {
        return $this->hasMany(ArticleImage::class, 'article_id');
    }

    public static function getSiteData()
    {
        $categories = ArticleCategory::where('status', 1)->get();
//        $last_article = self::where('status', 1)->orderByDesc('published_date')->first();
//        $articles = self::where(['article_category_id' => $last_article->id, 'status' => 1])->orderByDesc('published_date')->paginate(3);
        $articles = self::where(['status' => 1])->orderByDesc('published_date')->paginate(3);
        return ['articles' => $articles, 'categories' => $categories, 'category' => null];
    }

    public static function getSiteCategoryData($category)
    {
        $categories = ArticleCategory::where('status', 1)->get();
        $articles = self::where(['article_category_id' => $category->id, 'status' => 1])->orderByDesc('published_date')->paginate(3);
        return ['articles' => $articles, 'categories' => $categories, 'category' => $category->id];
    }

    public static function store($data)
    {
        $names = $data['title'];
        $data['title'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $descriptions = $data['description'];
        $data['description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['image'] = PublicMethod::uploadImage($data['image'], 'article_image');
        $data['cover_image'] = PublicMethod::uploadImage($data['cover_image'], 'article_cover_image');
        $data['quantity_views'] = 0;
        if (isset($data['images'])) {
            $images = $data['images'];
            unset($data['images']);
        }
        $article = self::create($data);
        if (isset($images)) {
            ArticleImage::saveImages($images, $article->id);
        }
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('articles', 'title', $key, $article->id, $value);
            PublicMethod::translateCreateOrUpdate('articles', 'description', $key, $article->id, $descriptions[$key]);
        }

    }

    public static function edit($data, $article)
    {
        if (isset($data['image'])) {
            $data['image'] = PublicMethod::uploadImage($data['image'], 'article_image', $article->image);
        }
        if (isset($data['cover_image'])) {
            $data['cover_image'] = PublicMethod::uploadImage($data['cover_image'], 'article_cover_image', $article->cover_image);
        }
        $names = $data['title'];
        $data['title'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $descriptions = $data['description'];
        $data['description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        if (isset($data['images'])) {
            ArticleImage::saveImages($data['images'], $article->id);
            unset($data['images']);
        }
        if (isset($data['remove_images'])) {
            ArticleImage::deleteImages($data['remove_images']);
            unset($data['remove_images']);
        }
        $article->update($data);
        //Save translates
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('articles', 'title', $key, $article->id, $value);
            PublicMethod::translateCreateOrUpdate('articles', 'description', $key, $article->id, $descriptions[$key]);
        }
        return $article;
    }
}
