<?php

namespace Nzolt\NetSuite;

class InventoryNumberSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDateField $expirationDate
     */
    protected $expirationDate = null;

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
     * @var SearchStringField $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var SearchBooleanField $isOnHand
     */
    protected $isOnHand = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchDoubleField $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchDoubleField $quantityInTransit
     */
    protected $quantityInTransit = null;

    /**
     * @var SearchDoubleField $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var SearchDoubleField $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDateField
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param SearchDateField $expirationDate
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param SearchStringField $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setInventoryNumber($inventoryNumber)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnHand()
    {
      return $this->isOnHand;
    }

    /**
     * @param SearchBooleanField $isOnHand
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setIsOnHand($isOnHand)
    {
      $this->isOnHand = $isOnHand;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityInTransit()
    {
      return $this->quantityInTransit;
    }

    /**
     * @param SearchDoubleField $quantityInTransit
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setQuantityInTransit($quantityInTransit)
    {
      $this->quantityInTransit = $quantityInTransit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param SearchDoubleField $quantityOnOrder
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\InventoryNumberSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
