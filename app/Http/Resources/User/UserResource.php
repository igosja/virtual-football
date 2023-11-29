<?php
declare(strict_types=1);

namespace App\Http\Resources\User;

use App\Http\Resources\AbstractResource;

/**
 * Class UserResource
 * @package App\Http\Resources\Lunch
 */
class UserResource extends AbstractResource
{
    /**
     * @var array $fields
     */
    protected array $fields = [
        'id',
        'created_at',
        'email',
        'email_verified_at',
        'login',
        'password',
        'updated_at',
    ];
}
