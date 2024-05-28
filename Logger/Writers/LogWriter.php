<?php
declare(strict_types=1);

namespace Logger\Writers;
use Logger\Api\LoggerLevels;
use Logger\Api\LogWriterInterface;
use PDO;

abstract class LogWriter implements LogWriterInterface
{
    abstract public function write(string $message , LoggerLevels $level): void;

    function __construct(public PDO | string $loggingSource) {}
}



