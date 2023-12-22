<?php
declare(strict_types=1);

namespace App\Http\Resources\Team;

use App\Http\Resources\AbstractResource;

/**
 * Class TeamResource
 * @package App\Http\Resources\Team
 */
class TeamResource extends AbstractResource
{
    /**
     * @var array $fields
     */
    protected array $fields = [
        'id',
        'created_at',
        'name',
        'stadium_id',
        'updated_at',
    ];
}
