<?php

namespace Nzolt\NetSuite;

class SubsidiarySearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchMultiSelectField $accountingBookCurrency
     */
    protected $accountingBookCurrency = null;

    /**
     * @var SearchStringField $address
     */
    protected $address = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchDateField $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchStringField $fax
     */
    protected $fax = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isElimination
     */
    protected $isElimination = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchStringField $legalName
     */
    protected $legalName = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchStringField $nameNoHierarchy
     */
    protected $nameNoHierarchy = null;

    /**
     * @var SearchMultiSelectField $nexus
     */
    protected $nexus = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchDoubleField $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var SearchDoubleField $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var SearchDoubleField $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var SearchDoubleField $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var SearchDoubleField $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var SearchDoubleField $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $taxEngine
     */
    protected $taxEngine = null;

    /**
     * @var SearchStringField $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var SearchStringField $taxRegistrationNumber
     */
    protected $taxRegistrationNumber = null;

    /**
     * @var SearchStringField $tranPrefix
     */
    protected $tranPrefix = null;

    /**
     * @var SearchStringField $url
     */
    protected $url = null;

    /**
     * @var SearchDateField $validUntil
     */
    protected $validUntil = null;

    /**
     * @var SearchStringField $zip
     */
    protected $zip = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookCurrency()
    {
      return $this->accountingBookCurrency;
    }

    /**
     * @param SearchMultiSelectField $accountingBookCurrency
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setAccountingBookCurrency($accountingBookCurrency)
    {
      $this->accountingBookCurrency = $accountingBookCurrency;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchStringField $address
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchStringField $city
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveFrom()
    {
      return $this->effectiveFrom;
    }

    /**
     * @param SearchDateField $effectiveFrom
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setEffectiveFrom($effectiveFrom)
    {
      $this->effectiveFrom = $effectiveFrom;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchStringField $email
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param SearchStringField $fax
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsElimination()
    {
      return $this->isElimination;
    }

    /**
     * @param SearchBooleanField $isElimination
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setIsElimination($isElimination)
    {
      $this->isElimination = $isElimination;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param SearchStringField $legalName
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameNoHierarchy()
    {
      return $this->nameNoHierarchy;
    }

    /**
     * @param SearchStringField $nameNoHierarchy
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setNameNoHierarchy($nameNoHierarchy)
    {
      $this->nameNoHierarchy = $nameNoHierarchy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param SearchMultiSelectField $nexus
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchStringField $phone
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchDoubleField $purchaseOrderAmount
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param SearchDoubleField $receiptAmount
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param SearchDoubleField $receiptQuantity
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchDoubleField $receiptQuantityDiff
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchStringField $state
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxEngine()
    {
      return $this->taxEngine;
    }

    /**
     * @param SearchMultiSelectField $taxEngine
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setTaxEngine($taxEngine)
    {
      $this->taxEngine = $taxEngine;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxIdNum()
    {
      return $this->taxIdNum;
    }

    /**
     * @param SearchStringField $taxIdNum
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setTaxIdNum($taxIdNum)
    {
      $this->taxIdNum = $taxIdNum;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxRegistrationNumber()
    {
      return $this->taxRegistrationNumber;
    }

    /**
     * @param SearchStringField $taxRegistrationNumber
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setTaxRegistrationNumber($taxRegistrationNumber)
    {
      $this->taxRegistrationNumber = $taxRegistrationNumber;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranPrefix()
    {
      return $this->tranPrefix;
    }

    /**
     * @param SearchStringField $tranPrefix
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setTranPrefix($tranPrefix)
    {
      $this->tranPrefix = $tranPrefix;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param SearchStringField $url
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getValidUntil()
    {
      return $this->validUntil;
    }

    /**
     * @param SearchDateField $validUntil
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setValidUntil($validUntil)
    {
      $this->validUntil = $validUntil;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchStringField $zip
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\SubsidiarySearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
