<?php

namespace app;

use framework\Kernel as LinksKernel;

class Kernel extends LinksKernel
{

    public function start($config = null)
    {
        // TODO: Implement start() method.
        $this->app->event('console');
        // TODO: Implement response() method.
        return $this;
    }

    public function complete()
    {
        // TODO: Implement complete() method.
    }

}