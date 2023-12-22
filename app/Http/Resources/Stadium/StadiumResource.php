<?php
declare(strict_types=1);

namespace App\Http\Resources\Stadium;

use App\Http\Resources\AbstractResource;

/**
 * Class StadiumResource
 * @package App\Http\Resources\City
 */
class StadiumResource extends AbstractResource
{
    /**
     * @var array $fields
     */
    protected array $fields = [
        'id',
        'capacity',
        'city_id',
        'created_at',
        'name',
        'updated_at',
    ];
}
