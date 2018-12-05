<?php

namespace Nzolt\NetSuite;

class ItemSupplyPlanSearchBasic extends SearchRecordBasic
{

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
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchBooleanField $orderCreated
     */
    protected $orderCreated = null;

    /**
     * @var SearchDateField $orderDate
     */
    protected $orderDate = null;

    /**
     * @var SearchMultiSelectField $orderType
     */
    protected $orderType = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchDateField $receiptDate
     */
    protected $receiptDate = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $units
     */
    protected $units = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOrderCreated()
    {
      return $this->orderCreated;
    }

    /**
     * @param SearchBooleanField $orderCreated
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setOrderCreated($orderCreated)
    {
      $this->orderCreated = $orderCreated;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getOrderDate()
    {
      return $this->orderDate;
    }

    /**
     * @param SearchDateField $orderDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setOrderDate($orderDate)
    {
      $this->orderDate = $orderDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param SearchMultiSelectField $orderType
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReceiptDate()
    {
      return $this->receiptDate;
    }

    /**
     * @param SearchDateField $receiptDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setReceiptDate($receiptDate)
    {
      $this->receiptDate = $receiptDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchMultiSelectField $units
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
