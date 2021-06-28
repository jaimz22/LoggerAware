<?php
declare(strict_types=1);

namespace VertigoLabs\LoggerAware;

trait LoggerAware
{
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * @param string $message
     * @param int|null $level
     * @param string|array|null $channel
     * @return LoggerAwareInterface
     */
    protected function log(string $message, ?int $level = null, string|array|null $channel = null): LoggerAwareInterface
    {
        $this->logger->log($message, $level, $channel);
        return $this;
    }
}
