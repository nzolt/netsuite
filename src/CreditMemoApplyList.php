<?php

namespace Nzolt\NetSuite;

class CreditMemoApplyList
{

    /**
     * @var CreditMemoApply[] $apply
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
     * @return CreditMemoApply[]
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param CreditMemoApply[] $apply
     * @return \Nzolt\NetSuite\CreditMemoApplyList
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
     * @return \Nzolt\NetSuite\CreditMemoApplyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
