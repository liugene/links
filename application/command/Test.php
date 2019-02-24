<?php

namespace app\command;

use linkphp\console\Command;
use linkphp\console\Output;

class Test extends Command
{

    protected $output;

    public function configure()
    {
        $this->setAlias('test')->setDescription('test');
    }
    public function execute(Output $output)
    {
        $this->output = $output;
        $output->writeln('usage: php test test start | stop | status !');

    }

}