<?php

namespace App\Models\Characteristic;

use App\Models\Methods\PublicMethod;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    const TYPES = [
        'number' => 'Номер',
        'text' => 'Стринг',
        'text[]' => 'Текст'
    ];

    protected $guarded = [];

    public static function store($data)
    {
        $names = $data['name'];
        $data['name'] = $names['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $characteristic = self::create($data);
        foreach ($names as $key => $value){
            PublicMethod::translateCreateOrUpdate('characteristics', 'name', $key, $characteristic->id, $value);
        }
        return $characteristic;
    }

    public function product(){
        return $this->belongsToMany(Product::class)->withPivot('value');

    }
}
