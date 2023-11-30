<?php
declare(strict_types=1);

namespace App\Http\Resources\Country;

use App\Http\Resources\AbstractResource;

/**
 * Class CountryResource
 * @package App\Http\Resources\Country
 */
class CountryResource extends AbstractResource
{
    /**
     * @var array $fields
     */
    protected array $fields = [
        'id',
        'created_at',
        'name',
        'updated_at',
    ];
}
