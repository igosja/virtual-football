<?php

declare(strict_types=1);

namespace App\Models;

use danielme85\LaravelLogToDB\Models\LogToDbCreateObject;

/**
 * Class Log
 * @package App\Models
 */
class Log extends AbstractModel
{
    use LogToDbCreateObject;

    /**
     * @var string $table
     */
    protected $table = 'log';
}
