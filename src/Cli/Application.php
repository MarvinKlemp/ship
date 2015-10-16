<?php

namespace MarvinKlemp\Ship\Cli;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public function __construct()
    {
        parent::__construct('Ship', 'dev');

        $command = new ShipCommand();

        $this->add($command);
        $this->setDefaultCommand($command);
    }
}
