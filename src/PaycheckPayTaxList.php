<?php

namespace Nzolt\NetSuite;

class PaycheckPayTaxList
{

    /**
     * @var PaycheckPayTax[] $paycheckPayTax
     */
    protected $paycheckPayTax = null;

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
     * @return PaycheckPayTax[]
     */
    public function getPaycheckPayTax()
    {
      return $this->paycheckPayTax;
    }

    /**
     * @param PaycheckPayTax[] $paycheckPayTax
     * @return \Nzolt\NetSuite\PaycheckPayTaxList
     */
    public function setPaycheckPayTax(array $paycheckPayTax = null)
    {
      $this->paycheckPayTax = $paycheckPayTax;
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
     * @return \Nzolt\NetSuite\PaycheckPayTaxList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
