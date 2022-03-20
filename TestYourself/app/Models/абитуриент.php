<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class абитуриент extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='абитуриенты';
    protected $primaryKey = 'idАбитуриента';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Имя',
        'Фамилия',
        'Отчество',
        'email',
        'Пароль',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Пароль',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
 * Get the password for the user.
 *
 * @return string
 */
public function getAuthPassword()
{
    return $this->Пароль;
}
}
