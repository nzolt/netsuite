<?php

namespace Nzolt\NetSuite;

class PaycheckPayDisburse
{

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $bankName
     */
    protected $bankName = null;

    /**
     * @var string $bankAccountDecrypt
     */
    protected $bankAccountDecrypt = null;

    /**
     * @var string $statusName
     */
    protected $statusName = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param string $method
     * @return \Nzolt\NetSuite\PaycheckPayDisburse
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return \Nzolt\NetSuite\PaycheckPayDisburse
     */
    public function setBankName($bankName)
    {
      $this->bankName = $bankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountDecrypt()
    {
      return $this->bankAccountDecrypt;
    }

    /**
     * @param string $bankAccountDecrypt
     * @return \Nzolt\NetSuite\PaycheckPayDisburse
     */
    public function setBankAccountDecrypt($bankAccountDecrypt)
    {
      $this->bankAccountDecrypt = $bankAccountDecrypt;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusName()
    {
      return $this->statusName;
    }

    /**
     * @param string $statusName
     * @return \Nzolt\NetSuite\PaycheckPayDisburse
     */
    public function setStatusName($statusName)
    {
      $this->statusName = $statusName;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\PaycheckPayDisburse
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
