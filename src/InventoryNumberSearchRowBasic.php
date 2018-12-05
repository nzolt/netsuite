<?php

namespace Nzolt\NetSuite;

class InventoryNumberSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDateField[] $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var SearchColumnBooleanField[] $isonhand
     */
    protected $isonhand = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnDoubleField[] $quantityavailable
     */
    protected $quantityavailable = null;

    /**
     * @var SearchColumnDoubleField[] $quantityintransit
     */
    protected $quantityintransit = null;

    /**
     * @var SearchColumnDoubleField[] $quantityonhand
     */
    protected $quantityonhand = null;

    /**
     * @var SearchColumnDoubleField[] $quantityonorder
     */
    protected $quantityonorder = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param SearchColumnDateField[] $expirationDate
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setExpirationDate(array $expirationDate = null)
    {
      $this->expirationDate = $expirationDate;
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnStringField[] $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setInventoryNumber(array $inventoryNumber = null)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsonhand()
    {
      return $this->isonhand;
    }

    /**
     * @param SearchColumnBooleanField[] $isonhand
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setIsonhand(array $isonhand = null)
    {
      $this->isonhand = $isonhand;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityavailable()
    {
      return $this->quantityavailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityavailable
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setQuantityavailable(array $quantityavailable = null)
    {
      $this->quantityavailable = $quantityavailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityintransit()
    {
      return $this->quantityintransit;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityintransit
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setQuantityintransit(array $quantityintransit = null)
    {
      $this->quantityintransit = $quantityintransit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityonhand()
    {
      return $this->quantityonhand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityonhand
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setQuantityonhand(array $quantityonhand = null)
    {
      $this->quantityonhand = $quantityonhand;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityonorder()
    {
      return $this->quantityonorder;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityonorder
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setQuantityonorder(array $quantityonorder = null)
    {
      $this->quantityonorder = $quantityonorder;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\InventoryNumberSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
