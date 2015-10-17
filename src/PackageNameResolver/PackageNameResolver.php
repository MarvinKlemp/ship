<?php

namespace MarvinKlemp\Ship\PackageNameResolver;

interface PackageNameResolver
{
    /**
     * @param string $packageName
     * @return ResolvedName
     * @throws PackageNameResolver
     */
    public function resolveName($packageName);
}