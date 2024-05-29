<?php
declare(strict_types=1);

require __DIR__ . '/Logger/autoload.php';

$logger = new Logger\Logger('./log.txt');

$logger->info("Hello World");

$logger->error("Error");

