<?php
declare(strict_types=1);

namespace App\Models;

use App\Traits\ModelDateFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App\Models
 *
 * @property int id
 * @property int created_at
 * @property int email
 * @property int email_verified_at
 * @property int login
 * @property int password
 * @property int updated_at
 */
class User extends \Illuminate\Foundation\Auth\User
{
    use HasApiTokens, HasFactory, HasRoles, ModelDateFormat, Notifiable;

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
        'login',
        'password',
    ];

    /**
     * @var string[] $hidden
     */
    protected $hidden = [
        'password',
    ];
}
