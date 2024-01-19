<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Player
 * @package App\Models
 *
 * @property int id
 * @property int age
 * @property int country_id
 * @property float created_at
 * @property int fatigue
 * @property int name_id
 * @property int power
 * @property int surname_id
 * @property int team_id
 * @property float updated_at
 */
class Player extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'age',
        'country_id',
        'created_at',
        'fatigue',
        'name_id',
        'power',
        'surname_id',
        'team_id',
    ];
}
