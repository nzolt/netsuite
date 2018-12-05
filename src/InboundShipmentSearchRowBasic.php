<?php

namespace Nzolt\NetSuite;

class InboundShipmentSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDateField[] $actualDeliveryDate
     */
    protected $actualDeliveryDate = null;

    /**
     * @var SearchColumnDateField[] $actualShippingDate
     */
    protected $actualShippingDate = null;

    /**
     * @var SearchColumnStringField[] $billOfLading
     */
    protected $billOfLading = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnDateField[] $expectedDeliveryDate
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var SearchColumnDoubleField[] $expectedRate
     */
    protected $expectedRate = null;

    /**
     * @var SearchColumnDateField[] $expectedShippingDate
     */
    protected $expectedShippingDate = null;

    /**
     * @var SearchColumnStringField[] $externalDocumentNumber
     */
    protected $externalDocumentNumber = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $incoterm
     */
    protected $incoterm = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnDoubleField[] $poAmount
     */
    protected $poAmount = null;

    /**
     * @var SearchColumnDoubleField[] $poRate
     */
    protected $poRate = null;

    /**
     * @var SearchColumnSelectField[] $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var SearchColumnDoubleField[] $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var SearchColumnDoubleField[] $quantityExpected
     */
    protected $quantityExpected = null;

    /**
     * @var SearchColumnDoubleField[] $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var SearchColumnDoubleField[] $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var SearchColumnSelectField[] $receivingLocation
     */
    protected $receivingLocation = null;

    /**
     * @var SearchColumnStringField[] $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var SearchColumnStringField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $unit
     */
    protected $unit = null;

    /**
     * @var SearchColumnSelectField[] $vendor
     */
    protected $vendor = null;

    /**
     * @var SearchColumnStringField[] $vesselNumber
     */
    protected $vesselNumber = null;

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
    public function getActualDeliveryDate()
    {
      return $this->actualDeliveryDate;
    }

    /**
     * @param SearchColumnDateField[] $actualDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setActualDeliveryDate(array $actualDeliveryDate = null)
    {
      $this->actualDeliveryDate = $actualDeliveryDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualShippingDate()
    {
      return $this->actualShippingDate;
    }

    /**
     * @param SearchColumnDateField[] $actualShippingDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setActualShippingDate(array $actualShippingDate = null)
    {
      $this->actualShippingDate = $actualShippingDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillOfLading()
    {
      return $this->billOfLading;
    }

    /**
     * @param SearchColumnStringField[] $billOfLading
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setBillOfLading(array $billOfLading = null)
    {
      $this->billOfLading = $billOfLading;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedDeliveryDate()
    {
      return $this->expectedDeliveryDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setExpectedDeliveryDate(array $expectedDeliveryDate = null)
    {
      $this->expectedDeliveryDate = $expectedDeliveryDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpectedRate()
    {
      return $this->expectedRate;
    }

    /**
     * @param SearchColumnDoubleField[] $expectedRate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setExpectedRate(array $expectedRate = null)
    {
      $this->expectedRate = $expectedRate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedShippingDate()
    {
      return $this->expectedShippingDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedShippingDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setExpectedShippingDate(array $expectedShippingDate = null)
    {
      $this->expectedShippingDate = $expectedShippingDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalDocumentNumber()
    {
      return $this->externalDocumentNumber;
    }

    /**
     * @param SearchColumnStringField[] $externalDocumentNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setExternalDocumentNumber(array $externalDocumentNumber = null)
    {
      $this->externalDocumentNumber = $externalDocumentNumber;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchColumnSelectField[] $incoterm
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setIncoterm(array $incoterm = null)
    {
      $this->incoterm = $incoterm;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoAmount()
    {
      return $this->poAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $poAmount
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setPoAmount(array $poAmount = null)
    {
      $this->poAmount = $poAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param SearchColumnDoubleField[] $poRate
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setPoRate(array $poRate = null)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrder
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setPurchaseOrder(array $purchaseOrder = null)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBilled()
    {
      return $this->quantityBilled;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBilled
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setQuantityBilled(array $quantityBilled = null)
    {
      $this->quantityBilled = $quantityBilled;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityExpected()
    {
      return $this->quantityExpected;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityExpected
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setQuantityExpected(array $quantityExpected = null)
    {
      $this->quantityExpected = $quantityExpected;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityReceived()
    {
      return $this->quantityReceived;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityReceived
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setQuantityReceived(array $quantityReceived = null)
    {
      $this->quantityReceived = $quantityReceived;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRemaining
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setQuantityRemaining(array $quantityRemaining = null)
    {
      $this->quantityRemaining = $quantityRemaining;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReceivingLocation()
    {
      return $this->receivingLocation;
    }

    /**
     * @param SearchColumnSelectField[] $receivingLocation
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setReceivingLocation(array $receivingLocation = null)
    {
      $this->receivingLocation = $receivingLocation;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param SearchColumnStringField[] $shipmentNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setShipmentNumber(array $shipmentNumber = null)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnStringField[] $status
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param SearchColumnSelectField[] $unit
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setUnit(array $unit = null)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchColumnSelectField[] $vendor
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setVendor(array $vendor = null)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVesselNumber()
    {
      return $this->vesselNumber;
    }

    /**
     * @param SearchColumnStringField[] $vesselNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setVesselNumber(array $vesselNumber = null)
    {
      $this->vesselNumber = $vesselNumber;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
