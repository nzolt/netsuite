<?php

namespace Nzolt\NetSuite;

class CustomerPaymentApplyList
{

    /**
     * @var CustomerPaymentApply[] $apply
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
     * @return CustomerPaymentApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param CustomerPaymentApply[] $apply
     * @return \Nzolt\NetSuite\CustomerPaymentApplyList
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
     * @return \Nzolt\NetSuite\CustomerPaymentApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
