<?php

namespace Nzolt\NetSuite;

class PaycheckPayContribList
{

    /**
     * @var PaycheckPayContrib[] $paycheckPayContrib
     */
    protected $paycheckPayContrib = null;

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
     * @return PaycheckPayContrib[]
     */
    public function getPaycheckPayContrib()
    {
      return $this->paycheckPayContrib;
    }

    /**
     * @param PaycheckPayContrib[] $paycheckPayContrib
     * @return \Nzolt\NetSuite\PaycheckPayContribList
     */
    public function setPaycheckPayContrib(array $paycheckPayContrib = null)
    {
      $this->paycheckPayContrib = $paycheckPayContrib;
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
     * @return \Nzolt\NetSuite\PaycheckPayContribList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
