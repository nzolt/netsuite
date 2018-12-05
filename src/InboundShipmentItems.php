<?php

namespace Nzolt\NetSuite;

class InboundShipmentItems
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var RecordRef $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var RecordRef $shipmentItem
     */
    protected $shipmentItem = null;

    /**
     * @var string $shipmentItemDescription
     */
    protected $shipmentItemDescription = null;

    /**
     * @var string $poVendor
     */
    protected $poVendor = null;

    /**
     * @var RecordRef $receivingLocation
     */
    protected $receivingLocation = null;

    /**
     * @var float $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var float $quantityExpected
     */
    protected $quantityExpected = null;

    /**
     * @var float $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var RecordRef $unit
     */
    protected $unit = null;

    /**
     * @var float $poRate
     */
    protected $poRate = null;

    /**
     * @var float $expectedRate
     */
    protected $expectedRate = null;

    /**
     * @var float $shipmentItemAmount
     */
    protected $shipmentItemAmount = null;

    /**
     * @var RecordRef $poCurrency
     */
    protected $poCurrency = null;

    /**
     * @var RecordRef $incoterm
     */
    protected $incoterm = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param RecordRef $purchaseOrder
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipmentItem()
    {
      return $this->shipmentItem;
    }

    /**
     * @param RecordRef $shipmentItem
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setShipmentItem($shipmentItem)
    {
      $this->shipmentItem = $shipmentItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentItemDescription()
    {
      return $this->shipmentItemDescription;
    }

    /**
     * @param string $shipmentItemDescription
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setShipmentItemDescription($shipmentItemDescription)
    {
      $this->shipmentItemDescription = $shipmentItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoVendor()
    {
      return $this->poVendor;
    }

    /**
     * @param string $poVendor
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setPoVendor($poVendor)
    {
      $this->poVendor = $poVendor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivingLocation()
    {
      return $this->receivingLocation;
    }

    /**
     * @param RecordRef $receivingLocation
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setReceivingLocation($receivingLocation)
    {
      $this->receivingLocation = $receivingLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived()
    {
      return $this->quantityReceived;
    }

    /**
     * @param float $quantityReceived
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setQuantityReceived($quantityReceived)
    {
      $this->quantityReceived = $quantityReceived;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityExpected()
    {
      return $this->quantityExpected;
    }

    /**
     * @param float $quantityExpected
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setQuantityExpected($quantityExpected)
    {
      $this->quantityExpected = $quantityExpected;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param float $quantityRemaining
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param RecordRef $unit
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return float
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param float $poRate
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setPoRate($poRate)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpectedRate()
    {
      return $this->expectedRate;
    }

    /**
     * @param float $expectedRate
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setExpectedRate($expectedRate)
    {
      $this->expectedRate = $expectedRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipmentItemAmount()
    {
      return $this->shipmentItemAmount;
    }

    /**
     * @param float $shipmentItemAmount
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setShipmentItemAmount($shipmentItemAmount)
    {
      $this->shipmentItemAmount = $shipmentItemAmount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoCurrency()
    {
      return $this->poCurrency;
    }

    /**
     * @param RecordRef $poCurrency
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setPoCurrency($poCurrency)
    {
      $this->poCurrency = $poCurrency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param RecordRef $incoterm
     * @return \Nzolt\NetSuite\InboundShipmentItems
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
      return $this;
    }

}
