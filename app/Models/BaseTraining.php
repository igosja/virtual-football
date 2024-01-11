<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class BaseTraining
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property float created_at
 * @property int level
 * @property int min_base_level
 * @property int position_count
 * @property int position_price
 * @property int power_count
 * @property int power_price
 * @property int price_buy
 * @property int price_sell
 * @property int special_count
 * @property int special_price
 * @property int training_speed_max
 * @property int training_speed_min
 * @property float updated_at
 */
class BaseTraining extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'level',
        'min_base_level',
        'position_count',
        'position_price',
        'power_count',
        'power_price',
        'price_buy',
        'price_sell',
        'special_count',
        'special_price',
        'training_speed_max',
        'training_speed_min',
    ];
}
