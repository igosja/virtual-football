<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Schedule
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property int season
 * @property int stage
 * @property int time
 * @property int tournament_type
 * @property float updated_at
 */
class Schedule extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'season',
        'stage',
        'time',
        'tournament_type',
    ];
}
