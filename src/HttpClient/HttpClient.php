<?php

namespace MarvinKlemp\Ship\HttpClient;

use MarvinKlemp\Ship\PackageNameResolver\ResolvedName;

interface HttpClient
{
    /**
     * @param ResolvedName $resolvedName
     * @return Metadata
     * @throws HttpClientException
     */
    public function downloadMetadata(ResolvedName $resolvedName);

    public function downloadPhar(ResolvedName $resolvedName);
}
