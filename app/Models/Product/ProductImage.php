<?php

namespace App\Models\Product;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public static function saveImages($images, $product_id)
    {
        foreach ($images as $image) {
            $name = PublicMethod::uploadImage($image, 'product_images');
            self::create([
                'image' => $name,
                'product_id' => $product_id
            ]);
        }
    }

}
