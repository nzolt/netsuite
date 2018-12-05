<?php

namespace Nzolt\NetSuite;

class PaycheckPayDisburseList
{

    /**
     * @var PaycheckPayDisburse[] $paycheckPayDisburse
     */
    protected $paycheckPayDisburse = null;

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
     * @return PaycheckPayDisburse[]
     */
    public function getPaycheckPayDisburse()
    {
      return $this->paycheckPayDisburse;
    }

    /**
     * @param PaycheckPayDisburse[] $paycheckPayDisburse
     * @return \Nzolt\NetSuite\PaycheckPayDisburseList
     */
    public function setPaycheckPayDisburse(array $paycheckPayDisburse = null)
    {
      $this->paycheckPayDisburse = $paycheckPayDisburse;
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
     * @return \Nzolt\NetSuite\PaycheckPayDisburseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
