<?php
declare(strict_types=1);
namespace Logger\Api;
interface LogWriterInterface
{
    public function write(string $message, LoggerLevels $level): void;
}
