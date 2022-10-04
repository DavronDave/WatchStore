<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function store()
    {
        $ip = request()->ip();
        $browser = substr(request()->userAgent(), -180);
        $check = self::where('ip', $ip)->where('browser', $browser)->where('date', date("Y-m-d"))->first();
        if ($check == null) {
            self::create([
                'ip' => $ip,
                'browser' => $browser,
                'date' => date("Y-m-d"),
            ]);
        }
    }
}
