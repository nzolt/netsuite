<?php

namespace Nzolt\NetSuite;

class TaxGroupTaxItemList
{

    /**
     * @var TaxGroupTaxItem[] $taxItem
     */
    protected $taxItem = null;

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
     * @return TaxGroupTaxItem[]
     */
    public function getTaxItem()
    {
      return $this->taxItem;
    }

    /**
     * @param TaxGroupTaxItem[] $taxItem
     * @return \Nzolt\NetSuite\TaxGroupTaxItemList
     */
    public function setTaxItem(array $taxItem = null)
    {
      $this->taxItem = $taxItem;
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
     * @return \Nzolt\NetSuite\TaxGroupTaxItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
