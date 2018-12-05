<?php

namespace Nzolt\NetSuite;

class DepositPaymentList
{

    /**
     * @var DepositPayment[] $depositPayment
     */
    protected $depositPayment = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return DepositPayment[]
     */
    public function getDepositPayment()
    {
      return $this->depositPayment;
    }

    /**
     * @param DepositPayment[] $depositPayment
     * @return \Nzolt\NetSuite\DepositPaymentList
     */
    public function setDepositPayment(array $depositPayment = null)
    {
      $this->depositPayment = $depositPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\DepositPaymentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
