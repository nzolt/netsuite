<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\AvsMatchCode;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CustomerDeposit
 */
class CustomerDeposit extends Record {

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
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesOrder;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var float
     */
    protected $payment;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $paymentMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $ccIsPurchaseCardBin;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var boolean
     */
    protected $ccProcessAsPurchaseCard;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var string
     */
    protected $checkNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCardProcessor;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCard;

    /**
     * @access public
     * @var string
     */
    protected $ccSecurityCode;

    /**
     * @access public
     * @var string
     */
    protected $ccNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var dateTime
     */
    protected $ccExpireDate;

    /**
     * @access public
     * @var string
     */
    protected $debitCardIssueNo;

    /**
     * @access public
     * @var dateTime
     */
    protected $validFrom;

    /**
     * @access public
     * @var string
     */
    protected $ccName;

    /**
     * @access public
     * @var string
     */
    protected $ccStreet;

    /**
     * @access public
     * @var string
     */
    protected $ccZipCode;

    /**
     * @access public
     * @var boolean
     */
    protected $chargeIt;

    /**
     * @access public
     * @var boolean
     */
    protected $ccApproved;

    /**
     * @access public
     * @var string
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var string
     */
    protected $authCode;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccAvsStreetMatch;

    /**
     * @access public
     * @var string
     */
    protected $softDescriptor;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccAvsZipMatch;

    /**
     * @access public
     * @var boolean
     */
    protected $isRecurringPayment;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccSecurityCodeMatch;

    /**
     * @access public
     * @var string
     */
    protected $threeDStatusCode;

    /**
     * @access public
     * @var boolean
     */
    protected $ignoreAvs;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var boolean
     */
    protected $undepFunds;

