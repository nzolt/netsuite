<?php

namespace Nzolt\NetSuite;

class TaxTypeNexusesTax
{

    /**
     * @var RecordRef $nexus
     */
    protected $nexus = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $saleTaxAcct
     */
    protected $saleTaxAcct = null;

    /**
     * @var RecordRef $purchTaxAcct
     */
    protected $purchTaxAcct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param RecordRef $nexus
     * @return \Nzolt\NetSuite\TaxTypeNexusesTax
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\TaxTypeNexusesTax
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleTaxAcct()
    {
      return $this->saleTaxAcct;
    }

    /**
     * @param RecordRef $saleTaxAcct
     * @return \Nzolt\NetSuite\TaxTypeNexusesTax
     */
    public function setSaleTaxAcct($saleTaxAcct)
    {
      $this->saleTaxAcct = $saleTaxAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchTaxAcct()
    {
      return $this->purchTaxAcct;
    }

    /**
     * @param RecordRef $purchTaxAcct
     * @return \Nzolt\NetSuite\TaxTypeNexusesTax
     */
    public function setPurchTaxAcct($purchTaxAcct)
    {
      $this->purchTaxAcct = $purchTaxAcct;
      return $this;
    }

}
