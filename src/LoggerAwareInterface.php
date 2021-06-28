<?php
declare(strict_types=1);

namespace VertigoLabs\LoggerAware;


interface LoggerAwareInterface
{
    public function setLogger(callable $logger): void;
}
