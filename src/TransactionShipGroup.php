<?php

namespace Nzolt\NetSuite;

class TransactionShipGroup
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $isFulfilled
     */
    protected $isFulfilled = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var RecordRef $sourceAddressRef
     */
    protected $sourceAddressRef = null;

    /**
     * @var string $sourceAddress
     */
    protected $sourceAddress = null;

    /**
     * @var RecordRef $destinationAddressRef
     */
    protected $destinationAddressRef = null;

    /**
     * @var string $destinationAddress
     */
    protected $destinationAddress = null;

    /**
     * @var RecordRef $shippingMethodRef
     */
    protected $shippingMethodRef = null;

    /**
     * @var string $shippingMethod
     */
    protected $shippingMethod = null;

    /**
     * @var boolean $isHandlingTaxable
     */
    protected $isHandlingTaxable = null;

    /**
     * @var RecordRef $handlingTaxCode
     */
    protected $handlingTaxCode = null;

    /**
     * @var string $handlingTaxRate
     */
    protected $handlingTaxRate = null;

    /**
     * @var string $handlingTax2Rate
     */
    protected $handlingTax2Rate = null;

    /**
     * @var float $handlingRate
     */
    protected $handlingRate = null;

    /**
     * @var float $handlingTaxAmt
     */
    protected $handlingTaxAmt = null;

    /**
     * @var float $handlingTax2Amt
     */
    protected $handlingTax2Amt = null;

    /**
     * @var boolean $isShippingTaxable
     */
    protected $isShippingTaxable = null;

    /**
     * @var RecordRef $shippingTaxCode
     */
    protected $shippingTaxCode = null;

    /**
     * @var string $shippingTaxRate
     */
    protected $shippingTaxRate = null;

    /**
     * @var string $shippingTax2Rate
     */
    protected $shippingTax2Rate = null;

    /**
     * @var float $shippingRate
     */
    protected $shippingRate = null;

    /**
     * @var float $shippingTaxAmt
     */
    protected $shippingTaxAmt = null;

    /**
     * @var float $shippingTax2Amt
     */
    protected $shippingTax2Amt = null;

    
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
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFulfilled()
    {
      return $this->isFulfilled;
    }

    /**
     * @param boolean $isFulfilled
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setIsFulfilled($isFulfilled)
    {
      $this->isFulfilled = $isFulfilled;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceAddressRef()
    {
      return $this->sourceAddressRef;
    }

    /**
     * @param RecordRef $sourceAddressRef
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setSourceAddressRef($sourceAddressRef)
    {
      $this->sourceAddressRef = $sourceAddressRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceAddress()
    {
      return $this->sourceAddress;
    }

    /**
     * @param string $sourceAddress
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setSourceAddress($sourceAddress)
    {
      $this->sourceAddress = $sourceAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDestinationAddressRef()
    {
      return $this->destinationAddressRef;
    }

    /**
     * @param RecordRef $destinationAddressRef
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setDestinationAddressRef($destinationAddressRef)
    {
      $this->destinationAddressRef = $destinationAddressRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAddress()
    {
      return $this->destinationAddress;
    }

    /**
     * @param string $destinationAddress
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setDestinationAddress($destinationAddress)
    {
      $this->destinationAddress = $destinationAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingMethodRef()
    {
      return $this->shippingMethodRef;
    }

    /**
     * @param RecordRef $shippingMethodRef
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingMethodRef($shippingMethodRef)
    {
      $this->shippingMethodRef = $shippingMethodRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
      return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingMethod($shippingMethod)
    {
      $this->shippingMethod = $shippingMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHandlingTaxable()
    {
      return $this->isHandlingTaxable;
    }

    /**
     * @param boolean $isHandlingTaxable
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setIsHandlingTaxable($isHandlingTaxable)
    {
      $this->isHandlingTaxable = $isHandlingTaxable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHandlingTaxCode()
    {
      return $this->handlingTaxCode;
    }

    /**
     * @param RecordRef $handlingTaxCode
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingTaxCode($handlingTaxCode)
    {
      $this->handlingTaxCode = $handlingTaxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandlingTaxRate()
    {
      return $this->handlingTaxRate;
    }

    /**
     * @param string $handlingTaxRate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingTaxRate($handlingTaxRate)
    {
      $this->handlingTaxRate = $handlingTaxRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandlingTax2Rate()
    {
      return $this->handlingTax2Rate;
    }

    /**
     * @param string $handlingTax2Rate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingTax2Rate($handlingTax2Rate)
    {
      $this->handlingTax2Rate = $handlingTax2Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingRate()
    {
      return $this->handlingRate;
    }

    /**
     * @param float $handlingRate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingRate($handlingRate)
    {
      $this->handlingRate = $handlingRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTaxAmt()
    {
      return $this->handlingTaxAmt;
    }

    /**
     * @param float $handlingTaxAmt
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingTaxAmt($handlingTaxAmt)
    {
      $this->handlingTaxAmt = $handlingTaxAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTax2Amt()
    {
      return $this->handlingTax2Amt;
    }

    /**
     * @param float $handlingTax2Amt
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setHandlingTax2Amt($handlingTax2Amt)
    {
      $this->handlingTax2Amt = $handlingTax2Amt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShippingTaxable()
    {
      return $this->isShippingTaxable;
    }

    /**
     * @param boolean $isShippingTaxable
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setIsShippingTaxable($isShippingTaxable)
    {
      $this->isShippingTaxable = $isShippingTaxable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingTaxCode()
    {
      return $this->shippingTaxCode;
    }

    /**
     * @param RecordRef $shippingTaxCode
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingTaxCode($shippingTaxCode)
    {
      $this->shippingTaxCode = $shippingTaxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTaxRate()
    {
      return $this->shippingTaxRate;
    }

    /**
     * @param string $shippingTaxRate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingTaxRate($shippingTaxRate)
    {
      $this->shippingTaxRate = $shippingTaxRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTax2Rate()
    {
      return $this->shippingTax2Rate;
    }

    /**
     * @param string $shippingTax2Rate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingTax2Rate($shippingTax2Rate)
    {
      $this->shippingTax2Rate = $shippingTax2Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingRate()
    {
      return $this->shippingRate;
    }

    /**
     * @param float $shippingRate
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingRate($shippingRate)
    {
      $this->shippingRate = $shippingRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingTaxAmt()
    {
      return $this->shippingTaxAmt;
    }

    /**
     * @param float $shippingTaxAmt
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingTaxAmt($shippingTaxAmt)
    {
      $this->shippingTaxAmt = $shippingTaxAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingTax2Amt()
    {
      return $this->shippingTax2Amt;
    }

    /**
     * @param float $shippingTax2Amt
     * @return \Nzolt\NetSuite\TransactionShipGroup
     */
    public function setShippingTax2Amt($shippingTax2Amt)
    {
      $this->shippingTax2Amt = $shippingTax2Amt;
      return $this;
    }

}
