<?php

namespace Nzolt\NetSuite;

class StatusDetail
{

    /**
     * @var StatusDetailCodeType $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var StatusDetailType $type
     */
    protected $type = null;

    /**
     * @param StatusDetailCodeType $code
     * @param StatusDetailType $type
     */
    public function __construct($code, $type)
    {
      $this->code = $code;
      $this->type = $type;
    }

    /**
     * @return StatusDetailCodeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param StatusDetailCodeType $code
     * @return \Nzolt\NetSuite\StatusDetail
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
     * @return \Nzolt\NetSuite\StatusDetail
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return StatusDetailType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param StatusDetailType $type
     * @return \Nzolt\NetSuite\StatusDetail
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
