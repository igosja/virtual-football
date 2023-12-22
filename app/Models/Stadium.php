<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Stadium
 * @package App\Models
 *
 * @property int id
 * @property int capacity
 * @property int city_id
 * @property int created_at
 * @property string name
 * @property int updated_at
 */
class Stadium extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'capacity',
        'city_id',
        'name',
    ];

    /**
     * @var string $table
     */
    protected $table = 'stadiums';
}
