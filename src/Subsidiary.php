<?php

namespace Nzolt\NetSuite;

class Subsidiary extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $showSubsidiaryName
     */
    protected $showSubsidiaryName = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var RecordRef $logo
     */
    protected $logo = null;

    /**
     * @var string $tranPrefix
     */
    protected $tranPrefix = null;

    /**
     * @var RecordRef $pageLogo
     */
    protected $pageLogo = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var Country $country
     */
    protected $country = null;

    /**
     * @var Address $mainAddress
     */
    protected $mainAddress = null;

    /**
     * @var Address $shippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var Address $returnAddress
     */
    protected $returnAddress = null;

    /**
     * @var string $legalName
     */
    protected $legalName = null;

    /**
     * @var boolean $isElimination
     */
    protected $isElimination = null;

    /**
     * @var RecordRef $fiscalCalendar
     */
    protected $fiscalCalendar = null;

    /**
     * @var RecordRef $taxFiscalCalendar
     */
    protected $taxFiscalCalendar = null;

    /**
     * @var boolean $allowPayroll
     */
    protected $allowPayroll = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var float $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var float $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var float $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var float $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var float $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $edition
     */
    protected $edition = null;

    /**
     * @var string $federalIdNumber
     */
    protected $federalIdNumber = null;

    /**
     * @var string $addrLanguage
     */
    protected $addrLanguage = null;

    /**
     * @var string $nonConsol
     */
    protected $nonConsol = null;

    /**
     * @var string $consol
     */
    protected $consol = null;

    /**
     * @var string $state1TaxNumber
     */
    protected $state1TaxNumber = null;

    /**
     * @var SubsidiaryTaxRegistrationList $taxRegistrationList
     */
    protected $taxRegistrationList = null;

    /**
     * @var string $ssnOrTin
     */
    protected $ssnOrTin = null;

    /**
     * @var RecordRef $interCoAccount
     */
    protected $interCoAccount = null;

    /**
     * @var SubsidiaryNexusList $nexusList
     */
    protected $nexusList = null;

    /**
     * @var SubsidiaryAccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var RecordRef $checkLayout
     */
    protected $checkLayout = null;

    /**
     * @var string $inboundEmail
     */
    protected $inboundEmail = null;

    /**
     * @var ClassTranslationList $classTranslationList
     */
    protected $classTranslationList = null;

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
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSubsidiaryName()
    {
      return $this->showSubsidiaryName;
    }

    /**
     * @param boolean $showSubsidiaryName
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setShowSubsidiaryName($showSubsidiaryName)
    {
      $this->showSubsidiaryName = $showSubsidiaryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param RecordRef $logo
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setLogo($logo)
    {
      $this->logo = $logo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranPrefix()
    {
      return $this->tranPrefix;
    }

    /**
     * @param string $tranPrefix
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setTranPrefix($tranPrefix)
    {
      $this->tranPrefix = $tranPrefix;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPageLogo()
    {
      return $this->pageLogo;
    }

    /**
     * @param RecordRef $pageLogo
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setPageLogo($pageLogo)
    {
      $this->pageLogo = $pageLogo;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param Country $country
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return Address
     */
    public function getMainAddress()
    {
      return $this->mainAddress;
    }

    /**
     * @param Address $mainAddress
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setMainAddress($mainAddress)
    {
      $this->mainAddress = $mainAddress;
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
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setShippingAddress($shippingAddress)
    {
      $this->shippingAddress = $shippingAddress;
      return $this;
    }

    /**
     * @return Address
     */
    public function getReturnAddress()
    {
      return $this->returnAddress;
    }

    /**
     * @param Address $returnAddress
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setReturnAddress($returnAddress)
    {
      $this->returnAddress = $returnAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsElimination()
    {
      return $this->isElimination;
    }

    /**
     * @param boolean $isElimination
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setIsElimination($isElimination)
    {
      $this->isElimination = $isElimination;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar()
    {
      return $this->fiscalCalendar;
    }

    /**
     * @param RecordRef $fiscalCalendar
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setFiscalCalendar($fiscalCalendar)
    {
      $this->fiscalCalendar = $fiscalCalendar;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxFiscalCalendar()
    {
      return $this->taxFiscalCalendar;
    }

    /**
     * @param RecordRef $taxFiscalCalendar
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setTaxFiscalCalendar($taxFiscalCalendar)
    {
      $this->taxFiscalCalendar = $taxFiscalCalendar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPayroll()
    {
      return $this->allowPayroll;
    }

    /**
     * @param boolean $allowPayroll
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setAllowPayroll($allowPayroll)
    {
      $this->allowPayroll = $allowPayroll;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param float $receiptQuantity
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param float $receiptAmount
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdition()
    {
      return $this->edition;
    }

    /**
     * @param string $edition
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setEdition($edition)
    {
      $this->edition = $edition;
      return $this;
    }

    /**
     * @return string
     */
    public function getFederalIdNumber()
    {
      return $this->federalIdNumber;
    }

    /**
     * @param string $federalIdNumber
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setFederalIdNumber($federalIdNumber)
    {
      $this->federalIdNumber = $federalIdNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddrLanguage()
    {
      return $this->addrLanguage;
    }

    /**
     * @param string $addrLanguage
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setAddrLanguage($addrLanguage)
    {
      $this->addrLanguage = $addrLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonConsol()
    {
      return $this->nonConsol;
    }

    /**
     * @param string $nonConsol
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setNonConsol($nonConsol)
    {
      $this->nonConsol = $nonConsol;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsol()
    {
      return $this->consol;
    }

    /**
     * @param string $consol
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setConsol($consol)
    {
      $this->consol = $consol;
      return $this;
    }

    /**
     * @return string
     */
    public function getState1TaxNumber()
    {
      return $this->state1TaxNumber;
    }

    /**
     * @param string $state1TaxNumber
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setState1TaxNumber($state1TaxNumber)
    {
      $this->state1TaxNumber = $state1TaxNumber;
      return $this;
    }

    /**
     * @return SubsidiaryTaxRegistrationList
     */
    public function getTaxRegistrationList()
    {
      return $this->taxRegistrationList;
    }

    /**
     * @param SubsidiaryTaxRegistrationList $taxRegistrationList
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setTaxRegistrationList($taxRegistrationList)
    {
      $this->taxRegistrationList = $taxRegistrationList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSsnOrTin()
    {
      return $this->ssnOrTin;
    }

    /**
     * @param string $ssnOrTin
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setSsnOrTin($ssnOrTin)
    {
      $this->ssnOrTin = $ssnOrTin;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInterCoAccount()
    {
      return $this->interCoAccount;
    }

    /**
     * @param RecordRef $interCoAccount
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setInterCoAccount($interCoAccount)
    {
      $this->interCoAccount = $interCoAccount;
      return $this;
    }

    /**
     * @return SubsidiaryNexusList
     */
    public function getNexusList()
    {
      return $this->nexusList;
    }

    /**
     * @param SubsidiaryNexusList $nexusList
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setNexusList($nexusList)
    {
      $this->nexusList = $nexusList;
      return $this;
    }

    /**
     * @return SubsidiaryAccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param SubsidiaryAccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCheckLayout()
    {
      return $this->checkLayout;
    }

    /**
     * @param RecordRef $checkLayout
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setCheckLayout($checkLayout)
    {
      $this->checkLayout = $checkLayout;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundEmail()
    {
      return $this->inboundEmail;
    }

    /**
     * @param string $inboundEmail
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setInboundEmail($inboundEmail)
    {
      $this->inboundEmail = $inboundEmail;
      return $this;
    }

    /**
     * @return ClassTranslationList
     */
    public function getClassTranslationList()
    {
      return $this->classTranslationList;
    }

    /**
     * @param ClassTranslationList $classTranslationList
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setClassTranslationList($classTranslationList)
    {
      $this->classTranslationList = $classTranslationList;
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
     * @return \Nzolt\NetSuite\Subsidiary
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
     * @return \Nzolt\NetSuite\Subsidiary
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
     * @return \Nzolt\NetSuite\Subsidiary
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
