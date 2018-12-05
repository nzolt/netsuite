<?php

namespace Nzolt\NetSuite;

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnBooleanField[] $orderCreated
     */
    protected $orderCreated = null;

    /**
     * @var SearchColumnDateField[] $orderDate
     */
    protected $orderDate = null;

    /**
     * @var SearchColumnSelectField[] $orderType
     */
    protected $orderType = null;

    /**
     * @var SearchColumnDoubleField[] $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchColumnDoubleField[] $quantityUom
     */
    protected $quantityUom = null;

    /**
     * @var SearchColumnDateField[] $receiptDate
     */
    protected $receiptDate = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $units
     */
    protected $units = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOrderCreated()
    {
      return $this->orderCreated;
    }

    /**
     * @param SearchColumnBooleanField[] $orderCreated
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setOrderCreated(array $orderCreated = null)
    {
      $this->orderCreated = $orderCreated;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getOrderDate()
    {
      return $this->orderDate;
    }

    /**
     * @param SearchColumnDateField[] $orderDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setOrderDate(array $orderDate = null)
    {
      $this->orderDate = $orderDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param SearchColumnSelectField[] $orderType
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setOrderType(array $orderType = null)
    {
      $this->orderType = $orderType;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom()
    {
      return $this->quantityUom;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityUom
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setQuantityUom(array $quantityUom = null)
    {
      $this->quantityUom = $quantityUom;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReceiptDate()
    {
      return $this->receiptDate;
    }

    /**
     * @param SearchColumnDateField[] $receiptDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setReceiptDate(array $receiptDate = null)
    {
      $this->receiptDate = $receiptDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchColumnSelectField[] $units
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setUnits(array $units = null)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
