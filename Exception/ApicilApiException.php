<?php

namespace Mpp\ApicilClientBundle\Exception;

use Mpp\ApicilClientBundle\Model\ApicilApiError;

class ApicilApiException extends \Exception
{
    public function __construct(ApicilApiError $apicilApiError)
    {
        parent::__construct(
            (string) $apicilApiError,
            $apicilApiError->getErrorCode()
        );
    }
}
