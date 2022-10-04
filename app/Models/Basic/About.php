<?php

namespace App\Models\Basic;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getDescriptionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('abouts', 'description', $language, $this->id);
    }

    public function getNameAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('abouts', 'name', $language, $this->id);
    }

    public function getImageAttribute($value)
    {
        if ($value == null) {
            return null;
        }
        return asset($value);
    }

    public function getLogoAttribute($value)
    {
        if ($value == null) {
            return null;
        }
        return asset($value);
    }

    public static function getSiteData()
    {
        $item = About::all()->first();
        if (is_null($item)) {
            $item = [
                "id" => 1,
                "name" => null,
                "logo" => null,
                "description" => null,
                "image" => null,
                "point_x" => null,
                "point_y" => null,
                "created_at" => null,
                "updated_at" => null
            ];
        } else {
            $item = $item->toArray();
        }
        return $item;
    }

    public static function getData()
    {
        $item = About::all()->first();
        if (is_null($item)) {
            $item = [
                "id" => 1,
                "name" => null,
                "logo" => null,
                "description" => null,
                "image" => null,
                "point_x" => null,
                "point_y" => null,
                "created_at" => null,
                "updated_at" => null
            ];
        } else {
            $item = $item->toArray();
        }
        $item['name'] = PublicMethod::translateAllLang('abouts', $item['id'], 'name');
        $item['description'] = PublicMethod::translateAllLang('abouts', $item['id'], 'description');
        return $item;
    }

    public static function edit($data)
    {
        $item = self::first();
        $description = $data['description'];
        $data['description'] = $description['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $name = $data['name'];
        $data['name'] = $name['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        //Save images
        if (is_null($item)) {
            if (isset($data['logo'])) {
                $data['logo'] = PublicMethod::uploadImage($data['logo'], 'about');
            }
            if (isset($data['image'])) {
                $data['image'] = PublicMethod::uploadImage($data['image'], 'about');
            }
            $item = self::create($data);

        } else {
            if (isset($data['logo'])) {
                $data['logo'] = PublicMethod::uploadImage($data['logo'], 'about', $item->logo);
            }
            if (isset($data['image'])) {
                $data['image'] = PublicMethod::uploadImage($data['image'], 'about', $item->image);
            }
            $item->update($data);
        }

        //Save translates
        foreach ($description as $key => $value) {
            PublicMethod::translateCreateOrUpdate('abouts', 'description', $key, $item->id, $value);
        }
        foreach ($name as $key => $value) {
            PublicMethod::translateCreateOrUpdate('abouts', 'name', $key, $item->id, $value);
        }
    }
}
