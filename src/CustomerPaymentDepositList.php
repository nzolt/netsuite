<?php

namespace Nzolt\NetSuite;

class CustomerPaymentDepositList
{

    /**
     * @var CustomerPaymentDeposit[] $deposit
     */
    protected $deposit = null;

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
     * @return CustomerPaymentDeposit[]
     */
    public function getDeposit()
    {
      return $this->deposit;
    }

    /**
     * @param CustomerPaymentDeposit[] $deposit
     * @return \Nzolt\NetSuite\CustomerPaymentDepositList
     */
    public function setDeposit(array $deposit = null)
    {
      $this->deposit = $deposit;
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
     * @return \Nzolt\NetSuite\CustomerPaymentDepositList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
