<?php

namespace App\Models\Product;

use App\Models\Characteristic\Characteristic;
use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value == null) {
            return null;
        }
        return asset($value);
    }

    // protected $fillable = ['title', 'ProductImage', 'description', 'function', 'old_price' ];

    public static function store($data)
    {
        $data['price'] = $data['old_price'] - $data['old_price'] * $data['discount'] / 100;

        $title = $data['title'];
        $data['title'] = $title['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi

        $description = $data['description'];
        $data['description'] = $description['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi

        $function = $data['function'];
        $data['function'] = $function['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $data['image'] = PublicMethod::uploadImage($data['image'], 'product_image');


        if (isset($data['images'])) {
            $images = $data['images'];
            unset($data['images']);
        }

        if (isset($data['characteristics'])) {
            $characteristics = $data['characteristics'];
            unset($data['characteristics']);
        }

        $product = self::create($data);


        if (isset($images)) {
            ProductImage::saveImages($images, $product->id);
        }

        if (isset($characteristics)) {
            ProductCharacteristic::saveCharacteristics($characteristics, $product->id);
        }

        foreach ($title as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'title', $key, $product->id, $value);
        }
        foreach ($description as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'description', $key, $product->id, $description[$key]);
        }
        foreach ($function as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'function', $key, $product->id, $value);
        }

        //dd($data);
        return $product;
    }

    public static function edit($data, $id)
    {
        $product = self::findOrFail($id);
        if (isset($data['icon'])) {
            $data['icon'] = PublicMethod::uploadImage($data['icon'], 'contacts', $product->icon);
        }
        $description = $data['description'];
        $data['description'] = $description['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $name = $data['title'];
        $data['title'] = $name['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi
        $name = $data['function'];
        $data['function'] = $name['ru']; // Rus tilidagi tarjima asosiy jadvalga saqlanadi

        //Save translates
        foreach ($description as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'description', $key, $product->id, $value);
        }
        foreach ($name as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'title', $key, $product->id, $value);
        }
        foreach ($name as $key => $value) {
            PublicMethod::translateCreateOrUpdate('products', 'function', $key, $product->id, $value);
        }
        $product->update($data);
        return $product;
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function characteristics(){
        return $this->belongsToMany(Characteristic::class)->withPivot('value');
    }
}
