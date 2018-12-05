<?php

namespace Nzolt\NetSuite;

class InterCompanyTransferOrder extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var float $subTotal
     */
    protected $subTotal = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var Address $shippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var boolean $shipIsResidential
     */
    protected $shipIsResidential = null;

    /**
     * @var RecordRef $shipAddressList
     */
    protected $shipAddressList = null;

    /**
     * @var string $fob
     */
    protected $fob = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var TransferOrderOrderStatus $orderStatus
     */
    protected $orderStatus = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $toSubsidiary
     */
    protected $toSubsidiary = null;

    /**
     * @var RecordRef $employee
     */
    protected $employee = null;

    /**
     * @var boolean $useItemCostAsTransferCost
     */
    protected $useItemCostAsTransferCost = null;

    /**
     * @var RecordRef $incoterm
     */
    protected $incoterm = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $transferLocation
     */
    protected $transferLocation = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var \DateTime $shipDate
     */
    protected $shipDate = null;

    /**
     * @var RecordRef $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var string $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var string $linkedTrackingNumbers
     */
    protected $linkedTrackingNumbers = null;

    /**
     * @var boolean $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var float $altShippingCost
     */
    protected $altShippingCost = null;

    /**
     * @var float $shippingTax1Rate
     */
    protected $shippingTax1Rate = null;

    /**
     * @var float $handlingTax1Rate
     */
    protected $handlingTax1Rate = null;

    /**
     * @var float $shippingTax2Rate
     */
    protected $shippingTax2Rate = null;

    /**
     * @var float $handlingTax2Rate
     */
    protected $handlingTax2Rate = null;

    /**
     * @var RecordRef $shippingTaxCode
     */
    protected $shippingTaxCode = null;

    /**
     * @var RecordRef $handlingTaxCode
     */
    protected $handlingTaxCode = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var InterCompanyTransferOrderItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
      return $this->subTotal;
    }

    /**
     * @param float $subTotal
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setSubTotal($subTotal)
    {
      $this->subTotal = $subTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
      return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShippingAddress($shippingAddress)
    {
      $this->shippingAddress = $shippingAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipIsResidential()
    {
      return $this->shipIsResidential;
    }

    /**
     * @param boolean $shipIsResidential
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShipIsResidential($shipIsResidential)
    {
      $this->shipIsResidential = $shipIsResidential;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList()
    {
      return $this->shipAddressList;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShipAddressList($shipAddressList)
    {
      $this->shipAddressList = $shipAddressList;
      return $this;
    }

    /**
     * @return string
     */
    public function getFob()
    {
      return $this->fob;
    }

    /**
     * @param string $fob
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setFob($fob)
    {
      $this->fob = $fob;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return TransferOrderOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->orderStatus;
    }

    /**
     * @param TransferOrderOrderStatus $orderStatus
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param RecordRef $toSubsidiary
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param RecordRef $employee
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseItemCostAsTransferCost()
    {
      return $this->useItemCostAsTransferCost;
    }

    /**
     * @param boolean $useItemCostAsTransferCost
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setUseItemCostAsTransferCost($useItemCostAsTransferCost)
    {
      $this->useItemCostAsTransferCost = $useItemCostAsTransferCost;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransferLocation()
    {
      return $this->transferLocation;
    }

    /**
     * @param RecordRef $transferLocation
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setTransferLocation($transferLocation)
    {
      $this->transferLocation = $transferLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->shipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shipDate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShipDate(\DateTime $shipDate = null)
    {
      if ($shipDate == null) {
       $this->shipDate = null;
      } else {
        $this->shipDate = $shipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param RecordRef $shipMethod
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumbers()
    {
      return $this->trackingNumbers;
    }

    /**
     * @param string $trackingNumbers
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setTrackingNumbers($trackingNumbers)
    {
      $this->trackingNumbers = $trackingNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkedTrackingNumbers()
    {
      return $this->linkedTrackingNumbers;
    }

    /**
     * @param string $linkedTrackingNumbers
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers)
    {
      $this->linkedTrackingNumbers = $linkedTrackingNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param boolean $shipComplete
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShipComplete($shipComplete)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltShippingCost()
    {
      return $this->altShippingCost;
    }

    /**
     * @param float $altShippingCost
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setAltShippingCost($altShippingCost)
    {
      $this->altShippingCost = $altShippingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingTax1Rate()
    {
      return $this->shippingTax1Rate;
    }

    /**
     * @param float $shippingTax1Rate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShippingTax1Rate($shippingTax1Rate)
    {
      $this->shippingTax1Rate = $shippingTax1Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTax1Rate()
    {
      return $this->handlingTax1Rate;
    }

    /**
     * @param float $handlingTax1Rate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setHandlingTax1Rate($handlingTax1Rate)
    {
      $this->handlingTax1Rate = $handlingTax1Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingTax2Rate()
    {
      return $this->shippingTax2Rate;
    }

    /**
     * @param float $shippingTax2Rate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShippingTax2Rate($shippingTax2Rate)
    {
      $this->shippingTax2Rate = $shippingTax2Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTax2Rate()
    {
      return $this->handlingTax2Rate;
    }

    /**
     * @param float $handlingTax2Rate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setHandlingTax2Rate($handlingTax2Rate)
    {
      $this->handlingTax2Rate = $handlingTax2Rate;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setShippingTaxCode($shippingTaxCode)
    {
      $this->shippingTaxCode = $shippingTaxCode;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setHandlingTaxCode($handlingTaxCode)
    {
      $this->handlingTaxCode = $handlingTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return InterCompanyTransferOrderItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param InterCompanyTransferOrderItemList $itemList
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\InterCompanyTransferOrder
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
