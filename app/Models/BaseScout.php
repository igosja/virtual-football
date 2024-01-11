<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class BaseScout
 * @package App\Models
 *
 * @property int id
 * @property int build_speed
 * @property float created_at
 * @property int distance
 * @property bool is_market_fatigue
 * @property bool is_market_game_row
 * @property bool is_market_physical
 * @property bool is_opponent_fatigue
 * @property bool is_opponent_game_row
 * @property bool is_opponent_physical
 * @property int level
 * @property int min_base_level
 * @property int my_style_count
 * @property int my_style_price
 * @property int price_buy
 * @property int price_sell
 * @property int scout_speed_max
 * @property int scout_speed_min
 * @property float updated_at
 */
class BaseScout extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'build_speed',
        'distance',
        'is_market_fatigue',
        'is_market_game_row',
        'is_market_physical',
        'is_opponent_fatigue',
        'is_opponent_game_row',
        'is_opponent_physical',
        'level',
        'min_base_level',
        'my_style_count',
        'my_style_price',
        'price_buy',
        'price_sell',
        'scout_speed_max',
        'scout_speed_min',
    ];
}
