<?php

namespace Nzolt\NetSuite;

class SalesTaxItemSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $itemId
     */
    protected $itemId = null;

    /**
     * @var SearchColumnSelectField[] $taxType
     */
    protected $taxType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param SearchColumnStringField[] $itemId
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setItemId(array $itemId = null)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRowBasic
     */
    public function setTaxType(array $taxType = null)
    {
      $this->taxType = $taxType;
      return $this;
    }

}
