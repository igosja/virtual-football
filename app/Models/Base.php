<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Base
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property float created_at
 * @property int level
 * @property int maintenance_base
 * @property int maintenance_slot
 * @property int price_buy
 * @property int price_sell
 * @property int slot_max
 * @property int slot_min
 * @property float updated_at
 */
class Base extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'level',
        'maintenance_base',
        'maintenance_slot',
        'price_buy',
        'price_sell',
        'slot_max',
        'slot_min',
    ];
}
