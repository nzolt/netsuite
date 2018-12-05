<?php

namespace Nzolt\NetSuite;

class PaycheckPayExpList
{

    /**
     * @var PaycheckPayExp[] $paycheckPayExp
     */
    protected $paycheckPayExp = null;

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
     * @return PaycheckPayExp[]
     */
    public function getPaycheckPayExp()
    {
      return $this->paycheckPayExp;
    }

    /**
     * @param PaycheckPayExp[] $paycheckPayExp
     * @return \Nzolt\NetSuite\PaycheckPayExpList
     */
    public function setPaycheckPayExp(array $paycheckPayExp = null)
    {
      $this->paycheckPayExp = $paycheckPayExp;
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
     * @return \Nzolt\NetSuite\PaycheckPayExpList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
