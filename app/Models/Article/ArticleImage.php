<?php

namespace App\Models\Article;

use App\Models\Methods\PublicMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
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

    public static function saveImages($images, $article_id)
    {
        foreach ($images as $image) {
            $name = PublicMethod::uploadImage($image, 'article_images');
            self::create([
                'image' => $name,
                'article_id' => $article_id
            ]);
        }
    }

    public static function deleteImages($remove_images)
    {
        foreach ($remove_images as $image_id) {
            $image = self::find($image_id);
            if (!is_null($image)) {
                if ($image->image != null and strpos($image->image, url('/')) !== false) {
                    $image->image = str_replace(url('/').'/','',$image->image);
                }
                if ($image->image != null && file_exists(public_path() . '/' . $image->image)) {
                    unlink(public_path() . '/' . $image->image);
                }
                $image->delete();
            }
        }
    }
}
