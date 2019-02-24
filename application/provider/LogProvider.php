<?php

namespace app\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use linkphp\log\Log;

class LogProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        app()->make(Log::class)->setLogPath(ROOT_PATH . 'application/runtime/log/');
        return $definition;
        // TODO: Implement update() method.
    }
}
