<?php

namespace App\Models\Project;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProjectDescription extends Model
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

    public function getDescriptionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('project_descriptions', 'description', $language, $this->id);
    }

    public static function store($data)
    {
        $descriptions = $data['description'];
        $data['description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['image'] = PublicMethod::uploadImage($data['image'], 'project_image');
        $project_description = self::create($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_descriptions', 'description', $key, $project_description->id, $value);
        }
        return $project_description;
    }

    public static function edit($data, $description)
    {
        $descriptions = $data['description'];
        $data['description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        if (isset($data['image'])) {
            $data['image'] = PublicMethod::uploadImage($data['image'], 'project_image', $description->image);
        }
        $description->update($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_descriptions', 'description', $key, $description->id, $value);
        }
        return $description;
    }
}
