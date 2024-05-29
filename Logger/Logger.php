<?php
declare(strict_types = 1);

namespace Logger;

use Logger\Api\LoggerInterface;
use Logger\Api\LoggerLevels;
use Logger\Writers\FileLogWriter;
use Logger\Writers\LogWriter;
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