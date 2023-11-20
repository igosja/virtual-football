<?php
declare(strict_types=1);

namespace App\Models;

use App\Traits\ModelDateFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App\Models
 */
class User extends \Illuminate\Foundation\Auth\User
{
    use HasApiTokens, HasFactory, ModelDateFormat, Notifiable;

    /**
     * @var string[] $casts
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'email',
        'name',
        'password',
    ];

    /**
     * @var string[] $hidden
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
