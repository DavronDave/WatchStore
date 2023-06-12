<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacteristic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveCharacteristics($characteristics, $product_id)
    {
        foreach ($characteristics as $key => $characteristic) {
            if(!is_null($characteristic)) {
                self::updateOrCreate([
                    'product_id' => $product_id,
                    'characteristic_id' => $key
                ], [
                    'value' => $characteristic
                ]);
            }
            
        }
    }

}
