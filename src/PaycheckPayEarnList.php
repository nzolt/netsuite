<?php

namespace Nzolt\NetSuite;

class PaycheckPayEarnList
{

    /**
     * @var PaycheckPayEarn[] $paycheckPayEarn
     */
    protected $paycheckPayEarn = null;

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
     * @return PaycheckPayEarn[]
     */
    public function getPaycheckPayEarn()
    {
      return $this->paycheckPayEarn;
    }

    /**
     * @param PaycheckPayEarn[] $paycheckPayEarn
     * @return \Nzolt\NetSuite\PaycheckPayEarnList
     */
    public function setPaycheckPayEarn(array $paycheckPayEarn = null)
    {
      $this->paycheckPayEarn = $paycheckPayEarn;
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
     * @return \Nzolt\NetSuite\PaycheckPayEarnList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
