<?php

namespace Nzolt\NetSuite;

class InboundShipmentSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDateField $actualDeliveryDate
     */
    protected $actualDeliveryDate = null;

    /**
     * @var SearchDateField $actualShippingDate
     */
    protected $actualShippingDate = null;

    /**
     * @var SearchStringField $billOfLading
     */
    protected $billOfLading = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchDateField $expectedDeliveryDate
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var SearchDoubleField $expectedRate
     */
    protected $expectedRate = null;

    /**
     * @var SearchDateField $expectedShippingDate
     */
    protected $expectedShippingDate = null;

    /**
     * @var SearchMultiSelectField $externalDocumentNumber
     */
    protected $externalDocumentNumber = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $incoterm
     */
    protected $incoterm = null;

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
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchDoubleField $poAmount
     */
    protected $poAmount = null;

    /**
     * @var SearchDoubleField $poRate
     */
    protected $poRate = null;

    /**
     * @var SearchMultiSelectField $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var SearchDoubleField $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var SearchDoubleField $quantityExpected
     */
    protected $quantityExpected = null;

    /**
     * @var SearchDoubleField $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var SearchDoubleField $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var SearchMultiSelectField $receivingLocation
     */
    protected $receivingLocation = null;

    /**
     * @var SearchMultiSelectField $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $unit
     */
    protected $unit = null;

    /**
     * @var SearchMultiSelectField $vendor
     */
    protected $vendor = null;

    /**
     * @var SearchStringField $vesselNumber
     */
    protected $vesselNumber = null;

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
    public function getActualDeliveryDate()
    {
      return $this->actualDeliveryDate;
    }

    /**
     * @param SearchDateField $actualDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setActualDeliveryDate($actualDeliveryDate)
    {
      $this->actualDeliveryDate = $actualDeliveryDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualShippingDate()
    {
      return $this->actualShippingDate;
    }

    /**
     * @param SearchDateField $actualShippingDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setActualShippingDate($actualShippingDate)
    {
      $this->actualShippingDate = $actualShippingDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillOfLading()
    {
      return $this->billOfLading;
    }

    /**
     * @param SearchStringField $billOfLading
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setBillOfLading($billOfLading)
    {
      $this->billOfLading = $billOfLading;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedDeliveryDate()
    {
      return $this->expectedDeliveryDate;
    }

    /**
     * @param SearchDateField $expectedDeliveryDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
      $this->expectedDeliveryDate = $expectedDeliveryDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpectedRate()
    {
      return $this->expectedRate;
    }

    /**
     * @param SearchDoubleField $expectedRate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setExpectedRate($expectedRate)
    {
      $this->expectedRate = $expectedRate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedShippingDate()
    {
      return $this->expectedShippingDate;
    }

    /**
     * @param SearchDateField $expectedShippingDate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setExpectedShippingDate($expectedShippingDate)
    {
      $this->expectedShippingDate = $expectedShippingDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalDocumentNumber()
    {
      return $this->externalDocumentNumber;
    }

    /**
     * @param SearchMultiSelectField $externalDocumentNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setExternalDocumentNumber($externalDocumentNumber)
    {
      $this->externalDocumentNumber = $externalDocumentNumber;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchMultiSelectField $incoterm
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPoAmount()
    {
      return $this->poAmount;
    }

    /**
     * @param SearchDoubleField $poAmount
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setPoAmount($poAmount)
    {
      $this->poAmount = $poAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param SearchDoubleField $poRate
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setPoRate($poRate)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrder
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBilled()
    {
      return $this->quantityBilled;
    }

    /**
     * @param SearchDoubleField $quantityBilled
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setQuantityBilled($quantityBilled)
    {
      $this->quantityBilled = $quantityBilled;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityExpected()
    {
      return $this->quantityExpected;
    }

    /**
     * @param SearchDoubleField $quantityExpected
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setQuantityExpected($quantityExpected)
    {
      $this->quantityExpected = $quantityExpected;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityReceived()
    {
      return $this->quantityReceived;
    }

    /**
     * @param SearchDoubleField $quantityReceived
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setQuantityReceived($quantityReceived)
    {
      $this->quantityReceived = $quantityReceived;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param SearchDoubleField $quantityRemaining
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivingLocation()
    {
      return $this->receivingLocation;
    }

    /**
     * @param SearchMultiSelectField $receivingLocation
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setReceivingLocation($receivingLocation)
    {
      $this->receivingLocation = $receivingLocation;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param SearchMultiSelectField $shipmentNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param SearchMultiSelectField $unit
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchMultiSelectField $vendor
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVesselNumber()
    {
      return $this->vesselNumber;
    }

    /**
     * @param SearchStringField $vesselNumber
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setVesselNumber($vesselNumber)
    {
      $this->vesselNumber = $vesselNumber;
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
