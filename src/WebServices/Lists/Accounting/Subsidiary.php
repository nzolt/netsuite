<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Subsidiary
 */
class Subsidiary extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $showSubsidiaryName;

    /**
     * @access public
     * @var string
     */
    protected $url;

    /**
     * @access public
     * @var RecordRef
     */
    public $logo;

    /**
     * @access public
     * @var string
     */
    protected $tranPrefix;

    /**
     * @access public
     * @var RecordRef
     */
    public $pageLogo;

    /**
     * @access public
     * @var string
     */
    protected $state;

    /**
     * @access public
     * @var Country
     */
    protected $country;

    /**
     * @access public
     * @var Address
     */
    protected $mainAddress;

    /**
     * @access public
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @access public
     * @var Address
     */
    protected $returnAddress;

    /**
     * @access public
     * @var string
     */
    protected $legalName;

    /**
     * @access public
     * @var boolean
     */
    protected $isElimination;

    /**
     * @access public
     * @var RecordRef
     */
    public $fiscalCalendar;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxFiscalCalendar;

    /**
     * @access public
     * @var boolean
     */
    protected $allowPayroll;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var float
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var string
     */
    protected $fax;

    /**
     * @access public
     * @var string
     */
    protected $edition;

    /**
     * @access public
     * @var string
     */
    protected $federalIdNumber;

    /**
     * @access public
     * @var string
     */
    protected $addrLanguage;

    /**
     * @access public
     * @var string
     */
    protected $nonConsol;

    /**
     * @access public
     * @var string
     */
    protected $consol;

    /**
     * @access public
     * @var string
     */
    protected $state1TaxNumber;

    /**
     * @access public
     * @var string
     */
    protected $ssnOrTin;

    /**
     * @access public
     * @var RecordRef
     */
    public $interCoAccount;

    /**
     * @access public
     * @var SubsidiaryNexusList
     */
    protected $nexusList;

    /**
     * @access public
     * @var SubsidiaryAccountingBookDetailList
     */
    protected $accountingBookDetailList;

    /**
     * @access public
     * @var RecordRef
     */
    public $checkLayout;

    /**
     * @access public
     * @var string
     */
    protected $inboundEmail;

    /**
     * @access public
     * @var ClassTranslationList
     */
    protected $classTranslationList;

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
    	"name" => "string",
    	"parent" => "RecordRef",
    	"isInactive" => "boolean",
    	"showSubsidiaryName" => "boolean",
    	"url" => "string",
    	"logo" => "RecordRef",
    	"tranPrefix" => "string",
    	"pageLogo" => "RecordRef",
    	"state" => "string",
    	"country" => "Country",
    	"mainAddress" => "Address",
    	"shippingAddress" => "Address",
    	"returnAddress" => "Address",
    	"legalName" => "string",
    	"isElimination" => "boolean",
    	"fiscalCalendar" => "RecordRef",
    	"taxFiscalCalendar" => "RecordRef",
    	"allowPayroll" => "boolean",
    	"email" => "string",
    	"currency" => "RecordRef",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"fax" => "string",
    	"edition" => "string",
    	"federalIdNumber" => "string",
    	"addrLanguage" => "string",
    	"nonConsol" => "string",
    	"consol" => "string",
    	"state1TaxNumber" => "string",
    	"ssnOrTin" => "string",
    	"interCoAccount" => "RecordRef",
    	"nexusList" => "SubsidiaryNexusList",
    	"accountingBookDetailList" => "SubsidiaryAccountingBookDetailList",
    	"checkLayout" => "RecordRef",
    	"inboundEmail" => "string",
    	"classTranslationList" => "ClassTranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Subsidiary
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Subsidiary
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set showSubsidiaryName
     *
     * @param boolean $showSubsidiaryName
     * @return Subsidiary
     */
    public function setShowSubsidiaryName($showSubsidiaryName) {
        $this->showSubsidiaryName = $showSubsidiaryName;
        return $this;
    }

    /**
     * Get showSubsidiaryName
     *
     * @return boolean
     */
    public function getShowSubsidiaryName() {
        return $this->showSubsidiaryName;
    }


    /**
     * Set url
     *
     * @param string $url
     * @return Subsidiary
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set tranPrefix
     *
     * @param string $tranPrefix
     * @return Subsidiary
     */
    public function setTranPrefix($tranPrefix) {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * Get tranPrefix
     *
     * @return string
     */
    public function getTranPrefix() {
        return $this->tranPrefix;
    }


    /**
     * Set state
     *
     * @param string $state
     * @return Subsidiary
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set country
     *
     * @param Country $country
     * @return Subsidiary
     */
    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set mainAddress
     *
     * @param Address $mainAddress
     * @return Subsidiary
     */
    public function setMainAddress(Address $mainAddress) {
        $this->mainAddress = $mainAddress;
        return $this;
    }

    /**
     * Get mainAddress
     *
     * @return Address
     */
    public function getMainAddress() {
        return $this->mainAddress;
    }


    /**
     * Set shippingAddress
     *
     * @param Address $shippingAddress
     * @return Subsidiary
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
     * Set returnAddress
     *
     * @param Address $returnAddress
     * @return Subsidiary
     */
    public function setReturnAddress(Address $returnAddress) {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * Get returnAddress
     *
     * @return Address
     */
    public function getReturnAddress() {
        return $this->returnAddress;
    }


    /**
     * Set legalName
     *
     * @param string $legalName
     * @return Subsidiary
     */
    public function setLegalName($legalName) {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * Get legalName
     *
     * @return string
     */
    public function getLegalName() {
        return $this->legalName;
    }


    /**
     * Set isElimination
     *
     * @param boolean $isElimination
     * @return Subsidiary
     */
    public function setIsElimination($isElimination) {
        $this->isElimination = $isElimination;
        return $this;
    }

    /**
     * Get isElimination
     *
     * @return boolean
     */
    public function getIsElimination() {
        return $this->isElimination;
    }


    /**
     * Set allowPayroll
     *
     * @param boolean $allowPayroll
     * @return Subsidiary
     */
    public function setAllowPayroll($allowPayroll) {
        $this->allowPayroll = $allowPayroll;
        return $this;
    }

    /**
     * Get allowPayroll
     *
     * @return boolean
     */
    public function getAllowPayroll() {
        return $this->allowPayroll;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return Subsidiary
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
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return Subsidiary
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return float
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param float $purchaseOrderAmount
     * @return Subsidiary
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return float
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param float $purchaseOrderQuantityDiff
     * @return Subsidiary
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return float
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptQuantity
     *
     * @param float $receiptQuantity
     * @return Subsidiary
     */
    public function setReceiptQuantity($receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return float
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptAmount
     *
     * @param float $receiptAmount
     * @return Subsidiary
     */
    public function setReceiptAmount($receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return float
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param float $receiptQuantityDiff
     * @return Subsidiary
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return float
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set fax
     *
     * @param string $fax
     * @return Subsidiary
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
     * Set edition
     *
     * @param string $edition
     * @return Subsidiary
     */
    public function setEdition($edition) {
        $this->edition = $edition;
        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition() {
        return $this->edition;
    }


    /**
     * Set federalIdNumber
     *
     * @param string $federalIdNumber
     * @return Subsidiary
     */
    public function setFederalIdNumber($federalIdNumber) {
        $this->federalIdNumber = $federalIdNumber;
        return $this;
    }

    /**
     * Get federalIdNumber
     *
     * @return string
     */
    public function getFederalIdNumber() {
        return $this->federalIdNumber;
    }


    /**
     * Set addrLanguage
     *
     * @param string $addrLanguage
     * @return Subsidiary
     */
    public function setAddrLanguage($addrLanguage) {
        $this->addrLanguage = $addrLanguage;
        return $this;
    }

    /**
     * Get addrLanguage
     *
     * @return string
     */
    public function getAddrLanguage() {
        return $this->addrLanguage;
    }


    /**
     * Set nonConsol
     *
     * @param string $nonConsol
     * @return Subsidiary
     */
    public function setNonConsol($nonConsol) {
        $this->nonConsol = $nonConsol;
        return $this;
    }

    /**
     * Get nonConsol
     *
     * @return string
     */
    public function getNonConsol() {
        return $this->nonConsol;
    }


    /**
     * Set consol
     *
     * @param string $consol
     * @return Subsidiary
     */
    public function setConsol($consol) {
        $this->consol = $consol;
        return $this;
    }

    /**
     * Get consol
     *
     * @return string
     */
    public function getConsol() {
        return $this->consol;
    }


    /**
     * Set state1TaxNumber
     *
     * @param string $state1TaxNumber
     * @return Subsidiary
     */
    public function setState1TaxNumber($state1TaxNumber) {
        $this->state1TaxNumber = $state1TaxNumber;
        return $this;
    }

    /**
     * Get state1TaxNumber
     *
     * @return string
     */
    public function getState1TaxNumber() {
        return $this->state1TaxNumber;
    }


    /**
     * Set ssnOrTin
     *
     * @param string $ssnOrTin
     * @return Subsidiary
     */
    public function setSsnOrTin($ssnOrTin) {
        $this->ssnOrTin = $ssnOrTin;
        return $this;
    }

    /**
     * Get ssnOrTin
     *
     * @return string
     */
    public function getSsnOrTin() {
        return $this->ssnOrTin;
    }


    /**
     * Set nexusList
     *
     * @param SubsidiaryNexusList $nexusList
     * @return Subsidiary
     */
    public function setNexusList(SubsidiaryNexusList $nexusList) {
        $this->nexusList = $nexusList;
        return $this;
    }

    /**
     * Get nexusList
     *
     * @return SubsidiaryNexusList
     */
    public function getNexusList() {
        return $this->nexusList;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param SubsidiaryAccountingBookDetailList $accountingBookDetailList
     * @return Subsidiary
     */
    public function setAccountingBookDetailList(SubsidiaryAccountingBookDetailList $accountingBookDetailList) {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * Get accountingBookDetailList
     *
     * @return SubsidiaryAccountingBookDetailList
     */
    public function getAccountingBookDetailList() {
        return $this->accountingBookDetailList;
    }


    /**
     * Set inboundEmail
     *
     * @param string $inboundEmail
     * @return Subsidiary
     */
    public function setInboundEmail($inboundEmail) {
        $this->inboundEmail = $inboundEmail;
        return $this;
    }

    /**
     * Get inboundEmail
     *
     * @return string
     */
    public function getInboundEmail() {
        return $this->inboundEmail;
    }


    /**
     * Set classTranslationList
     *
     * @param ClassTranslationList $classTranslationList
     * @return Subsidiary
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList) {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * Get classTranslationList
     *
     * @return ClassTranslationList
     */
    public function getClassTranslationList() {
        return $this->classTranslationList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Subsidiary
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
     * @return Subsidiary
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
     * @return Subsidiary
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