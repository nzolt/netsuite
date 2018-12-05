<?php

namespace Nzolt\NetSuite;

class PaycheckPayPtoList
{

    /**
     * @var PaycheckPayPto[] $paycheckPayPto
     */
    protected $paycheckPayPto = null;

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
     * @return PaycheckPayPto[]
     */
    public function getPaycheckPayPto()
    {
      return $this->paycheckPayPto;
    }

    /**
     * @param PaycheckPayPto[] $paycheckPayPto
     * @return \Nzolt\NetSuite\PaycheckPayPtoList
     */
    public function setPaycheckPayPto(array $paycheckPayPto = null)
    {
      $this->paycheckPayPto = $paycheckPayPto;
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
     * @return \Nzolt\NetSuite\PaycheckPayPtoList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
