<?php

namespace MarvinKlemp\Ship\Cli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShipCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('install')
            ->setDefinition(
                array(
                    new InputArgument('phar', InputArgument::OPTIONAL, 'The name of the phar'),
                )
            )
            ->setDescription('Install a php phar')
            ->setHelp('');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     *
     * @throws \RuntimeException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return 0;
    }
}
