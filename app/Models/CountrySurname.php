<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class CountrySurname
 * @package App\Models
 *
 * @property int country_id
 * @property int created_at
 * @property int popularity
 * @property int surname_id
 * @property int updated_at
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

    /**
     * @var string $table
     */
    protected $table = 'country_surname';
}
