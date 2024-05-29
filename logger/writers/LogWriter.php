<?php
declare(strict_types=1);

namespace Logger\LoggerWriters;
use Logger\LoggerApi\LoggerConstants;
use Logger\LoggerApi\LogWriterInterface;
use PDO;

abstract class LogWriter implements LogWriterInterface
{
    abstract public function write(string $message , LoggerConstants $level): void;

    function __construct(public PDO | string $loggingSource) {}
}



