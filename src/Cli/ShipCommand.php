<?php

namespace MarvinKlemp\Ship\Cli;

use GuzzleHttp\Client;
use MarvinKlemp\Ship\HttpClient\GuzzleHttpClient;
use MarvinKlemp\Ship\PackageNameResolver\InMemoryResolver;
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
                    new InputArgument('package', InputArgument::OPTIONAL, 'The name of the package'),
                )
            )
            ->setDescription('Install a php phar')
            ->setHelp('');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = new InMemoryResolver();
        $resolvedName = $resolver->resolveName($input->getArgument('package'));

        $httpClient = new GuzzleHttpClient(new Client());
        $metadata = $httpClient->downloadMetadata($resolvedName);

        return 0;
    }
}
