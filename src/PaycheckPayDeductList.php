<?php

namespace Nzolt\NetSuite;

class PaycheckPayDeductList
{

    /**
     * @var PaycheckPayDeduct[] $paycheckPayDeduct
     */
    protected $paycheckPayDeduct = null;

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
     * @return PaycheckPayDeduct[]
     */
    public function getPaycheckPayDeduct()
    {
      return $this->paycheckPayDeduct;
    }

    /**
     * @param PaycheckPayDeduct[] $paycheckPayDeduct
     * @return \Nzolt\NetSuite\PaycheckPayDeductList
     */
    public function setPaycheckPayDeduct(array $paycheckPayDeduct = null)
    {
      $this->paycheckPayDeduct = $paycheckPayDeduct;
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
     * @return \Nzolt\NetSuite\PaycheckPayDeductList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
