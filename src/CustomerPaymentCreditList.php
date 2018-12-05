<?php

namespace Nzolt\NetSuite;

class CustomerPaymentCreditList
{

    /**
     * @var CustomerPaymentCredit[] $credit
     */
    protected $credit = null;

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
     * @return CustomerPaymentCredit[]
     */
    public function getCredit()
    {
      return $this->credit;
    }

    /**
     * @param CustomerPaymentCredit[] $credit
     * @return \Nzolt\NetSuite\CustomerPaymentCreditList
     */
    public function setCredit(array $credit = null)
    {
      $this->credit = $credit;
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
     * @return \Nzolt\NetSuite\CustomerPaymentCreditList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
