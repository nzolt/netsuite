<?php

namespace Nzolt\NetSuite;

class TaxTypeNexusAccountsList
{

    /**
     * @var TaxTypeNexusAccounts[] $taxTypeNexusAccounts
     */
    protected $taxTypeNexusAccounts = null;

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
     * @return TaxTypeNexusAccounts[]
     */
    public function getTaxTypeNexusAccounts()
    {
      return $this->taxTypeNexusAccounts;
    }

    /**
     * @param TaxTypeNexusAccounts[] $taxTypeNexusAccounts
     * @return \Nzolt\NetSuite\TaxTypeNexusAccountsList
     */
    public function setTaxTypeNexusAccounts(array $taxTypeNexusAccounts = null)
    {
      $this->taxTypeNexusAccounts = $taxTypeNexusAccounts;
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
     * @return \Nzolt\NetSuite\TaxTypeNexusAccountsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
