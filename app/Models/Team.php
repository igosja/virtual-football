<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Team
 * @package App\Models
 *
 * @property int id
 * @property int base_level
 * @property int base_medical_level
 * @property int base_physical_level
 * @property int base_school_level
 * @property int base_scout_level
 * @property int base_training_level
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
        'base_level',
        'base_medical_level',
        'base_physical_level',
        'base_school_level',
        'base_scout_level',
        'base_training_level',
        'name',
        'stadium_id',
    ];
}
