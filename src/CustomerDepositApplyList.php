<?php

namespace Nzolt\NetSuite;

class CustomerDepositApplyList
{

    /**
     * @var CustomerDepositApply[] $customerDepositApply
     */
    protected $customerDepositApply = null;

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
     * @return CustomerDepositApply[]
     */
    public function getCustomerDepositApply()
    {
      return $this->customerDepositApply;
    }

    /**
     * @param CustomerDepositApply[] $customerDepositApply
     * @return \Nzolt\NetSuite\CustomerDepositApplyList
     */
    public function setCustomerDepositApply(array $customerDepositApply = null)
    {
      $this->customerDepositApply = $customerDepositApply;
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
     * @return \Nzolt\NetSuite\CustomerDepositApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
