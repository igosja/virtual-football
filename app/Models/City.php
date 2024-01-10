<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class City
 * @package App\Models
 *
 * @property int id
 * @property int country_id
 * @property float created_at
 * @property string name
 * @property float updated_at
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
