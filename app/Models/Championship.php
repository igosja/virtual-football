<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Championship
 * @package App\Models
 *
 * @property int id
 * @property int country_id
 * @property float created_at
 * @property int difference
 * @property int division
 * @property int drawn
 * @property int game
 * @property int loss
 * @property int miss
 * @property int place
 * @property int point
 * @property int season
 * @property int score
 * @property int team_id
 * @property float updated_at
 * @property int win
 */
class Championship extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'country_id',
        'difference',
        'division',
        'drawn',
        'game',
        'loss',
        'miss',
        'place',
        'point',
        'season',
        'score',
        'team_id',
        'win',
    ];
}
