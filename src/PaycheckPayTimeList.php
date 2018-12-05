<?php

namespace Nzolt\NetSuite;

class PaycheckPayTimeList
{

    /**
     * @var PaycheckPayTime[] $paycheckPayTime
     */
    protected $paycheckPayTime = null;

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
     * @return PaycheckPayTime[]
     */
    public function getPaycheckPayTime()
    {
      return $this->paycheckPayTime;
    }

    /**
     * @param PaycheckPayTime[] $paycheckPayTime
     * @return \Nzolt\NetSuite\PaycheckPayTimeList
     */
    public function setPaycheckPayTime(array $paycheckPayTime = null)
    {
      $this->paycheckPayTime = $paycheckPayTime;
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
     * @return \Nzolt\NetSuite\PaycheckPayTimeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
