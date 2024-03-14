<?php

namespace App\Services\Logging;

use App\Models\Log;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;

/**
 * Class DatabaseHandler
 * @package App\Sevices\Logging
 */
class DatabaseHandler extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        $context = $record->context;
        $trace = [];
        if (array_key_exists('exception', $context) && $context['exception'] instanceof \Throwable) {
            $exception = $context['exception'];
            $trace[] = [
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ];
            $trace = array_merge($trace, $exception->getTrace());
        }

        $log = new Log();
        $log->channel = $record->channel;
        $log->context = $record->context;
        $log->datetime = $record->datetime->format('Y-m-d H:i:s');
        $log->extra = $record->extra;
        $log->formatted = $record->formatted;
        $log->level = $record->level->getName();
        $log->message = $record->message;
        $log->trace = $trace;
        $log->save();
    }
}
