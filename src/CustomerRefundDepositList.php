<?php

namespace Nzolt\NetSuite;

class CustomerRefundDepositList
{

    /**
     * @var CustomerRefundDeposit[] $customerRefundDeposit
     */
    protected $customerRefundDeposit = null;

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
     * @return CustomerRefundDeposit[]
     */
    public function getCustomerRefundDeposit()
    {
      return $this->customerRefundDeposit;
    }

    /**
     * @param CustomerRefundDeposit[] $customerRefundDeposit
     * @return \Nzolt\NetSuite\CustomerRefundDepositList
     */
    public function setCustomerRefundDeposit(array $customerRefundDeposit = null)
    {
      $this->customerRefundDeposit = $customerRefundDeposit;
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
     * @return \Nzolt\NetSuite\CustomerRefundDepositList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
