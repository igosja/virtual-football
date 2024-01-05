<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class CountryName
 * @package App\Models
 *
 * @property int country_id
 * @property int created_at
 * @property int name_id
 * @property int updated_at
 */
class CountryName extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'country_id',
        'name_id',
    ];

    /**
     * @var string $table
     */
    protected $table = 'country_name';
}
