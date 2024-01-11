<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Team
 * @package App\Models
 *
 * @property int id
 * @property int base_id
 * @property int base_medical_id
 * @property int base_physical_id
 * @property int base_school_id
 * @property int base_scout_id
 * @property int base_training_id
 * @property float created_at
 * @property string name
 * @property int stadium_id
 * @property float updated_at
 */
class Team extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'base_id',
        'base_medical_id',
        'base_physical_id',
        'base_school_id',
        'base_scout_id',
        'base_training_id',
        'name',
        'stadium_id',
    ];
}
