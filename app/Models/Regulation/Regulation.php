<?php

namespace App\Models\Regulation;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Regulation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(RegulationCategory::class,'regulation_category_id');
    }

    public function getDocumentAttribute($value)
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
        return PublicMethod::translate('regulations', 'title', $language, $this->id);
    }

    public static function getSiteData()
    {
        return RegulationCategory::with('regulations')->whereHas('regulations')->get();
    }

    public static function store($data)
    {
        $names = $data['title'];
        $data['title'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['document'] = PublicMethod::uploadImage($data['document'], 'documents');
        $data['quantity_downloads'] = 0;
        $regulation = self::create($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('regulations', 'title', $key, $regulation->id, $value);
        }
    }

    public static function edit($data, $regulation)
    {
        if (isset($data['document'])) {
            $data['document'] = PublicMethod::uploadImage($data['document'], 'documents', $regulation->document);
        }
        $names = $data['title'];
        $data['title'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $regulation->update($data);
        //Save translates
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('regulations', 'title', $key, $regulation->id, $value);
        }
        return $regulation;
    }
}
