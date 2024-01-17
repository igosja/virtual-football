<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Achievement
 * @package App\Models
 *
 * @property int id
 * @property int achievementable_id
 * @property string achievementable_type
 * @property int country_id
 * @property float created_at
 * @property int division
 * @property int place
 * @property int season
 * @property int stage
 * @property int tournament_type
 * @property float updated_at
 */
class Achievement extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'achievementable_id',
        'achievementable_type',
        'country_id',
        'division',
        'place',
        'season',
        'stage',
        'tournament_type',
    ];
}
