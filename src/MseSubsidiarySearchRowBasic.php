<?php

namespace Nzolt\NetSuite;

class MseSubsidiarySearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnSelectField[] $accountingBookCurrency
     */
    protected $accountingBookCurrency = null;

    /**
     * @var SearchColumnStringField[] $address1
     */
    protected $address1 = null;

    /**
     * @var SearchColumnStringField[] $address2
     */
    protected $address2 = null;

    /**
     * @var SearchColumnStringField[] $address3
     */
    protected $address3 = null;

    /**
     * @var SearchColumnStringField[] $anonymousCustomerInboundEmail
     */
    protected $anonymousCustomerInboundEmail = null;

    /**
     * @var SearchColumnStringField[] $anonymousCustomerOnlineForms
     */
    protected $anonymousCustomerOnlineForms = null;

    /**
     * @var SearchColumnStringField[] $caseAssignmentTemplate
     */
    protected $caseAssignmentTemplate = null;

    /**
     * @var SearchColumnStringField[] $caseAutomaticClosureTemplate
     */
    protected $caseAutomaticClosureTemplate = null;

    /**
     * @var SearchColumnStringField[] $caseCopyEmployeeTemplate
     */
    protected $caseCopyEmployeeTemplate = null;

    /**
     * @var SearchColumnStringField[] $caseCreationTemplate
     */
    protected $caseCreationTemplate = null;

    /**
     * @var SearchColumnStringField[] $caseEscalationTemplate
     */
    protected $caseEscalationTemplate = null;

    /**
     * @var SearchColumnStringField[] $caseUpdateTemplate
     */
    protected $caseUpdateTemplate = null;

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnStringField[] $companyNameForSupportMessages
     */
    protected $companyNameForSupportMessages = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnDateField[] $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnStringField[] $employeeCaseUpdateTemplate
     */
    protected $employeeCaseUpdateTemplate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fax
     */
    protected $fax = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isElimination
     */
    protected $isElimination = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $legalName
     */
    protected $legalName = null;

    /**
     * @var SearchColumnStringField[] $mainSupportEmailAddress
     */
    protected $mainSupportEmailAddress = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $nameNoHierarchy
     */
    protected $nameNoHierarchy = null;

    /**
     * @var SearchColumnSelectField[] $nexus
     */
    protected $nexus = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnBooleanField[] $primary
     */
    protected $primary = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var SearchColumnDoubleField[] $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var SearchColumnDoubleField[] $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var SearchColumnStringField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnSelectField[] $taxEngine
     */
    protected $taxEngine = null;

    /**
     * @var SearchColumnStringField[] $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var SearchColumnStringField[] $taxRegistrationNumber
     */
    protected $taxRegistrationNumber = null;

    /**
     * @var SearchColumnStringField[] $tranPrefix
     */
    protected $tranPrefix = null;

    /**
     * @var SearchColumnStringField[] $url
     */
    protected $url = null;

    /**
     * @var SearchColumnDateField[] $validUntil
     */
    protected $validUntil = null;

    /**
     * @var SearchColumnStringField[] $zip
     */
    protected $zip = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookCurrency()
    {
      return $this->accountingBookCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookCurrency
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAccountingBookCurrency(array $accountingBookCurrency = null)
    {
      $this->accountingBookCurrency = $accountingBookCurrency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param SearchColumnStringField[] $address1
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAddress1(array $address1 = null)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param SearchColumnStringField[] $address2
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAddress2(array $address2 = null)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress3()
    {
      return $this->address3;
    }

    /**
     * @param SearchColumnStringField[] $address3
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAddress3(array $address3 = null)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAnonymousCustomerInboundEmail()
    {
      return $this->anonymousCustomerInboundEmail;
    }

    /**
     * @param SearchColumnStringField[] $anonymousCustomerInboundEmail
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerInboundEmail(array $anonymousCustomerInboundEmail = null)
    {
      $this->anonymousCustomerInboundEmail = $anonymousCustomerInboundEmail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAnonymousCustomerOnlineForms()
    {
      return $this->anonymousCustomerOnlineForms;
    }

    /**
     * @param SearchColumnStringField[] $anonymousCustomerOnlineForms
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerOnlineForms(array $anonymousCustomerOnlineForms = null)
    {
      $this->anonymousCustomerOnlineForms = $anonymousCustomerOnlineForms;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseAssignmentTemplate()
    {
      return $this->caseAssignmentTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseAssignmentTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseAssignmentTemplate(array $caseAssignmentTemplate = null)
    {
      $this->caseAssignmentTemplate = $caseAssignmentTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseAutomaticClosureTemplate()
    {
      return $this->caseAutomaticClosureTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseAutomaticClosureTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseAutomaticClosureTemplate(array $caseAutomaticClosureTemplate = null)
    {
      $this->caseAutomaticClosureTemplate = $caseAutomaticClosureTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseCopyEmployeeTemplate()
    {
      return $this->caseCopyEmployeeTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseCopyEmployeeTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseCopyEmployeeTemplate(array $caseCopyEmployeeTemplate = null)
    {
      $this->caseCopyEmployeeTemplate = $caseCopyEmployeeTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseCreationTemplate()
    {
      return $this->caseCreationTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseCreationTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseCreationTemplate(array $caseCreationTemplate = null)
    {
      $this->caseCreationTemplate = $caseCreationTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseEscalationTemplate()
    {
      return $this->caseEscalationTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseEscalationTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseEscalationTemplate(array $caseEscalationTemplate = null)
    {
      $this->caseEscalationTemplate = $caseEscalationTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseUpdateTemplate()
    {
      return $this->caseUpdateTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseUpdateTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCaseUpdateTemplate(array $caseUpdateTemplate = null)
    {
      $this->caseUpdateTemplate = $caseUpdateTemplate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCompanyNameForSupportMessages()
    {
      return $this->companyNameForSupportMessages;
    }

    /**
     * @param SearchColumnStringField[] $companyNameForSupportMessages
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCompanyNameForSupportMessages(array $companyNameForSupportMessages = null)
    {
      $this->companyNameForSupportMessages = $companyNameForSupportMessages;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveFrom()
    {
      return $this->effectiveFrom;
    }

    /**
     * @param SearchColumnDateField[] $effectiveFrom
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setEffectiveFrom(array $effectiveFrom = null)
    {
      $this->effectiveFrom = $effectiveFrom;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmployeeCaseUpdateTemplate()
    {
      return $this->employeeCaseUpdateTemplate;
    }

    /**
     * @param SearchColumnStringField[] $employeeCaseUpdateTemplate
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setEmployeeCaseUpdateTemplate(array $employeeCaseUpdateTemplate = null)
    {
      $this->employeeCaseUpdateTemplate = $employeeCaseUpdateTemplate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param SearchColumnStringField[] $fax
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setFax(array $fax = null)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsElimination()
    {
      return $this->isElimination;
    }

    /**
     * @param SearchColumnBooleanField[] $isElimination
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setIsElimination(array $isElimination = null)
    {
      $this->isElimination = $isElimination;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param SearchColumnStringField[] $legalName
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setLegalName(array $legalName = null)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMainSupportEmailAddress()
    {
      return $this->mainSupportEmailAddress;
    }

    /**
     * @param SearchColumnStringField[] $mainSupportEmailAddress
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setMainSupportEmailAddress(array $mainSupportEmailAddress = null)
    {
      $this->mainSupportEmailAddress = $mainSupportEmailAddress;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameNoHierarchy()
    {
      return $this->nameNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $nameNoHierarchy
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setNameNoHierarchy(array $nameNoHierarchy = null)
    {
      $this->nameNoHierarchy = $nameNoHierarchy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param SearchColumnSelectField[] $nexus
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setNexus(array $nexus = null)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setPhone(array $phone = null)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPrimary()
    {
      return $this->primary;
    }

    /**
     * @param SearchColumnBooleanField[] $primary
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setPrimary(array $primary = null)
    {
      $this->primary = $primary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderAmount(array $purchaseOrderAmount = null)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantity(array $purchaseOrderQuantity = null)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(array $purchaseOrderQuantityDiff = null)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptAmount
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setReceiptAmount(array $receiptAmount = null)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantity
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setReceiptQuantity(array $receiptQuantity = null)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantityDiff
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setReceiptQuantityDiff(array $receiptQuantityDiff = null)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchColumnStringField[] $state
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxEngine()
    {
      return $this->taxEngine;
    }

    /**
     * @param SearchColumnSelectField[] $taxEngine
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setTaxEngine(array $taxEngine = null)
    {
      $this->taxEngine = $taxEngine;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxIdNum()
    {
      return $this->taxIdNum;
    }

    /**
     * @param SearchColumnStringField[] $taxIdNum
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setTaxIdNum(array $taxIdNum = null)
    {
      $this->taxIdNum = $taxIdNum;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxRegistrationNumber()
    {
      return $this->taxRegistrationNumber;
    }

    /**
     * @param SearchColumnStringField[] $taxRegistrationNumber
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setTaxRegistrationNumber(array $taxRegistrationNumber = null)
    {
      $this->taxRegistrationNumber = $taxRegistrationNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranPrefix()
    {
      return $this->tranPrefix;
    }

    /**
     * @param SearchColumnStringField[] $tranPrefix
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setTranPrefix(array $tranPrefix = null)
    {
      $this->tranPrefix = $tranPrefix;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param SearchColumnStringField[] $url
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setUrl(array $url = null)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getValidUntil()
    {
      return $this->validUntil;
    }

    /**
     * @param SearchColumnDateField[] $validUntil
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setValidUntil(array $validUntil = null)
    {
      $this->validUntil = $validUntil;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setZip(array $zip = null)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\MseSubsidiarySearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
