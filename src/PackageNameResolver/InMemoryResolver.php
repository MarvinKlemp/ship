<?php

namespace MarvinKlemp\Ship\PackageNameResolver;

class InMemoryResolver implements PackageNameResolver
{
    private $resolvedPackages;

    public function __construct()
    {
        $this->resolvedPackages = [
            'puli' => new ResolvedName(
                'puli',
                'http://packagist.org/packages/puli/cli.json',
                'https://github.com/puli/cli/releases/download/%s/puli.phar')
        ];
    }

    public function resolveName($packageName)
    {
        if (!isset($this->resolvedPackages[$packageName])) {
            throw new UnableToResolvePackageNameException($packageName);
        }

        return $this->resolvedPackages[$packageName];
    }
}