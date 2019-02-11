<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * SubsidiarySearchBasic
 */
class SubsidiarySearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBook;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBookCurrency;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $country;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $fax;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isElimination;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $legalName;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $nameNoHierarchy;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phone;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $taxIdNum;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $tranPrefix;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $url;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $zip;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountingBook" => "SearchMultiSelectField",
    	"accountingBookCurrency" => "SearchMultiSelectField",
    	"address" => "SearchStringField",
    	"city" => "SearchStringField",
    	"country" => "SearchEnumMultiSelectField",
    	"currency" => "SearchMultiSelectField",
    	"email" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isElimination" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"legalName" => "SearchStringField",
    	"name" => "SearchStringField",
    	"nameNoHierarchy" => "SearchStringField",
    	"phone" => "SearchStringField",
    	"purchaseOrderAmount" => "SearchDoubleField",
    	"purchaseOrderQuantity" => "SearchDoubleField",
    	"purchaseOrderQuantityDiff" => "SearchDoubleField",
    	"receiptAmount" => "SearchDoubleField",
    	"receiptQuantity" => "SearchDoubleField",
    	"receiptQuantityDiff" => "SearchDoubleField",
    	"state" => "SearchStringField",
    	"taxIdNum" => "SearchStringField",
    	"tranPrefix" => "SearchStringField",
    	"url" => "SearchStringField",
    	"zip" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set accountingBook
     *
     * @param SearchMultiSelectField $accountingBook
     * @return SubsidiarySearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook) {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * Get accountingBook
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBook() {
        return $this->accountingBook;
    }


    /**
     * Set accountingBookCurrency
     *
     * @param SearchMultiSelectField $accountingBookCurrency
     * @return SubsidiarySearchBasic
     */
    public function setAccountingBookCurrency(SearchMultiSelectField $accountingBookCurrency) {
        $this->accountingBookCurrency = $accountingBookCurrency;
        return $this;
    }

    /**
     * Get accountingBookCurrency
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBookCurrency() {
        return $this->accountingBookCurrency;
    }


    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return SubsidiarySearchBasic
     */
    public function setAddress(SearchStringField $address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return SearchStringField
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return SubsidiarySearchBasic
     */
    public function setCity(SearchStringField $city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return SearchStringField
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return SubsidiarySearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return SubsidiarySearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return SubsidiarySearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return SubsidiarySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return SubsidiarySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set fax
     *
     * @param SearchStringField $fax
     * @return SubsidiarySearchBasic
     */
    public function setFax(SearchStringField $fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return SearchStringField
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return SubsidiarySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return SubsidiarySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isElimination
     *
     * @param SearchBooleanField $isElimination
     * @return SubsidiarySearchBasic
     */
    public function setIsElimination(SearchBooleanField $isElimination) {
        $this->isElimination = $isElimination;
        return $this;
    }

    /**
     * Get isElimination
     *
     * @return SearchBooleanField
     */
    public function getIsElimination() {
        return $this->isElimination;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return SubsidiarySearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set legalName
     *
     * @param SearchStringField $legalName
     * @return SubsidiarySearchBasic
     */
    public function setLegalName(SearchStringField $legalName) {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * Get legalName
     *
     * @return SearchStringField
     */
    public function getLegalName() {
        return $this->legalName;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return SubsidiarySearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set nameNoHierarchy
     *
     * @param SearchStringField $nameNoHierarchy
     * @return SubsidiarySearchBasic
     */
    public function setNameNoHierarchy(SearchStringField $nameNoHierarchy) {
        $this->nameNoHierarchy = $nameNoHierarchy;
        return $this;
    }

    /**
     * Get nameNoHierarchy
     *
     * @return SearchStringField
     */
    public function getNameNoHierarchy() {
        return $this->nameNoHierarchy;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return SubsidiarySearchBasic
     */
    public function setPhone(SearchStringField $phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return SearchStringField
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param SearchDoubleField $purchaseOrderAmount
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptAmount
     *
     * @param SearchDoubleField $receiptAmount
     * @return SubsidiarySearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return SearchDoubleField
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantity
     *
     * @param SearchDoubleField $receiptQuantity
     * @return SubsidiarySearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param SearchDoubleField $receiptQuantityDiff
     * @return SubsidiarySearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set state
     *
     * @param SearchStringField $state
     * @return SubsidiarySearchBasic
     */
    public function setState(SearchStringField $state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return SearchStringField
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set taxIdNum
     *
     * @param SearchStringField $taxIdNum
     * @return SubsidiarySearchBasic
     */
    public function setTaxIdNum(SearchStringField $taxIdNum) {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * Get taxIdNum
     *
     * @return SearchStringField
     */
    public function getTaxIdNum() {
        return $this->taxIdNum;
    }


    /**
     * Set tranPrefix
     *
     * @param SearchStringField $tranPrefix
     * @return SubsidiarySearchBasic
     */
    public function setTranPrefix(SearchStringField $tranPrefix) {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * Get tranPrefix
     *
     * @return SearchStringField
     */
    public function getTranPrefix() {
        return $this->tranPrefix;
    }


    /**
     * Set url
     *
     * @param SearchStringField $url
     * @return SubsidiarySearchBasic
     */
    public function setUrl(SearchStringField $url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return SearchStringField
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set zip
     *
     * @param SearchStringField $zip
     * @return SubsidiarySearchBasic
     */
    public function setZip(SearchStringField $zip) {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get zip
     *
     * @return SearchStringField
     */
    public function getZip() {
        return $this->zip;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return SubsidiarySearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}