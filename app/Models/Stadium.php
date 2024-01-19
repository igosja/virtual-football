<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Stadium
 * @package App\Models
 *
 * @property int id
 * @property int capacity
 * @property int city_id
 * @property float created_at
 * @property string name
 * @property float updated_at
 *
 * @property-read City city
 */
class Stadium extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'capacity',
        'city_id',
        'name',
    ];

    /**
     * @var string $table
     */
    protected $table = 'stadiums';

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
