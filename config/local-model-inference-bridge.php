<?php

return [
    'enabled' => env('LOCAL_MODEL_INFERENCE_BRIDGE_ENABLED', true),
    'timeout' => env('LOCAL_MODEL_INFERENCE_BRIDGE_TIMEOUT', 30),
    'log_channel' => env('LOCAL_MODEL_INFERENCE_BRIDGE_LOG', 'stack'),
];
