<?php
declare(strict_types=1);

namespace App\Models;

use danielme85\LaravelLogToDB\Models\LogToDbCreateObject;

/**
 * Class Log
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property string channel
 * @property string context
 * @property string datetime
 * @property string extra
 * @property string message
 * @property int level
 * @property string level_name
 * @property int unix_time
 * @property float updated_at
 */
class Log extends AbstractModel
{
    use LogToDbCreateObject;

    /**
     * @var string $table
     */
    protected $table = 'log';
}