    /**
     * @access public
     * @var CustomerDepositApplyList
     */
    protected $applyList;

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
    	"status" => "string",
    	"customer" => "RecordRef",
    	"salesOrder" => "RecordRef",
    	"customForm" => "RecordRef",
    	"payment" => "float",
    	"currency" => "RecordRef",
    	"tranDate" => "dateTime",
    	"postingPeriod" => "RecordRef",
    	"paymentMethod" => "RecordRef",
    	"ccIsPurchaseCardBin" => "boolean",
    	"memo" => "string",
    	"ccProcessAsPurchaseCard" => "boolean",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"checkNum" => "string",
    	"creditCardProcessor" => "RecordRef",
    	"creditCard" => "RecordRef",
    	"ccSecurityCode" => "string",
    	"ccNumber" => "string",
    	"subsidiary" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"ccExpireDate" => "dateTime",
    	"debitCardIssueNo" => "string",
    	"validFrom" => "dateTime",
    	"ccName" => "string",
    	"ccStreet" => "string",
    	"ccZipCode" => "string",
    	"chargeIt" => "boolean",
    	"ccApproved" => "boolean",
    	"pnRefNum" => "string",
    	"authCode" => "string",
    	"ccAvsStreetMatch" => "AvsMatchCode",
    	"softDescriptor" => "string",
    	"ccAvsZipMatch" => "AvsMatchCode",
    	"isRecurringPayment" => "boolean",
    	"ccSecurityCodeMatch" => "AvsMatchCode",
    	"threeDStatusCode" => "string",
    	"ignoreAvs" => "boolean",
    	"account" => "RecordRef",
    	"undepFunds" => "boolean",
    	"applyList" => "CustomerDepositApplyList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CustomerDeposit
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
     * @return CustomerDeposit
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
     * Set status
     *
     * @param string $status
     * @return CustomerDeposit
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
     * Set payment
     *
     * @param float $payment
     * @return CustomerDeposit
     */
    public function setPayment($payment) {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Get payment
     *
     * @return float
     */
    public function getPayment() {
        return $this->payment;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return CustomerDeposit
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
     * Set ccIsPurchaseCardBin
     *
     * @param boolean $ccIsPurchaseCardBin
     * @return CustomerDeposit
     */
    public function setCcIsPurchaseCardBin($ccIsPurchaseCardBin) {
        $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
        return $this;
    }

    /**
     * Get ccIsPurchaseCardBin
     *
     * @return boolean
     */
    public function getCcIsPurchaseCardBin() {
        return $this->ccIsPurchaseCardBin;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return CustomerDeposit
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
     * Set ccProcessAsPurchaseCard
     *
     * @param boolean $ccProcessAsPurchaseCard
     * @return CustomerDeposit
     */
    public function setCcProcessAsPurchaseCard($ccProcessAsPurchaseCard) {
        $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
        return $this;
    }

    /**
     * Get ccProcessAsPurchaseCard
     *
     * @return boolean
     */
    public function getCcProcessAsPurchaseCard() {
        return $this->ccProcessAsPurchaseCard;
    }


    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return CustomerDeposit
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CustomerDeposit
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
     * Set checkNum
     *
     * @param string $checkNum
     * @return CustomerDeposit
     */
    public function setCheckNum($checkNum) {
        $this->checkNum = $checkNum;
        return $this;
    }

    /**
     * Get checkNum
     *
     * @return string
     */
    public function getCheckNum() {
        return $this->checkNum;
    }


    /**
     * Set ccSecurityCode
     *
     * @param string $ccSecurityCode
     * @return CustomerDeposit
     */
    public function setCcSecurityCode($ccSecurityCode) {
        $this->ccSecurityCode = $ccSecurityCode;
        return $this;
    }

    /**
     * Get ccSecurityCode
     *
     * @return string
     */
    public function getCcSecurityCode() {
        return $this->ccSecurityCode;
    }


    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return CustomerDeposit
     */
    public function setCcNumber($ccNumber) {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string
     */
    public function getCcNumber() {
        return $this->ccNumber;
    }


    /**
     * Set ccExpireDate
     *
     * @param \DateTime $ccExpireDate
     * @return CustomerDeposit
     */
    public function setCcExpireDate(\DateTime $ccExpireDate) {
        $this->ccExpireDate = $ccExpireDate->format('c');
        return $this;
    }

    /**
     * Get ccExpireDate
     *
     * @return \DateTime
     */
    public function getCcExpireDate() {
        return new \DateTime($this->ccExpireDate);
    }


    /**
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return CustomerDeposit
     */
    public function setDebitCardIssueNo($debitCardIssueNo) {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * Get debitCardIssueNo
     *
     * @return string
     */
    public function getDebitCardIssueNo() {
        return $this->debitCardIssueNo;
    }


    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return CustomerDeposit
     */
    public function setValidFrom(\DateTime $validFrom) {
        $this->validFrom = $validFrom->format('c');
        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom() {
        return new \DateTime($this->validFrom);
    }


    /**
     * Set ccName
     *
     * @param string $ccName
     * @return CustomerDeposit
     */
    public function setCcName($ccName) {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * Get ccName
     *
     * @return string
     */
    public function getCcName() {
        return $this->ccName;
    }


    /**
     * Set ccStreet
     *
     * @param string $ccStreet
     * @return CustomerDeposit
     */
    public function setCcStreet($ccStreet) {
        $this->ccStreet = $ccStreet;
        return $this;
    }

    /**
     * Get ccStreet
     *
     * @return string
     */
    public function getCcStreet() {
        return $this->ccStreet;
    }


    /**
     * Set ccZipCode
     *
     * @param string $ccZipCode
     * @return CustomerDeposit
     */
    public function setCcZipCode($ccZipCode) {
        $this->ccZipCode = $ccZipCode;
        return $this;
    }

    /**
     * Get ccZipCode
     *
     * @return string
     */
    public function getCcZipCode() {
        return $this->ccZipCode;
    }


    /**
     * Set chargeIt
     *
     * @param boolean $chargeIt
     * @return CustomerDeposit
     */
    public function setChargeIt($chargeIt) {
        $this->chargeIt = $chargeIt;
        return $this;
    }

    /**
     * Get chargeIt
     *
     * @return boolean
     */
    public function getChargeIt() {
        return $this->chargeIt;
    }


    /**
     * Set ccApproved
     *
     * @param boolean $ccApproved
     * @return CustomerDeposit
     */
    public function setCcApproved($ccApproved) {
        $this->ccApproved = $ccApproved;
        return $this;
    }

    /**
     * Get ccApproved
     *
     * @return boolean
     */
    public function getCcApproved() {
        return $this->ccApproved;
    }


    /**
     * Set pnRefNum
     *
     * @param string $pnRefNum
     * @return CustomerDeposit
     */
    public function setPnRefNum($pnRefNum) {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * Get pnRefNum
     *
     * @return string
     */
    public function getPnRefNum() {
        return $this->pnRefNum;
    }


    /**
     * Set authCode
     *
     * @param string $authCode
     * @return CustomerDeposit
     */
    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Get authCode
     *
     * @return string
     */
    public function getAuthCode() {
        return $this->authCode;
    }


    /**
     * Set ccAvsStreetMatch
     *
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return CustomerDeposit
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch) {
        $this->ccAvsStreetMatch = $ccAvsStreetMatch;
        return $this;
    }

    /**
     * Get ccAvsStreetMatch
     *
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch() {
        return $this->ccAvsStreetMatch;
    }


    /**
     * Set softDescriptor
     *
     * @param string $softDescriptor
     * @return CustomerDeposit
     */
    public function setSoftDescriptor($softDescriptor) {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * Get softDescriptor
     *
     * @return string
     */
    public function getSoftDescriptor() {
        return $this->softDescriptor;
    }


    /**
     * Set ccAvsZipMatch
     *
     * @param AvsMatchCode $ccAvsZipMatch
     * @return CustomerDeposit
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch) {
        $this->ccAvsZipMatch = $ccAvsZipMatch;
        return $this;
    }

    /**
     * Get ccAvsZipMatch
     *
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch() {
        return $this->ccAvsZipMatch;
    }


    /**
     * Set isRecurringPayment
     *
     * @param boolean $isRecurringPayment
     * @return CustomerDeposit
     */
    public function setIsRecurringPayment($isRecurringPayment) {
        $this->isRecurringPayment = $isRecurringPayment;
        return $this;
    }

    /**
     * Get isRecurringPayment
     *
     * @return boolean
     */
    public function getIsRecurringPayment() {
        return $this->isRecurringPayment;
    }


    /**
     * Set ccSecurityCodeMatch
     *
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CustomerDeposit
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch) {
        $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
        return $this;
    }

    /**
     * Get ccSecurityCodeMatch
     *
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch() {
        return $this->ccSecurityCodeMatch;
    }


    /**
     * Set threeDStatusCode
     *
     * @param string $threeDStatusCode
     * @return CustomerDeposit
     */
    public function setThreeDStatusCode($threeDStatusCode) {
        $this->threeDStatusCode = $threeDStatusCode;
        return $this;
    }

    /**
     * Get threeDStatusCode
     *
     * @return string
     */
    public function getThreeDStatusCode() {
        return $this->threeDStatusCode;
    }


    /**
     * Set ignoreAvs
     *
     * @param boolean $ignoreAvs
     * @return CustomerDeposit
     */
    public function setIgnoreAvs($ignoreAvs) {
        $this->ignoreAvs = $ignoreAvs;
        return $this;
    }

    /**
     * Get ignoreAvs
     *
     * @return boolean
     */
    public function getIgnoreAvs() {
        return $this->ignoreAvs;
    }


    /**
     * Set undepFunds
     *
     * @param boolean $undepFunds
     * @return CustomerDeposit
     */
    public function setUndepFunds($undepFunds) {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * Get undepFunds
     *
     * @return boolean
     */
    public function getUndepFunds() {
        return $this->undepFunds;
    }


    /**
     * Set applyList
     *
     * @param CustomerDepositApplyList $applyList
     * @return CustomerDeposit
     */
    public function setApplyList(CustomerDepositApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return CustomerDepositApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CustomerDeposit
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
     * @return CustomerDeposit
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
     * @return CustomerDeposit
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