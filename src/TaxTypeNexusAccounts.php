<?php

namespace Nzolt\NetSuite;

class TaxTypeNexusAccounts
{

    /**
     * @var RecordRef $nexus
     */
    protected $nexus = null;

    /**
     * @var RecordRef $payablesAccount
     */
    protected $payablesAccount = null;

    /**
     * @var RecordRef $receivablesAccount
     */
    protected $receivablesAccount = null;

    
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
     * @return \Nzolt\NetSuite\TaxTypeNexusAccounts
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param RecordRef $payablesAccount
     * @return \Nzolt\NetSuite\TaxTypeNexusAccounts
     */
    public function setPayablesAccount($payablesAccount)
    {
      $this->payablesAccount = $payablesAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param RecordRef $receivablesAccount
     * @return \Nzolt\NetSuite\TaxTypeNexusAccounts
     */
    public function setReceivablesAccount($receivablesAccount)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

}
