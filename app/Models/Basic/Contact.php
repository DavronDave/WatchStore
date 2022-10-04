<?php

namespace App\Models\Basic;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    const TYPES = [
        'social' => 'Социальная сеть',
        'tel' => 'Телефонный номер',
        'mailto' => 'Эл. адрес',
        'address' => 'Адрес'
    ];

    public function getIconAttribute($value)
    {
        if ($value==null)
        {
            return null;
        }
        return asset($value);
    }

    public static function store($data)
    {
        $data['icon'] = PublicMethod::uploadImage($data['icon'], 'contacts');
        return self::create($data);
    }

    public static function getData($contact_id)
    {
        return self::findOrFail($contact_id)->toArray();
    }

    public static function edit($data, $contact_id)
    {
        $contact = self::findOrFail($contact_id);
        if (isset($data['icon'])) {
            $data['icon'] = PublicMethod::uploadImage($data['icon'], 'contacts', $contact->icon);
        }
        $contact->update($data);
        return $contact;
    }
}
