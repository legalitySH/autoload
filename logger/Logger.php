<?php
declare(strict_types = 0);

namespace Logger;

use Logger\LoggerApi\LoggerInterface;
use Logger\LoggerWriters\FileLogWriter;
use PDO;
use const Logger\LoggerApi\LOGGER_WARNING_LEVEL;

class Logger implements LoggerInterface
{
    private $logWriter;
    function __construct($loggingSource)
    {
        if ($loggingSource instanceof PDO) {
            // TODO : fill logWriter as database writer
        } else $this->logWriter = new FileLogWriter($loggingSource);
    }

    public function info(string $message): void
    {
        $this->logWriter->write($message,LOGGER_WARNING_LEVEL);
    }

    public function error(string $message): void
    {
        $this->logWriter->write($message,);
    }

    public function warning(string $message): void
    {
        $this->logWriter->write($message,LoggerConstants::warning);
    }

    public function notice(string $message): void
    {
        $this->logWriter->write($message,LoggerConstants::notice);
    }
}
