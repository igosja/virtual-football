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
 * @property float created_at
 * @property string email
 * @property int email_verified_at
 * @property string login
 * @property string password
 * @property float updated_at
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
