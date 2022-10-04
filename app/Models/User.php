<?php

namespace App\Models;

use App\Models\Methods\PublicMethod;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN_ROLE = 'admin';

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function edit($data)
    {
        $user = self::find(auth()->id());
        if (!is_null($data['old_password']) and !is_null($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        if (isset($data['avatar'])) {
            $data['avatar'] = PublicMethod::uploadImage($data['avatar'], 'user', $user->avatar);
        } /*else {
            unset($data['avatar']);
        }*/
        unset($data['old_password']);
        $user->update($data);
        return $user;
    }
}
