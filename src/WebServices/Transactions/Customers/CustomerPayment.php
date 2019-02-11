<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\AvsMatchCode;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CustomerPayment
 */
class CustomerPayment extends Record {

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
    public $arAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var float
     */
    protected $pending;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $payment;

    /**
     * @access public
     * @var boolean
     */
    protected $autoApply;

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
    protected $checkNum;

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
     * @var RecordRef
     */
    public $creditCard;

    /**
     * @access public
     * @var boolean
     */
    protected $chargeIt;

    /**
     * @access public
     * @var string
     */
    protected $ccNumber;

    /**
     * @access public
     * @var dateTime
     */
    protected $ccExpireDate;

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
    protected $ccApproved;

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
     * @var string
     */
    protected $ccSecurityCode;

    /**
     * @access public
     * @var boolean
     */
    protected $ignoreAvs;

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
     * @var string
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCardProcessor;

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
     * @var boolean
     */
    protected $undepFunds;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var float
     */
    protected $applied;

    /**
     * @access public
     * @var float
     */
    protected $unapplied;

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
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var CustomerPaymentApplyList
     */
    protected $applyList;

    /**
     * @access public
     * @var CustomerPaymentCreditList
     */
    protected $creditList;

    /**
     * @access public
     * @var CustomerPaymentDepositList
     */
    protected $depositList;

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
    	"arAcct" => "RecordRef",
    	"customer" => "RecordRef",
    	"balance" => "float",
    	"pending" => "float",
    	"currency" => "RecordRef",
    	"payment" => "float",
    	"autoApply" => "boolean",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"postingPeriod" => "RecordRef",
    	"paymentMethod" => "RecordRef",
    	"ccIsPurchaseCardBin" => "boolean",
    	"memo" => "string",
    	"ccProcessAsPurchaseCard" => "boolean",
    	"checkNum" => "string",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"creditCard" => "RecordRef",
    	"chargeIt" => "boolean",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"ccStreet" => "string",
    	"ccZipCode" => "string",
    	"ccApproved" => "boolean",
    	"authCode" => "string",
    	"ccAvsStreetMatch" => "AvsMatchCode",
    	"ccAvsZipMatch" => "AvsMatchCode",
    	"isRecurringPayment" => "boolean",
    	"ccSecurityCode" => "string",
    	"ignoreAvs" => "boolean",
    	"ccSecurityCodeMatch" => "AvsMatchCode",
    	"threeDStatusCode" => "string",
    	"pnRefNum" => "string",
    	"creditCardProcessor" => "RecordRef",
    	"debitCardIssueNo" => "string",
    	"validFrom" => "dateTime",
    	"undepFunds" => "boolean",
    	"account" => "RecordRef",
    	"total" => "float",
    	"subsidiary" => "RecordRef",
    	"applied" => "float",
    	"unapplied" => "float",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"status" => "string",
    	"applyList" => "CustomerPaymentApplyList",
    	"creditList" => "CustomerPaymentCreditList",
    	"depositList" => "CustomerPaymentDepositList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set balance
     *
     * @param float $balance
     * @return CustomerPayment
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set pending
     *
     * @param float $pending
     * @return CustomerPayment
     */
    public function setPending($pending) {
        $this->pending = $pending;
        return $this;
    }

    /**
     * Get pending
     *
     * @return float
     */
    public function getPending() {
        return $this->pending;
    }


    /**
     * Set payment
     *
     * @param float $payment
     * @return CustomerPayment
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
     * Set autoApply
     *
     * @param boolean $autoApply
     * @return CustomerPayment
     */
    public function setAutoApply($autoApply) {
        $this->autoApply = $autoApply;
        return $this;
    }

    /**
     * Get autoApply
     *
     * @return boolean
     */
    public function getAutoApply() {
        return $this->autoApply;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set ccIsPurchaseCardBin
     *
     * @param boolean $ccIsPurchaseCardBin
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set checkNum
     *
     * @param string $checkNum
     * @return CustomerPayment
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
     * Set currencyName
     *
     * @param string $currencyName
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set chargeIt
     *
     * @param boolean $chargeIt
     * @return CustomerPayment
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
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set ccName
     *
     * @param string $ccName
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set ccApproved
     *
     * @param boolean $ccApproved
     * @return CustomerPayment
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
     * Set authCode
     *
     * @param string $authCode
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set ccAvsZipMatch
     *
     * @param AvsMatchCode $ccAvsZipMatch
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set ccSecurityCode
     *
     * @param string $ccSecurityCode
     * @return CustomerPayment
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
     * Set ignoreAvs
     *
     * @param boolean $ignoreAvs
     * @return CustomerPayment
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
     * Set ccSecurityCodeMatch
     *
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set pnRefNum
     *
     * @param string $pnRefNum
     * @return CustomerPayment
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
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set undepFunds
     *
     * @param boolean $undepFunds
     * @return CustomerPayment
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
     * Set total
     *
     * @param float $total
     * @return CustomerPayment
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
     * Set applied
     *
     * @param float $applied
     * @return CustomerPayment
     */
    public function setApplied($applied) {
        $this->applied = $applied;
        return $this;
    }

    /**
     * Get applied
     *
     * @return float
     */
    public function getApplied() {
        return $this->applied;
    }


    /**
     * Set unapplied
     *
     * @param float $unapplied
     * @return CustomerPayment
     */
    public function setUnapplied($unapplied) {
        $this->unapplied = $unapplied;
        return $this;
    }

    /**
     * Get unapplied
     *
     * @return float
     */
    public function getUnapplied() {
        return $this->unapplied;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return CustomerPayment
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
     * Set applyList
     *
     * @param CustomerPaymentApplyList $applyList
     * @return CustomerPayment
     */
    public function setApplyList(CustomerPaymentApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return CustomerPaymentApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set creditList
     *
     * @param CustomerPaymentCreditList $creditList
     * @return CustomerPayment
     */
    public function setCreditList(CustomerPaymentCreditList $creditList) {
        $this->creditList = $creditList;
        return $this;
    }

    /**
     * Get creditList
     *
     * @return CustomerPaymentCreditList
     */
    public function getCreditList() {
        return $this->creditList;
    }


    /**
     * Set depositList
     *
     * @param CustomerPaymentDepositList $depositList
     * @return CustomerPayment
     */
    public function setDepositList(CustomerPaymentDepositList $depositList) {
        $this->depositList = $depositList;
        return $this;
    }

    /**
     * Get depositList
     *
     * @return CustomerPaymentDepositList
     */
    public function getDepositList() {
        return $this->depositList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * @return CustomerPayment
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