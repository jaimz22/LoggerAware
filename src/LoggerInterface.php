<?php


namespace VertigoLabs\LoggerAware;


interface LoggerInterface
{
    public function writeLog(string $message, ?int $level = null, string|array|null $channel=null):LoggerInterface;
}
