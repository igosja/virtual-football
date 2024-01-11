<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class BasePhysical
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property int change_count
 * @property float created_at
 * @property int fatigue_bonus
 * @property int level
 * @property int min_base_level
 * @property int price_buy
 * @property int price_sell
 * @property float updated_at
 */
class BasePhysical extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'change_count',
        'created_at',
        'fatigue_bonus',
        'level',
        'min_base_level',
        'price_buy',
        'price_sell',
    ];
}
