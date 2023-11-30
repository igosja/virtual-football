<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class City
 * @package App\Models
 *
 * @property int id
 * @property int country_id
 * @property int created_at
 * @property string name
 * @property int updated_at
 */
class City extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'country_id',
        'name',
    ];
}
