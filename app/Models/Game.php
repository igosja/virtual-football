<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Game
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property int guest_team_id
 * @property int home_team_id
 * @property bool is_played
 * @property int schedule_id
 * @property int stadium_id
 * @property float updated_at
 */
class Game extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'guest_team_id',
        'home_team_id',
        'is_played',
        'schedule_id',
        'stadium_id',
    ];
}
