<?php

namespace Nzolt\NetSuite;

class ExceededUsageLimitFault extends SoapFault
{

    /**
     * @param FaultCodeType $code
     * @param string $message
     */
    public function __construct($code, $message)
    {
      parent::__construct($code, $message);
    }

}
