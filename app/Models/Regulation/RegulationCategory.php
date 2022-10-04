<?php

namespace App\Models\Regulation;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class RegulationCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function regulations()
    {
        return $this->hasMany(Regulation::class, 'regulation_category_id');
    }

    public function getNameAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('regulation_categories', 'name', $language, $this->id);
    }

    public static function store($data)
    {
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $category = self::create($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('regulation_categories', 'name', $key, $category->id, $value);
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
            PublicMethod::translateCreateOrUpdate('regulation_categories', 'name', $key, $category->id, $value);
        }
        return $category;
    }

    public static function getCategoryData($category_id)
    {
        $category = self::findOrFail($category_id)->toArray();
        $category['name'] = PublicMethod::translateAllLang('regulation_categories', $category['id'], 'name');
        return $category;
    }
}
