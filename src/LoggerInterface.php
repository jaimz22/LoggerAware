<?php


namespace VertigoLabs\LoggerAware;


interface LoggerInterface
{
    public function log(string $message, ?int $level = null, string|array|null $channel=null):LoggerInterface;
}
