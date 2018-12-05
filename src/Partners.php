<?php

namespace Nzolt\NetSuite;

class Partners
{

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var RecordRef $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var boolean $isPrimary
     */
    protected $isPrimary = null;

    /**
     * @var float $contribution
     */
    protected $contribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param RecordRef $partner
     * @return \Nzolt\NetSuite\Partners
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param RecordRef $partnerRole
     * @return \Nzolt\NetSuite\Partners
     */
    public function setPartnerRole($partnerRole)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimary()
    {
      return $this->isPrimary;
    }

    /**
     * @param boolean $isPrimary
     * @return \Nzolt\NetSuite\Partners
     */
    public function setIsPrimary($isPrimary)
    {
      $this->isPrimary = $isPrimary;
      return $this;
    }

    /**
     * @return float
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param float $contribution
     * @return \Nzolt\NetSuite\Partners
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
      return $this;
    }

}
