<?php

declare(strict_types=1);

namespace SmitBackend\LocalLLMBridge;

use SmitBackend\LocalLLMBridge\Contracts\LocalModelDriverInterface;

/**
 * Class InferenceDispatcher
 *
 * @package SmitBackend\LocalLLMBridge
 */
class InferenceDispatcher implements LocalModelDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
