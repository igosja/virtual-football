<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class CountrySurname
 * @package App\Models
 *
 * @property int country_id
 * @property float created_at
 * @property int popularity
 * @property int surname_id
 * @property float updated_at
 */
class CountrySurname extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'country_id',
        'popularity',
        'surname_id',
    ];
}
