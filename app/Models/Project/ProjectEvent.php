<?php

namespace App\Models\Project;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProjectEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

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
        return PublicMethod::translate('project_events', 'title', $language, $this->id);
    }

    public static function store($data)
    {
        $descriptions = $data['title'];
        $data['title'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['document'] = PublicMethod::uploadImage($data['document'], 'project_event_document');
        $data['start_date'] = date('Y-m-d', strtotime($data['start_date']));
        $data['end_date'] = date('Y-m-d', strtotime($data['end_date']));
        $event = self::create($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_events', 'title', $key, $event->id, $value);
        }
    }

    public static function edit($data, $event)
    {
        $descriptions = $data['title'];
        $data['title'] = $descriptions['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        if (isset($data['document'])) {
            $data['document'] = PublicMethod::uploadImage($data['document'], 'project_event_document', $event->document);
        }
        $data['start_date'] = date('Y-m-d', strtotime($data['start_date']));
        $data['end_date'] = date('Y-m-d', strtotime($data['end_date']));
        $event->update($data);
        foreach ($descriptions as $key => $value){
            PublicMethod::translateCreateOrUpdate('project_events', 'title', $key, $event->id, $value);
        }
    }
}
