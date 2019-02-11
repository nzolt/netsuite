<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PaycheckJournal
 */
class PaycheckJournal extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

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
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

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
    public $account;

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
     * @var PaycheckJournalCompanyContributionList
     */
    protected $companyContributionList;

    /**
     * @access public
     * @var PaycheckJournalDeductionList
     */
    protected $deductionList;

    /**
     * @access public
     * @var PaycheckJournalEmployeeTaxList
     */
    protected $employeeTaxList;

    /**
     * @access public
     * @var PaycheckJournalCompanyTaxList
     */
    protected $companyTaxList;

    /**
     * @access public
     * @var PaycheckJournalEarningList
     */
    protected $earningList;

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
    	"subsidiary" => "RecordRef",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"tranId" => "string",
    	"employee" => "RecordRef",
    	"tranDate" => "dateTime",
    	"postingPeriod" => "RecordRef",
    	"account" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"companyContributionList" => "PaycheckJournalCompanyContributionList",
    	"deductionList" => "PaycheckJournalDeductionList",
    	"employeeTaxList" => "PaycheckJournalEmployeeTaxList",
    	"companyTaxList" => "PaycheckJournalCompanyTaxList",
    	"earningList" => "PaycheckJournalEarningList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return PaycheckJournal
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return PaycheckJournal
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
     * @return PaycheckJournal
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
     * Set tranId
     *
     * @param string $tranId
     * @return PaycheckJournal
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return PaycheckJournal
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
     * Set companyContributionList
     *
     * @param PaycheckJournalCompanyContributionList $companyContributionList
     * @return PaycheckJournal
     */
    public function setCompanyContributionList(PaycheckJournalCompanyContributionList $companyContributionList) {
        $this->companyContributionList = $companyContributionList;
        return $this;
    }

    /**
     * Get companyContributionList
     *
     * @return PaycheckJournalCompanyContributionList
     */
    public function getCompanyContributionList() {
        return $this->companyContributionList;
    }


    /**
     * Set deductionList
     *
     * @param PaycheckJournalDeductionList $deductionList
     * @return PaycheckJournal
     */
    public function setDeductionList(PaycheckJournalDeductionList $deductionList) {
        $this->deductionList = $deductionList;
        return $this;
    }

    /**
     * Get deductionList
     *
     * @return PaycheckJournalDeductionList
     */
    public function getDeductionList() {
        return $this->deductionList;
    }


    /**
     * Set employeeTaxList
     *
     * @param PaycheckJournalEmployeeTaxList $employeeTaxList
     * @return PaycheckJournal
     */
    public function setEmployeeTaxList(PaycheckJournalEmployeeTaxList $employeeTaxList) {
        $this->employeeTaxList = $employeeTaxList;
        return $this;
    }

    /**
     * Get employeeTaxList
     *
     * @return PaycheckJournalEmployeeTaxList
     */
    public function getEmployeeTaxList() {
        return $this->employeeTaxList;
    }


    /**
     * Set companyTaxList
     *
     * @param PaycheckJournalCompanyTaxList $companyTaxList
     * @return PaycheckJournal
     */
    public function setCompanyTaxList(PaycheckJournalCompanyTaxList $companyTaxList) {
        $this->companyTaxList = $companyTaxList;
        return $this;
    }

    /**
     * Get companyTaxList
     *
     * @return PaycheckJournalCompanyTaxList
     */
    public function getCompanyTaxList() {
        return $this->companyTaxList;
    }


    /**
     * Set earningList
     *
     * @param PaycheckJournalEarningList $earningList
     * @return PaycheckJournal
     */
    public function setEarningList(PaycheckJournalEarningList $earningList) {
        $this->earningList = $earningList;
        return $this;
    }

    /**
     * Get earningList
     *
     * @return PaycheckJournalEarningList
     */
    public function getEarningList() {
        return $this->earningList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PaycheckJournal
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
     * @return PaycheckJournal
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
     * @return PaycheckJournal
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