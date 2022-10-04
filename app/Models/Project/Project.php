<?php

namespace App\Models\Project;

use App\Models\Article\ArticleImage;
use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function descriptions()
    {
        return $this->hasMany(ProjectDescription::class)->orderBy('sort');
    }

    public function infographics()
    {
        return $this->hasMany(ProjectInfographic::class);
    }

    public function events()
    {
        return $this->hasMany(ProjectEvent::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }


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

    public function getNameAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('projects', 'name', $language, $this->id);
    }

    public function getRegionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('projects', 'region', $language, $this->id);
    }

    public function getShortDescriptionAttribute($value)
    {
        $language = App::getLocale();
        return PublicMethod::translate('projects', 'short_description', $language, $this->id);
    }

    public static function store($data)
    {
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $regions = $data['region'];
        $data['region'] = $regions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $descriptions = $data['short_description'];
        $data['short_description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['image'] = PublicMethod::uploadImage($data['image'], 'project_image');
        $data['cover_image'] = PublicMethod::uploadImage($data['cover_image'], 'project_cover');
        if (isset($data['images'])) {
            $images = $data['images'];
            unset($data['images']);
        }
        $project = self::create($data);
        if (isset($images)) {
            ProjectImage::saveImages($images, $project->id);
        }
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('projects', 'name', $key, $project->id, $value);
            PublicMethod::translateCreateOrUpdate('projects', 'short_description', $key, $project->id, $descriptions[$key]);
            PublicMethod::translateCreateOrUpdate('projects', 'region', $key, $project->id, $regions[$key]);
        }
        return $project;
    }

    public static function edit($data, $project)
    {
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $regions = $data['region'];
        $data['region'] = $regions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $descriptions = $data['short_description'];
        $data['short_description'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        if (isset($data['image'])) {
            $data['image'] = PublicMethod::uploadImage($data['image'], 'project_image', $project->image);
        }
        if (isset($data['cover_image'])) {
            $data['cover_image'] = PublicMethod::uploadImage($data['cover_image'], 'project_cover', $project->cover_image);
        }
        if (isset($data['images'])) {
            ProjectImage::saveImages($data['images'], $project->id);
            unset($data['images']);
        }
        if (isset($data['remove_images'])) {
            ProjectImage::deleteImages($data['remove_images']);
            unset($data['remove_images']);
        }
        $project->update($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('projects', 'name', $key, $project->id, $value);
            PublicMethod::translateCreateOrUpdate('projects', 'short_description', $key, $project->id, $descriptions[$key]);
            PublicMethod::translateCreateOrUpdate('projects', 'region', $key, $project->id, $regions[$key]);
        }
        return $project;
    }
}
