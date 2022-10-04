<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleVisit extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function store($article)
    {
        $ip = request()->ip();
        $browser = substr(request()->userAgent(), -180);
        $check = self::where([
            'ip' => $ip,
            'browser' => $browser,
            'date' => date("Y-m-d"),
            'article_id' => $article->id
        ])->first();
        if ($check == null) {
            self::create([
                'ip' => $ip,
                'browser' => $browser,
                'article_id' => $article->id,
                'date' => date("Y-m-d"),
            ]);
            $article->update(['quantity_views' => ($article->quantity_views)+1]);
        }
    }
}
