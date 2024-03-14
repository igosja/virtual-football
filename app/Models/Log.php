<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Log
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property string channel
 * @property array context
 * @property string datetime
 * @property array extra
 * @property string formatted
 * @property string level
 * @property string message
 * @property array trace
 * @property float updated_at
 */
class Log extends AbstractModel
{
    protected $casts = [
        'context' => 'json',
        'extra' => 'json',
        'trace' => 'json',
    ];
}
