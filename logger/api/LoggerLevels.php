<?php
declare(strict_types=1);
namespace Logger\LoggerApi;
enum LoggerLevels: string
{
    case info = "info";
    case notice = "notice" ;
    case warning = "warning";
    case error = "error";
}
