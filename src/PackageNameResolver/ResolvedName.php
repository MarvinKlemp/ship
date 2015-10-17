<?php

namespace MarvinKlemp\Ship\PackageNameResolver;

class ResolvedName
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $metaUrl;

    /**
     * @var string
     */
    private $pharUrl;

    /**
     * @param string $name
     * @param string $metaUrl
     * @param string $pharUrl
     */
    public function __construct($name, $metaUrl, $pharUrl)
    {
        $this->name = $name;
        $this->metaUrl = $metaUrl;
        $this->pharUrl = $pharUrl;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function metaUrl()
    {
        return $this->metaUrl;
    }

    /**
     * @return string
     */
    public function pharUrl()
    {
        return $this->pharUrl;
    }
}