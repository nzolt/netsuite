<?php

namespace Nzolt\NetSuite;

class VendorPaymentCreditList
{

    /**
     * @var VendorPaymentCredit[] $credit
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
     * @return VendorPaymentCredit[]
     */
    public function getCredit()
    {
      return $this->credit;
    }

    /**
     * @param VendorPaymentCredit[] $credit
     * @return \Nzolt\NetSuite\VendorPaymentCreditList
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
     * @return \Nzolt\NetSuite\VendorPaymentCreditList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
