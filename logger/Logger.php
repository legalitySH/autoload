<?php
declare(strict_types = 0);

namespace Logger;

use Logger\LoggerApi\LoggerInterface;
use Logger\LoggerApi\LoggerLevels;
use Logger\LoggerWriters\FileLogWriter;
use Logger\LoggerWriters\LogWriter;
use PDO;

class Logger implements LoggerInterface
{
    function __construct(PDO|string $loggingSource, private ?LogWriter $logWriter = null)
    {
        if ($loggingSource instanceof PDO) {
            // TODO : fill logWriter as database writer
        } else $this->logWriter = new FileLogWriter($loggingSource);
    }

    public function info(string $message): void
    {
        $this->logWriter->write($message,LoggerLevels::info);
    }

    public function error(string $message): void
    {
        $this->logWriter->write($message,LoggerLevels::error);
    }

    public function warning(string $message): void
    {
        $this->logWriter->write($message,LoggerLevels::warning);
    }

    public function notice(string $message): void
    {
        $this->logWriter->write($message,LoggerLevels::notice);
    }
}
