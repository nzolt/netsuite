<?php

namespace Nzolt\NetSuite;

class InventoryDetailSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchMultiSelectField $binNumber
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param SearchMultiSelectField $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setInventoryNumber($inventoryNumber)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return \Nzolt\NetSuite\InventoryDetailSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
