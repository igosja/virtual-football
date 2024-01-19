<?php
declare(strict_types=1);

namespace App\Jobs;

use App\Models\Log;
use App\Services\Log\LogProcessor;

/**
 * Class ProcessLog
 * @package App\Jobs
 */
class ProcessLog extends AbstractProcess
{
    /**
     * @var Log $log
     */
    public Log $log;

    /**
     * @param Log $log
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    /**
     * @param LogProcessor $processor
     * @return bool
     */
    public function handle(LogProcessor $processor): bool
    {
        return true;
    }
}
