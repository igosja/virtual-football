<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class PlayerPosition
 * @package App\Models
 *
 * @property float created_at
 * @property int player_id
 * @property int position
 * @property float updated_at
 */
class PlayerPosition extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'player_id',
        'position',
    ];
}
