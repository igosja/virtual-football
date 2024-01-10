<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class PlayerSpecial
 * @package App\Models
 *
 * @property float created_at
 * @property int level
 * @property int player_id
 * @property int special
 * @property float updated_at
 */
class PlayerSpecial extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'player_id',
        'position',
    ];
}
