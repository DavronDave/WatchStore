<?php

namespace App\Models\Article;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(Article::class, 'article_category_id');
    }

    public function getNameAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('article_categories', 'name', $language, $this->id);
    }

    public static function store($data)
    {
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $category = self::create($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('article_categories', 'name', $key, $category->id, $value);
        }
    }

    public static function edit($data, $category_id)
    {
        $category = self::findOrFail($category_id);
        unset($data['category_id']);
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $category->update($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('article_categories', 'name', $key, $category->id, $value);
        }
        return $category;
    }

    public static function getCategoryData($category_id)
    {
        $category = self::findOrFail($category_id)->toArray();
        $category['name'] = PublicMethod::translateAllLang('article_categories', $category['id'], 'name');
        return $category;
    }
}
