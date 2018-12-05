<?php

namespace Nzolt\NetSuite;

class CustomerRefundApplyList
{

    /**
     * @var CustomerRefundApply[] $apply
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
     * @return CustomerRefundApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param CustomerRefundApply[] $apply
     * @return \Nzolt\NetSuite\CustomerRefundApplyList
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
     * @return \Nzolt\NetSuite\CustomerRefundApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
