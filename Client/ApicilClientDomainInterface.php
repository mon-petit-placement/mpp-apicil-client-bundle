<?php

namespace Mpp\ApicilClientBundle\Client;

interface ApicilClientDomainInterface
{
    /**
     * Retrieve the url base path.
     *
     * @method getBasePath
     *
     * @return string
     */
    public function getBasePath(): string;

    /**
     * Retrieve the client domain alias.
     *
     * @method getClientDomainAlias
     *
     * @return string
     */
    public static function getClientDomainAlias(): string;
}
