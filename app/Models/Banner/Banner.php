<?php

namespace App\Models\Banner;

use App\Models\Basic\About;
use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getTitleAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('banners', 'title', $language, $this->id);
    }
    public function getDescriptionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('banners', 'description', $language, $this->id);
    }

    public static function store($data)
    {
        $names = $data['title'];
        $data['title'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi

        $descriptions = $data['description'];
        $data['description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['image'] = PublicMethod::uploadImage($data['image'], 'banner_image');

        if (isset($data['images'])) {
            $images = $data['images'];
            unset($data['images']);
        }
        $banner = self::create($data);
        if (isset($images)) {
            ProjectImage::saveImages($images, $banner->id);
        }
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('banners', 'title', $key, $banner->id, $value);
            PublicMethod::translateCreateOrUpdate('banners', 'description', $key, $banner->id, $descriptions[$key]);
        }
        return $banner;

    }

    public static function edit($data, $id)
    {
        $banner = self::findOrFail($id);
        if (isset($data['icon'])) {
            $data['icon'] = PublicMethod::uploadImage($data['icon'], 'contacts', $banner->icon);
        }

        $description = $data['description'];
        $data['description'] = $description['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $name = $data['title'];
        $data['title'] = $name['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi

        //Save translates
        foreach ($description as $key => $value) {
            PublicMethod::translateCreateOrUpdate('banners', 'description', $key, $banner->id, $value);
        }
        foreach ($name as $key => $value) {
            PublicMethod::translateCreateOrUpdate('banners', 'title', $key, $banner->id, $value);
        }
        $banner->update($data);
        return $banner;
    }

}
