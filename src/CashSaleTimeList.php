<?php

namespace Nzolt\NetSuite;

class CashSaleTimeList
{

    /**
     * @var CashSaleTime[] $time
     */
    protected $time = null;

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
     * @return CashSaleTime[]
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param CashSaleTime[] $time
     * @return \Nzolt\NetSuite\CashSaleTimeList
     */
    public function setTime(array $time = null)
    {
      $this->time = $time;
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
     * @return \Nzolt\NetSuite\CashSaleTimeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
