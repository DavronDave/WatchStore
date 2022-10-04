<?php

namespace App\Models\Basic;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
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

    public static function store($data)
    {
        if ($data['default']){
            self::changeDefaultLang();
        }
        $data['image'] = PublicMethod::uploadImage($data['image'], 'languages');
        return self::create($data);
    }

    public static function edit($data, $language)
    {
        if (isset($data['default'])) {
            if ($data['default'] and !$language->default) {
                self::changeDefaultLang();
            }
        }
        if (isset($data['image'])) {
            $data['image'] = PublicMethod::uploadImage($data['image'], 'languages', $language->image);
        }
        return $language->update($data);
    }

    /**
     * Funksiya Langs jadvalidagi default ustunidagi true qiymatni false qilish uchun ishlatiladi
     * Default til faqat bitta bo'lishi kerak shuning uchun tillarni update qilganda ushbu funksiya ishlatiladi
     */
    public static function changeDefaultLang()
    {
        $languages = self::where('default', true)->get();
        foreach ($languages as $lang) {
            $lang->update(['default' => false]);
        }
    }
}
