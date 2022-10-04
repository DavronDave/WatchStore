<?php

namespace App\Models\Project;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProjectInfographic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTitleAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('project_infographics', 'title', $language, $this->id);
    }

    public static function store($data)
    {
        $descriptions = $data['title'];
        $data['title'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $project_infographic = self::create($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_infographics', 'title', $key, $project_infographic->id, $value);
        }
        return $project_infographic;
    }

    public static function edit($data, $infographic)
    {
        $descriptions = $data['title'];
        $data['title'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $infographic->update($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_infographics', 'title', $key, $infographic->id, $value);
        }
        return $infographic;
    }
}
