<?php

declare(strict_types=1);

namespace SmitBackend\LocalLLMBridge\Contracts;

/**
 * Interface LocalModelDriverInterface
 *
 * @package SmitBackend\LocalLLMBridge
 */
interface LocalModelDriverInterface
{
    public function execute(array $payload = []): mixed;
}
