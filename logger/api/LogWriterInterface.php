<?php
declare(strict_types=1);
namespace Logger\LoggerApi;
interface LogWriterInterface
{
    public function write(string $message, LoggerLevels $level): void;
}
