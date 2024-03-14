<?php

namespace App\Services\Logging;

use Monolog\Logger;

/**
 * Class DatabaseLogger
 * @package App\Sevices\Logging
 */
class DatabaseLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @return Logger
     */
    public function __invoke()
    {
        return new Logger('Database', [
            new DatabaseHandler(),
        ]);
    }
}
