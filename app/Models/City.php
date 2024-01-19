<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class City
 * @package App\Models
 *
 * @property int id
 * @property int country_id
 * @property float created_at
 * @property string name
 * @property float updated_at
 *
 * @property-read Country country
 */
class City extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'country_id',
        'name',
    ];

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
