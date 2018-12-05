<?php

namespace Nzolt\NetSuite;

class DepositCashBackList
{

    /**
     * @var DepositCashBack[] $depositCashBack
     */
    protected $depositCashBack = null;

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
     * @return DepositCashBack[]
     */
    public function getDepositCashBack()
    {
      return $this->depositCashBack;
    }

    /**
     * @param DepositCashBack[] $depositCashBack
     * @return \Nzolt\NetSuite\DepositCashBackList
     */
    public function setDepositCashBack(array $depositCashBack = null)
    {
      $this->depositCashBack = $depositCashBack;
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
     * @return \Nzolt\NetSuite\DepositCashBackList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
