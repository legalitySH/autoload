<?php
declare(strict_types=1);

namespace Logger\LoggerWriters;

use Exception;

class FileLogWriter extends LogWriter {

    function __construct(string $source)
    {
        parent::__construct($source);
    }
    public function write(string $message, $level): void
    {
        $currentTime = date('Y-m-d H:i:s');
        $logMessage = "[$level][$currentTime] -  $message\n";

        try {
            file_put_contents($this->loggingSource, $logMessage, FILE_APPEND | LOCK_EX);
        } catch (Exception $e) {
            echo "Error writing to log file: " . $e->getMessage();
        }
    }
}
