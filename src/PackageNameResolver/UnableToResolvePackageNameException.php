<?php

namespace MarvinKlemp\Ship\PackageNameResolver;

class UnableToResolvePackageNameException extends \Exception
{
    public function __construct($packageName)
    {
        parent::__construct(sprintf('Unable to resolve package named: %s', $packageName));
    }
}