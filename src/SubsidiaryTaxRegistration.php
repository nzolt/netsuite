<?php

namespace Nzolt\NetSuite;

class SubsidiaryTaxRegistration
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var Country $nexusCountry
     */
    protected $nexusCountry = null;

    /**
     * @var RecordRef $nexus
     */
    protected $nexus = null;

    /**
     * @var RecordRef $taxAgency
     */
    protected $taxAgency = null;

    /**
     * @var string $taxRegistrationNumber
     */
    protected $taxRegistrationNumber = null;

    /**
     * @var RecordRef $taxEngine
     */
    protected $taxEngine = null;

    /**
     * @var \DateTime $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var \DateTime $validUntil
     */
    protected $validUntil = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return Country
     */
    public function getNexusCountry()
    {
      return $this->nexusCountry;
    }

    /**
     * @param Country $nexusCountry
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setNexusCountry($nexusCountry)
    {
      $this->nexusCountry = $nexusCountry;
      return $this;
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
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgency()
    {
      return $this->taxAgency;
    }

    /**
     * @param RecordRef $taxAgency
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setTaxAgency($taxAgency)
    {
      $this->taxAgency = $taxAgency;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
      return $this->taxRegistrationNumber;
    }

    /**
     * @param string $taxRegistrationNumber
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setTaxRegistrationNumber($taxRegistrationNumber)
    {
      $this->taxRegistrationNumber = $taxRegistrationNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxEngine()
    {
      return $this->taxEngine;
    }

    /**
     * @param RecordRef $taxEngine
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setTaxEngine($taxEngine)
    {
      $this->taxEngine = $taxEngine;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
      if ($this->effectiveFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveFrom
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setEffectiveFrom(\DateTime $effectiveFrom = null)
    {
      if ($effectiveFrom == null) {
       $this->effectiveFrom = null;
      } else {
        $this->effectiveFrom = $effectiveFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
      if ($this->validUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validUntil
     * @return \Nzolt\NetSuite\SubsidiaryTaxRegistration
     */
    public function setValidUntil(\DateTime $validUntil = null)
    {
      if ($validUntil == null) {
       $this->validUntil = null;
      } else {
        $this->validUntil = $validUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

}
