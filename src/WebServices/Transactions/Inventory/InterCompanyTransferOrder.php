<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\TransferOrderOrderStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InterCompanyTransferOrder
 */
class InterCompanyTransferOrder extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIsResidential;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipAddressList;

    /**
     * @access public
     * @var string
     */
    protected $fob;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var string
     */
    protected $source;

    /**
     * @access public
     * @var TransferOrderOrderStatus
     */
    protected $orderStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $toSubsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $transferLocation;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var dateTime
     */
    protected $shipDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipMethod;

    /**
     * @access public
     * @var string
     */
    protected $trackingNumbers;

    /**
     * @access public
     * @var string
     */
    protected $linkedTrackingNumbers;

    /**
     * @access public
     * @var boolean
     */
    protected $shipComplete;

    /**
     * @access public
     * @var float
     */
    protected $altShippingCost;

    /**
     * @access public
     * @var float
     */
    protected $shippingTax1Rate;

    /**
     * @access public
     * @var float
     */
    protected $handlingTax1Rate;

    /**
     * @access public
     * @var float
     */
    protected $shippingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $handlingTax2Rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $shippingTaxCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $handlingTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var InterCompanyTransferOrderItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"shippingCost" => "float",
    	"subTotal" => "float",
    	"status" => "string",
    	"shippingAddress" => "Address",
    	"shipIsResidential" => "boolean",
    	"shipAddressList" => "RecordRef",
    	"fob" => "string",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"orderStatus" => "TransferOrderOrderStatus",
    	"subsidiary" => "RecordRef",
    	"toSubsidiary" => "RecordRef",
    	"employee" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"transferLocation" => "RecordRef",
    	"memo" => "string",
    	"shipDate" => "dateTime",
    	"shipMethod" => "RecordRef",
    	"trackingNumbers" => "string",
    	"linkedTrackingNumbers" => "string",
    	"shipComplete" => "boolean",
    	"altShippingCost" => "float",
    	"shippingTax1Rate" => "float",
    	"handlingTax1Rate" => "float",
    	"shippingTax2Rate" => "float",
    	"handlingTax2Rate" => "float",
    	"shippingTaxCode" => "RecordRef",
    	"handlingTaxCode" => "RecordRef",
    	"total" => "float",
    	"itemList" => "InterCompanyTransferOrderItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return InterCompanyTransferOrder
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return InterCompanyTransferOrder
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return InterCompanyTransferOrder
     */
    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost() {
        return $this->shippingCost;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return InterCompanyTransferOrder
     */
    public function setSubTotal($subTotal) {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Get subTotal
     *
     * @return float
     */
    public function getSubTotal() {
        return $this->subTotal;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return InterCompanyTransferOrder
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set shippingAddress
     *
     * @param Address $shippingAddress
     * @return InterCompanyTransferOrder
     */
    public function setShippingAddress(Address $shippingAddress) {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return Address
     */
    public function getShippingAddress() {
        return $this->shippingAddress;
    }


    /**
     * Set shipIsResidential
     *
     * @param boolean $shipIsResidential
     * @return InterCompanyTransferOrder
     */
    public function setShipIsResidential($shipIsResidential) {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * Get shipIsResidential
     *
     * @return boolean
     */
    public function getShipIsResidential() {
        return $this->shipIsResidential;
    }


    /**
     * Set fob
     *
     * @param string $fob
     * @return InterCompanyTransferOrder
     */
    public function setFob($fob) {
        $this->fob = $fob;
        return $this;
    }

    /**
     * Get fob
     *
     * @return string
     */
    public function getFob() {
        return $this->fob;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return InterCompanyTransferOrder
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return InterCompanyTransferOrder
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set source
     *
     * @param string $source
     * @return InterCompanyTransferOrder
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource() {
        return $this->source;
    }


    /**
     * Set orderStatus
     *
     * @param TransferOrderOrderStatus $orderStatus
     * @return InterCompanyTransferOrder
     */
    public function setOrderStatus(TransferOrderOrderStatus $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return TransferOrderOrderStatus
     */
    public function getOrderStatus() {
        return $this->orderStatus;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return InterCompanyTransferOrder
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set shipDate
     *
     * @param \DateTime $shipDate
     * @return InterCompanyTransferOrder
     */
    public function setShipDate(\DateTime $shipDate) {
        $this->shipDate = $shipDate->format('c');
        return $this;
    }

    /**
     * Get shipDate
     *
     * @return \DateTime
     */
    public function getShipDate() {
        return new \DateTime($this->shipDate);
    }


    /**
     * Set trackingNumbers
     *
     * @param string $trackingNumbers
     * @return InterCompanyTransferOrder
     */
    public function setTrackingNumbers($trackingNumbers) {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * Get trackingNumbers
     *
     * @return string
     */
    public function getTrackingNumbers() {
        return $this->trackingNumbers;
    }


    /**
     * Set linkedTrackingNumbers
     *
     * @param string $linkedTrackingNumbers
     * @return InterCompanyTransferOrder
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers) {
        $this->linkedTrackingNumbers = $linkedTrackingNumbers;
        return $this;
    }

    /**
     * Get linkedTrackingNumbers
     *
     * @return string
     */
    public function getLinkedTrackingNumbers() {
        return $this->linkedTrackingNumbers;
    }


    /**
     * Set shipComplete
     *
     * @param boolean $shipComplete
     * @return InterCompanyTransferOrder
     */
    public function setShipComplete($shipComplete) {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * Get shipComplete
     *
     * @return boolean
     */
    public function getShipComplete() {
        return $this->shipComplete;
    }


    /**
     * Set altShippingCost
     *
     * @param float $altShippingCost
     * @return InterCompanyTransferOrder
     */
    public function setAltShippingCost($altShippingCost) {
        $this->altShippingCost = $altShippingCost;
        return $this;
    }

    /**
     * Get altShippingCost
     *
     * @return float
     */
    public function getAltShippingCost() {
        return $this->altShippingCost;
    }


    /**
     * Set shippingTax1Rate
     *
     * @param float $shippingTax1Rate
     * @return InterCompanyTransferOrder
     */
    public function setShippingTax1Rate($shippingTax1Rate) {
        $this->shippingTax1Rate = $shippingTax1Rate;
        return $this;
    }

    /**
     * Get shippingTax1Rate
     *
     * @return float
     */
    public function getShippingTax1Rate() {
        return $this->shippingTax1Rate;
    }


    /**
     * Set handlingTax1Rate
     *
     * @param float $handlingTax1Rate
     * @return InterCompanyTransferOrder
     */
    public function setHandlingTax1Rate($handlingTax1Rate) {
        $this->handlingTax1Rate = $handlingTax1Rate;
        return $this;
    }

    /**
     * Get handlingTax1Rate
     *
     * @return float
     */
    public function getHandlingTax1Rate() {
        return $this->handlingTax1Rate;
    }


    /**
     * Set shippingTax2Rate
     *
     * @param float $shippingTax2Rate
     * @return InterCompanyTransferOrder
     */
    public function setShippingTax2Rate($shippingTax2Rate) {
        $this->shippingTax2Rate = $shippingTax2Rate;
        return $this;
    }

    /**
     * Get shippingTax2Rate
     *
     * @return float
     */
    public function getShippingTax2Rate() {
        return $this->shippingTax2Rate;
    }


    /**
     * Set handlingTax2Rate
     *
     * @param float $handlingTax2Rate
     * @return InterCompanyTransferOrder
     */
    public function setHandlingTax2Rate($handlingTax2Rate) {
        $this->handlingTax2Rate = $handlingTax2Rate;
        return $this;
    }

    /**
     * Get handlingTax2Rate
     *
     * @return float
     */
    public function getHandlingTax2Rate() {
        return $this->handlingTax2Rate;
    }


    /**
     * Set total
     *
     * @param float $total
     * @return InterCompanyTransferOrder
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set itemList
     *
     * @param InterCompanyTransferOrderItemList $itemList
     * @return InterCompanyTransferOrder
     */
    public function setItemList(InterCompanyTransferOrderItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return InterCompanyTransferOrderItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return InterCompanyTransferOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return InterCompanyTransferOrder
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return InterCompanyTransferOrder
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}