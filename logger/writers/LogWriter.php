<?php
declare(strict_types=1);

namespace Logger\LoggerWriters;
use Logger\LoggerApi\LoggerLevels;
use Logger\LoggerApi\LogWriterInterface;
use PDO;

abstract class LogWriter implements LogWriterInterface
{
    abstract public function write(string $message , LoggerLevels $level): void;

    function __construct(public PDO | string $loggingSource) {}
}



