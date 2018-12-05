<?php

namespace Nzolt\NetSuite;

class VendorCreditApplyList
{

    /**
     * @var VendorCreditApply[] $apply
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
     * @return VendorCreditApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param VendorCreditApply[] $apply
     * @return \Nzolt\NetSuite\VendorCreditApplyList
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
     * @return \Nzolt\NetSuite\VendorCreditApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
