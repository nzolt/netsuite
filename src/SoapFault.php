<?php

namespace Nzolt\NetSuite;

class SoapFault
{

    /**
     * @var FaultCodeType $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param FaultCodeType $code
     * @param string $message
     */
    public function __construct($code, $message)
    {
      $this->code = $code;
      $this->message = $message;
    }

    /**
     * @return FaultCodeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param FaultCodeType $code
     * @return \Nzolt\NetSuite\SoapFault
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\SoapFault
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
