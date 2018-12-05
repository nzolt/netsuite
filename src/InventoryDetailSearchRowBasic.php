<?php

namespace Nzolt\NetSuite;

class InventoryDetailSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var SearchColumnDoubleField[] $quantity
     */
    protected $quantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $binNumber
     * @return \Nzolt\NetSuite\InventoryDetailSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
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
     * @return \Nzolt\NetSuite\InventoryDetailSearchRowBasic
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
     * @return \Nzolt\NetSuite\InventoryDetailSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnSelectField[] $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryDetailSearchRowBasic
     */
    public function setInventoryNumber(array $inventoryNumber = null)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return \Nzolt\NetSuite\InventoryDetailSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
