<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Timeline
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property int game_id
 * @property int minute
 * @property int type
 * @property float updated_at
 */
class Timeline extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'game_id',
        'minute',
        'type',
    ];
}
