<?php

namespace Nzolt\NetSuite;

class VendorPaymentApplyList
{

    /**
     * @var VendorPaymentApply[] $apply
     */
    protected $apply = null;

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
     * @return VendorPaymentApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param VendorPaymentApply[] $apply
     * @return \Nzolt\NetSuite\VendorPaymentApplyList
     */
    public function setApply(array $apply = null)
    {
      $this->apply = $apply;
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
     * @return \Nzolt\NetSuite\VendorPaymentApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
