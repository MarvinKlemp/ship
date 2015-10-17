<?php

namespace MarvinKlemp\Ship\HttpClient;

use GuzzleHttp\ClientInterface;
use MarvinKlemp\Ship\PackageNameResolver\ResolvedName;

class GuzzleHttpClient implements HttpClient
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function downloadMetadata(ResolvedName $resolvedName)
    {
        try {
            $response = $this->client->request('GET', $resolvedName->metaUrl());
        } catch (\Exception $e) {
            throw new HttpClientException();
        }

        // @TODO this is Packagis API specific
        $response = json_decode($response->getBody()->getContents(), true);

        return new Metadata($resolvedName->name(), $response['package']['versions']);
    }

    /**
     * {@inheritDoc}
     */
    public function downloadPhar(ResolvedName $resolvedName)
    {
        // TODO: Implement downloadPhar() method.
    }
}