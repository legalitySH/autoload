<?php
declare(strict_types=1);

namespace Logger\Writers;

use Exception;
use Logger\Api\LoggerLevels;

class FileLogWriter extends LogWriter {

    function __construct(string $source)
    {
        parent::__construct($source);
    }
    public function write(string $message, LoggerLevels $level): void
    {
        $currentTime = date('Y-m-d H:i:s');
        $logMessage = "[$level->value][$currentTime] -  $message\n";

        try {
            file_put_contents($this->loggingSource, $logMessage, FILE_APPEND | LOCK_EX);
        } catch (Exception $e) {
            echo "Error writing to log file: " . $e->getMessage();
        }
    }
}
