<?php

namespace Nzolt\NetSuite;

class SubsidiaryTaxRegistrationList
{

    /**
     * @var SubsidiaryTaxRegistration[] $subsidiaryTaxRegistration
     */
    protected $subsidiaryTaxRegistration = null;

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
     * @return SubsidiaryTaxRegistration[]
     */
    public function getSubsidiaryTaxRegistration()
    {
      return $this->subsidiaryTaxRegistration;
    }

    /**
     * @param SubsidiaryTaxRegistration[] $subsidiaryTaxRegistration
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistrationList
     */
    public function setSubsidiaryTaxRegistration(array $subsidiaryTaxRegistration = null)
    {
      $this->subsidiaryTaxRegistration = $subsidiaryTaxRegistration;
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
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistrationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
