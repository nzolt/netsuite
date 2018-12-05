<?php

namespace Nzolt\NetSuite;

class DepositOtherList
{

    /**
     * @var DepositOther[] $depositOther
     */
    protected $depositOther = null;

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
     * @return DepositOther[]
     */
    public function getDepositOther()
    {
      return $this->depositOther;
    }

    /**
     * @param DepositOther[] $depositOther
     * @return \Nzolt\NetSuite\DepositOtherList
     */
    public function setDepositOther(array $depositOther = null)
    {
      $this->depositOther = $depositOther;
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
     * @return \Nzolt\NetSuite\DepositOtherList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
