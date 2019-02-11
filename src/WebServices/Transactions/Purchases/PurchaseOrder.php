<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\IntercoStatus;
use Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\PurchaseOrderOrderStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PurchaseOrder
 */
class PurchaseOrder extends Record {

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
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseContract;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

    /**
     * @access public
     * @var boolean
     */
    protected $supervisorApproval;

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
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $terms;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var string
     */
    protected $otherRefNum;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $approvalStatus;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $nextApprover;

    /**
     * @access public
     * @var string
     */
    protected $source;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var boolean
     */
    protected $toBePrinted;

    /**
     * @access public
     * @var boolean
     */
    protected $toBeEmailed;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var boolean
     */
    protected $toBeFaxed;

    /**
     * @access public
     * @var string
     */
    protected $fax;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var Address
     */
    protected $billingAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $billAddressList;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipTo;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

    /**
     * @access public
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

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
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoTransaction;

    /**
     * @access public
     * @var IntercoStatus
     */
    protected $intercoStatus;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var PurchaseOrderOrderStatus
     */
    protected $orderStatus;

    /**
     * @access public
     * @var PurchaseOrderItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var PurchaseOrderExpenseList
     */
    protected $expenseList;

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
    	"entity" => "RecordRef",
    	"purchaseContract" => "RecordRef",
    	"vatRegNum" => "string",
    	"employee" => "RecordRef",
    	"supervisorApproval" => "boolean",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"createdFrom" => "RecordRef",
    	"terms" => "RecordRef",
    	"dueDate" => "dateTime",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"approvalStatus" => "RecordRef",
    	"exchangeRate" => "float",
    	"nextApprover" => "RecordRef",
    	"source" => "string",
    	"currencyName" => "string",
    	"toBePrinted" => "boolean",
    	"toBeEmailed" => "boolean",
    	"email" => "string",
    	"toBeFaxed" => "boolean",
    	"fax" => "string",
    	"message" => "string",
    	"billingAddress" => "Address",
    	"billAddressList" => "RecordRef",
    	"currency" => "RecordRef",
    	"shipTo" => "RecordRef",
    	"subTotal" => "float",
    	"taxTotal" => "float",
    	"tax2Total" => "float",
    	"shippingAddress" => "Address",
    	"shipIsResidential" => "boolean",
    	"shipAddressList" => "RecordRef",
    	"fob" => "string",
    	"shipDate" => "dateTime",
    	"shipMethod" => "RecordRef",
    	"trackingNumbers" => "string",
    	"linkedTrackingNumbers" => "string",
    	"total" => "float",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"intercoTransaction" => "RecordRef",
    	"intercoStatus" => "IntercoStatus",
    	"status" => "string",
    	"orderStatus" => "PurchaseOrderOrderStatus",
    	"itemList" => "PurchaseOrderItemList",
    	"expenseList" => "PurchaseOrderExpenseList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return PurchaseOrder
     */
    public function setVatRegNum($vatRegNum) {
        $this->vatRegNum = $vatRegNum;
        return $this;
    }

    /**
     * Get vatRegNum
     *
     * @return string
     */
    public function getVatRegNum() {
        return $this->vatRegNum;
    }


    /**
     * Set supervisorApproval
     *
     * @param boolean $supervisorApproval
     * @return PurchaseOrder
     */
    public function setSupervisorApproval($supervisorApproval) {
        $this->supervisorApproval = $supervisorApproval;
        return $this;
    }

    /**
     * Get supervisorApproval
     *
     * @return boolean
     */
    public function getSupervisorApproval() {
        return $this->supervisorApproval;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return PurchaseOrder
     */
    public function setDueDate(\DateTime $dueDate) {
        $this->dueDate = $dueDate->format('c');
        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate() {
        return new \DateTime($this->dueDate);
    }


    /**
     * Set otherRefNum
     *
     * @param string $otherRefNum
     * @return PurchaseOrder
     */
    public function setOtherRefNum($otherRefNum) {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * Get otherRefNum
     *
     * @return string
     */
    public function getOtherRefNum() {
        return $this->otherRefNum;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return PurchaseOrder
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return PurchaseOrder
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set source
     *
     * @param string $source
     * @return PurchaseOrder
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
     * Set currencyName
     *
     * @param string $currencyName
     * @return PurchaseOrder
     */
    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string
     */
    public function getCurrencyName() {
        return $this->currencyName;
    }


    /**
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return PurchaseOrder
     */
    public function setToBePrinted($toBePrinted) {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * Get toBePrinted
     *
     * @return boolean
     */
    public function getToBePrinted() {
        return $this->toBePrinted;
    }


    /**
     * Set toBeEmailed
     *
     * @param boolean $toBeEmailed
     * @return PurchaseOrder
     */
    public function setToBeEmailed($toBeEmailed) {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * Get toBeEmailed
     *
     * @return boolean
     */
    public function getToBeEmailed() {
        return $this->toBeEmailed;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return PurchaseOrder
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set toBeFaxed
     *
     * @param boolean $toBeFaxed
     * @return PurchaseOrder
     */
    public function setToBeFaxed($toBeFaxed) {
        $this->toBeFaxed = $toBeFaxed;
        return $this;
    }

    /**
     * Get toBeFaxed
     *
     * @return boolean
     */
    public function getToBeFaxed() {
        return $this->toBeFaxed;
    }


    /**
     * Set fax
     *
     * @param string $fax
     * @return PurchaseOrder
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return PurchaseOrder
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set billingAddress
     *
     * @param Address $billingAddress
     * @return PurchaseOrder
     */
    public function setBillingAddress(Address $billingAddress) {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return Address
     */
    public function getBillingAddress() {
        return $this->billingAddress;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return PurchaseOrder
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
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return PurchaseOrder
     */
    public function setTaxTotal($taxTotal) {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Get taxTotal
     *
     * @return float
     */
    public function getTaxTotal() {
        return $this->taxTotal;
    }


    /**
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return PurchaseOrder
     */
    public function setTax2Total($tax2Total) {
        $this->tax2Total = $tax2Total;
        return $this;
    }

    /**
     * Get tax2Total
     *
     * @return float
     */
    public function getTax2Total() {
        return $this->tax2Total;
    }


    /**
     * Set shippingAddress
     *
     * @param Address $shippingAddress
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * Set shipDate
     *
     * @param \DateTime $shipDate
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * Set total
     *
     * @param float $total
     * @return PurchaseOrder
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
     * Set intercoStatus
     *
     * @param IntercoStatus $intercoStatus
     * @return PurchaseOrder
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus) {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * Get intercoStatus
     *
     * @return IntercoStatus
     */
    public function getIntercoStatus() {
        return $this->intercoStatus;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return PurchaseOrder
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
     * Set orderStatus
     *
     * @param PurchaseOrderOrderStatus $orderStatus
     * @return PurchaseOrder
     */
    public function setOrderStatus(PurchaseOrderOrderStatus $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return PurchaseOrderOrderStatus
     */
    public function getOrderStatus() {
        return $this->orderStatus;
    }


    /**
     * Set itemList
     *
     * @param PurchaseOrderItemList $itemList
     * @return PurchaseOrder
     */
    public function setItemList(PurchaseOrderItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return PurchaseOrderItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set expenseList
     *
     * @param PurchaseOrderExpenseList $expenseList
     * @return PurchaseOrder
     */
    public function setExpenseList(PurchaseOrderExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return PurchaseOrderExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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