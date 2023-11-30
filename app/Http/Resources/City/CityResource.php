<?php
declare(strict_types=1);

namespace App\Http\Resources\City;

use App\Http\Resources\AbstractResource;

/**
 * Class CityResource
 * @package App\Http\Resources\City
 */
class CityResource extends AbstractResource
{
    /**
     * @var array $fields
     */
    protected array $fields = [
        'id',
        'country_id',
        'created_at',
        'name',
        'updated_at',
    ];
}
