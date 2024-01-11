<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Lineups
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property int game_id
 * @property int player_id
 * @property int team_id
 * @property float updated_at
 */
class Lineups extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'game_id',
        'player_id',
        'team_id',
    ];
}
