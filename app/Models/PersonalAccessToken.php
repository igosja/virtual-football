<?php
declare(strict_types=1);

namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

/**
 * Class PersonalAccessToken
 * @package App\Models
 *
 * @property int id
 * @property string abilities
 * @property float created_at
 * @property float expires_at
 * @property float last_used_at
 * @property string name
 * @property string token
 * @property string tokenable_type
 * @property int tokenable_id
 * @property float updated_at
 */
class PersonalAccessToken extends SanctumPersonalAccessToken
{
    /**
     * @var string $dateFormat
     */
    protected $dateFormat = 'U.u';
}
