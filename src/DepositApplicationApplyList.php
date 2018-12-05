<?php

namespace Nzolt\NetSuite;

class DepositApplicationApplyList
{

    /**
     * @var DepositApplicationApply[] $apply
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
     * @return DepositApplicationApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param DepositApplicationApply[] $apply
     * @return \Nzolt\NetSuite\DepositApplicationApplyList
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
     * @return \Nzolt\NetSuite\DepositApplicationApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
