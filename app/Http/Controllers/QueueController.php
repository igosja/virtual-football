<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobs\ProcessLog;
use App\Models\Log;

/**
 * Class QueueController
 * @package App\Http\Controllers
 */
class QueueController extends AbstractController
{
    public function index()
    {
        $log = Log::findOrFail(1);
        ProcessLog::dispatch($log);
    }
}
