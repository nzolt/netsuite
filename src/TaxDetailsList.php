<?php

namespace Nzolt\NetSuite;

class TaxDetailsList
{

    /**
     * @var TaxDetails[] $taxDetails
     */
    protected $taxDetails = null;

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
     * @return TaxDetails[]
     */
    public function getTaxDetails()
    {
      return $this->taxDetails;
    }

    /**
     * @param TaxDetails[] $taxDetails
     * @return \Nzolt\NetSuite\TaxDetailsList
     */
    public function setTaxDetails(array $taxDetails = null)
    {
      $this->taxDetails = $taxDetails;
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
     * @return \Nzolt\NetSuite\TaxDetailsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
