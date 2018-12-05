<?php

namespace Nzolt\NetSuite;

class JobSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var SearchColumnDoubleField[] $actualTime
     */
    protected $actualTime = null;

    /**
     * @var SearchColumnStringField[] $address
     */
    protected $address = null;

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
     * @var SearchColumnStringField[] $addressee
     */
    protected $addressee = null;

    /**
     * @var SearchColumnStringField[] $addressInternalId
     */
    protected $addressInternalId = null;

    /**
     * @var SearchColumnStringField[] $addressLabel
     */
    protected $addressLabel = null;

    /**
     * @var SearchColumnStringField[] $addressPhone
     */
    protected $addressPhone = null;

    /**
     * @var SearchColumnBooleanField[] $allocatePayrollExpenses
     */
    protected $allocatePayrollExpenses = null;

    /**
     * @var SearchColumnBooleanField[] $allowAllResourcesForTasks
     */
    protected $allowAllResourcesForTasks = null;

    /**
     * @var SearchColumnBooleanField[] $allowExpenses
     */
    protected $allowExpenses = null;

    /**
     * @var SearchColumnBooleanField[] $allowTime
     */
    protected $allowTime = null;

    /**
     * @var SearchColumnStringField[] $altContact
     */
    protected $altContact = null;

    /**
     * @var SearchColumnStringField[] $altEmail
     */
    protected $altEmail = null;

    /**
     * @var SearchColumnStringField[] $altName
     */
    protected $altName = null;

    /**
     * @var SearchColumnStringField[] $altPhone
     */
    protected $altPhone = null;

    /**
     * @var SearchColumnStringField[] $attention
     */
    protected $attention = null;

    /**
     * @var SearchColumnStringField[] $billAddress1
     */
    protected $billAddress1 = null;

    /**
     * @var SearchColumnStringField[] $billAddress2
     */
    protected $billAddress2 = null;

    /**
     * @var SearchColumnStringField[] $billAddress3
     */
    protected $billAddress3 = null;

    /**
     * @var SearchColumnStringField[] $billAddressee
     */
    protected $billAddressee = null;

    /**
     * @var SearchColumnStringField[] $billAttention
     */
    protected $billAttention = null;

    /**
     * @var SearchColumnStringField[] $billCity
     */
    protected $billCity = null;

    /**
     * @var SearchColumnEnumSelectField[] $billCountry
     */
    protected $billCountry = null;

    /**
     * @var SearchColumnStringField[] $billCountryCode
     */
    protected $billCountryCode = null;

    /**
     * @var SearchColumnSelectField[] $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchColumnStringField[] $billPhone
     */
    protected $billPhone = null;

    /**
     * @var SearchColumnStringField[] $billState
     */
    protected $billState = null;

    /**
     * @var SearchColumnStringField[] $billZipCode
     */
    protected $billZipCode = null;

    /**
     * @var SearchColumnDateField[] $calculatedEndDate
     */
    protected $calculatedEndDate = null;

    /**
     * @var SearchColumnDateField[] $calculatedEndDateBaseline
     */
    protected $calculatedEndDateBaseline = null;

    /**
     * @var SearchColumnSelectField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnStringField[] $comments
     */
    protected $comments = null;

    /**
     * @var SearchColumnStringField[] $companyName
     */
    protected $companyName = null;

    /**
     * @var SearchColumnStringField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnStringField[] $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchColumnLongField[] $entityNumber
     */
    protected $entityNumber = null;

    /**
     * @var SearchColumnSelectField[] $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedCost
     */
    protected $estimatedCost = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedGrossProfit
     */
    protected $estimatedGrossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedGrossProfitPercent
     */
    protected $estimatedGrossProfitPercent = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedLaborCost
     */
    protected $estimatedLaborCost = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedLaborCostBaseline
     */
    protected $estimatedLaborCostBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedLaborRevenue
     */
    protected $estimatedLaborRevenue = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedRevenue
     */
    protected $estimatedRevenue = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedTimeOverrideBaseline
     */
    protected $estimatedTimeOverrideBaseline = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fax
     */
    protected $fax = null;

    /**
     * @var SearchColumnEnumSelectField[] $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var SearchColumnSelectField[] $image
     */
    protected $image = null;

    /**
     * @var SearchColumnBooleanField[] $includeCrmTasksInTotals
     */
    protected $includeCrmTasksInTotals = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isDefaultBilling
     */
    protected $isDefaultBilling = null;

    /**
     * @var SearchColumnBooleanField[] $isDefaultShipping
     */
    protected $isDefaultShipping = null;

    /**
     * @var SearchColumnBooleanField[] $isExemptTime
     */
    protected $isExemptTime = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isProductiveTime
     */
    protected $isProductiveTime = null;

    /**
     * @var SearchColumnBooleanField[] $isUtilizedTime
     */
    protected $isUtilizedTime = null;

    /**
     * @var SearchColumnEnumSelectField[] $jobBillingType
     */
    protected $jobBillingType = null;

    /**
     * @var SearchColumnSelectField[] $jobItem
     */
    protected $jobItem = null;

    /**
     * @var SearchColumnDoubleField[] $jobPrice
     */
    protected $jobPrice = null;

    /**
     * @var SearchColumnSelectField[] $jobResource
     */
    protected $jobResource = null;

    /**
     * @var SearchColumnSelectField[] $jobResourceRole
     */
    protected $jobResourceRole = null;

    /**
     * @var SearchColumnEnumSelectField[] $language
     */
    protected $language = null;

    /**
     * @var SearchColumnDateField[] $lastBaselineDate
     */
    protected $lastBaselineDate = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $level
     */
    protected $level = null;

    /**
     * @var SearchColumnBooleanField[] $limitTimeToAssignees
     */
    protected $limitTimeToAssignees = null;

    /**
     * @var SearchColumnBooleanField[] $materializeTime
     */
    protected $materializeTime = null;

    /**
     * @var SearchColumnDoubleField[] $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var SearchColumnDoubleField[] $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var SearchColumnEnumSelectField[] $permission
     */
    protected $permission = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnStringField[] $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var SearchColumnDateField[] $projectedEndDate
     */
    protected $projectedEndDate = null;

    /**
     * @var SearchColumnDateField[] $projectedEndDateBaseline
     */
    protected $projectedEndDateBaseline = null;

    /**
     * @var SearchColumnSelectField[] $projectExpenseType
     */
    protected $projectExpenseType = null;

    /**
     * @var SearchColumnSelectField[] $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var SearchColumnStringField[] $shipAddress1
     */
    protected $shipAddress1 = null;

    /**
     * @var SearchColumnStringField[] $shipAddress2
     */
    protected $shipAddress2 = null;

    /**
     * @var SearchColumnStringField[] $shipAddress3
     */
    protected $shipAddress3 = null;

    /**
     * @var SearchColumnStringField[] $shipAddressee
     */
    protected $shipAddressee = null;

    /**
     * @var SearchColumnStringField[] $shipAttention
     */
    protected $shipAttention = null;

    /**
     * @var SearchColumnStringField[] $shipCity
     */
    protected $shipCity = null;

    /**
     * @var SearchColumnEnumSelectField[] $shipCountry
     */
    protected $shipCountry = null;

    /**
     * @var SearchColumnStringField[] $shipCountryCode
     */
    protected $shipCountryCode = null;

    /**
     * @var SearchColumnStringField[] $shipPhone
     */
    protected $shipPhone = null;

    /**
     * @var SearchColumnStringField[] $shipState
     */
    protected $shipState = null;

    /**
     * @var SearchColumnStringField[] $shipZip
     */
    protected $shipZip = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnDateField[] $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var SearchColumnStringField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnSelectField[] $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchColumnDateField[] $subscriptionDate
     */
    protected $subscriptionDate = null;

    /**
     * @var SearchColumnBooleanField[] $subscriptionStatus
     */
    protected $subscriptionStatus = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnDoubleField[] $timeRemaining
     */
    protected $timeRemaining = null;

    /**
     * @var SearchColumnBooleanField[] $usePercentCompleteOverride
     */
    protected $usePercentCompleteOverride = null;

    /**
     * @var SearchColumnStringField[] $zipCode
     */
    protected $zipCode = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param SearchColumnStringField[] $accountNumber
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAccountNumber(array $accountNumber = null)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param SearchColumnDoubleField[] $actualTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setActualTime(array $actualTime = null)
    {
      $this->actualTime = $actualTime;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchColumnStringField[] $address
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddress(array $address = null)
    {
      $this->address = $address;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddress3(array $address3 = null)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressee()
    {
      return $this->addressee;
    }

    /**
     * @param SearchColumnStringField[] $addressee
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddressee(array $addressee = null)
    {
      $this->addressee = $addressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressInternalId()
    {
      return $this->addressInternalId;
    }

    /**
     * @param SearchColumnStringField[] $addressInternalId
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddressInternalId(array $addressInternalId = null)
    {
      $this->addressInternalId = $addressInternalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressLabel()
    {
      return $this->addressLabel;
    }

    /**
     * @param SearchColumnStringField[] $addressLabel
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddressLabel(array $addressLabel = null)
    {
      $this->addressLabel = $addressLabel;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressPhone()
    {
      return $this->addressPhone;
    }

    /**
     * @param SearchColumnStringField[] $addressPhone
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAddressPhone(array $addressPhone = null)
    {
      $this->addressPhone = $addressPhone;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllocatePayrollExpenses()
    {
      return $this->allocatePayrollExpenses;
    }

    /**
     * @param SearchColumnBooleanField[] $allocatePayrollExpenses
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAllocatePayrollExpenses(array $allocatePayrollExpenses = null)
    {
      $this->allocatePayrollExpenses = $allocatePayrollExpenses;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowAllResourcesForTasks()
    {
      return $this->allowAllResourcesForTasks;
    }

    /**
     * @param SearchColumnBooleanField[] $allowAllResourcesForTasks
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAllowAllResourcesForTasks(array $allowAllResourcesForTasks = null)
    {
      $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowExpenses()
    {
      return $this->allowExpenses;
    }

    /**
     * @param SearchColumnBooleanField[] $allowExpenses
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAllowExpenses(array $allowExpenses = null)
    {
      $this->allowExpenses = $allowExpenses;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowTime()
    {
      return $this->allowTime;
    }

    /**
     * @param SearchColumnBooleanField[] $allowTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAllowTime(array $allowTime = null)
    {
      $this->allowTime = $allowTime;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltContact()
    {
      return $this->altContact;
    }

    /**
     * @param SearchColumnStringField[] $altContact
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAltContact(array $altContact = null)
    {
      $this->altContact = $altContact;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltEmail()
    {
      return $this->altEmail;
    }

    /**
     * @param SearchColumnStringField[] $altEmail
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAltEmail(array $altEmail = null)
    {
      $this->altEmail = $altEmail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltName()
    {
      return $this->altName;
    }

    /**
     * @param SearchColumnStringField[] $altName
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAltName(array $altName = null)
    {
      $this->altName = $altName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltPhone()
    {
      return $this->altPhone;
    }

    /**
     * @param SearchColumnStringField[] $altPhone
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAltPhone(array $altPhone = null)
    {
      $this->altPhone = $altPhone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAttention()
    {
      return $this->attention;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setAttention(array $attention = null)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress1()
    {
      return $this->billAddress1;
    }

    /**
     * @param SearchColumnStringField[] $billAddress1
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillAddress1(array $billAddress1 = null)
    {
      $this->billAddress1 = $billAddress1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress2()
    {
      return $this->billAddress2;
    }

    /**
     * @param SearchColumnStringField[] $billAddress2
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillAddress2(array $billAddress2 = null)
    {
      $this->billAddress2 = $billAddress2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress3()
    {
      return $this->billAddress3;
    }

    /**
     * @param SearchColumnStringField[] $billAddress3
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillAddress3(array $billAddress3 = null)
    {
      $this->billAddress3 = $billAddress3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddressee()
    {
      return $this->billAddressee;
    }

    /**
     * @param SearchColumnStringField[] $billAddressee
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillAddressee(array $billAddressee = null)
    {
      $this->billAddressee = $billAddressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAttention()
    {
      return $this->billAttention;
    }

    /**
     * @param SearchColumnStringField[] $billAttention
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillAttention(array $billAttention = null)
    {
      $this->billAttention = $billAttention;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCity()
    {
      return $this->billCity;
    }

    /**
     * @param SearchColumnStringField[] $billCity
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillCity(array $billCity = null)
    {
      $this->billCity = $billCity;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillCountry()
    {
      return $this->billCountry;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billCountry
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillCountry(array $billCountry = null)
    {
      $this->billCountry = $billCountry;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCountryCode()
    {
      return $this->billCountryCode;
    }

    /**
     * @param SearchColumnStringField[] $billCountryCode
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillCountryCode(array $billCountryCode = null)
    {
      $this->billCountryCode = $billCountryCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillingSchedule(array $billingSchedule = null)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillPhone()
    {
      return $this->billPhone;
    }

    /**
     * @param SearchColumnStringField[] $billPhone
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillPhone(array $billPhone = null)
    {
      $this->billPhone = $billPhone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillState()
    {
      return $this->billState;
    }

    /**
     * @param SearchColumnStringField[] $billState
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillState(array $billState = null)
    {
      $this->billState = $billState;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillZipCode()
    {
      return $this->billZipCode;
    }

    /**
     * @param SearchColumnStringField[] $billZipCode
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setBillZipCode(array $billZipCode = null)
    {
      $this->billZipCode = $billZipCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCalculatedEndDate()
    {
      return $this->calculatedEndDate;
    }

    /**
     * @param SearchColumnDateField[] $calculatedEndDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCalculatedEndDate(array $calculatedEndDate = null)
    {
      $this->calculatedEndDate = $calculatedEndDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCalculatedEndDateBaseline()
    {
      return $this->calculatedEndDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $calculatedEndDateBaseline
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCalculatedEndDateBaseline(array $calculatedEndDateBaseline = null)
    {
      $this->calculatedEndDateBaseline = $calculatedEndDateBaseline;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param SearchColumnStringField[] $comments
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param SearchColumnStringField[] $companyName
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCompanyName(array $companyName = null)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchColumnStringField[] $contact
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param SearchColumnStringField[] $countryCode
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param SearchColumnStringField[] $entityId
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEntityId(array $entityId = null)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getEntityNumber()
    {
      return $this->entityNumber;
    }

    /**
     * @param SearchColumnLongField[] $entityNumber
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEntityNumber(array $entityNumber = null)
    {
      $this->entityNumber = $entityNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEntityStatus(array $entityStatus = null)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedCost()
    {
      return $this->estimatedCost;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedCost
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedCost(array $estimatedCost = null)
    {
      $this->estimatedCost = $estimatedCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedGrossProfit()
    {
      return $this->estimatedGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedGrossProfit
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedGrossProfit(array $estimatedGrossProfit = null)
    {
      $this->estimatedGrossProfit = $estimatedGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedGrossProfitPercent()
    {
      return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedGrossProfitPercent
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedGrossProfitPercent(array $estimatedGrossProfitPercent = null)
    {
      $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborCost()
    {
      return $this->estimatedLaborCost;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborCost
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedLaborCost(array $estimatedLaborCost = null)
    {
      $this->estimatedLaborCost = $estimatedLaborCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborCostBaseline()
    {
      return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborCostBaseline
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedLaborCostBaseline(array $estimatedLaborCostBaseline = null)
    {
      $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborRevenue()
    {
      return $this->estimatedLaborRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborRevenue
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedLaborRevenue(array $estimatedLaborRevenue = null)
    {
      $this->estimatedLaborRevenue = $estimatedLaborRevenue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedRevenue()
    {
      return $this->estimatedRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedRevenue
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedRevenue(array $estimatedRevenue = null)
    {
      $this->estimatedRevenue = $estimatedRevenue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedTime(array $estimatedTime = null)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverride
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedTimeOverride(array $estimatedTimeOverride = null)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverrideBaseline()
    {
      return $this->estimatedTimeOverrideBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverrideBaseline
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setEstimatedTimeOverrideBaseline(array $estimatedTimeOverrideBaseline = null)
    {
      $this->estimatedTimeOverrideBaseline = $estimatedTimeOverrideBaseline;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setFax(array $fax = null)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGlobalSubscriptionStatus()
    {
      return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $globalSubscriptionStatus
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(array $globalSubscriptionStatus = null)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param SearchColumnSelectField[] $image
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setImage(array $image = null)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeCrmTasksInTotals()
    {
      return $this->includeCrmTasksInTotals;
    }

    /**
     * @param SearchColumnBooleanField[] $includeCrmTasksInTotals
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIncludeCrmTasksInTotals(array $includeCrmTasksInTotals = null)
    {
      $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultBilling()
    {
      return $this->isDefaultBilling;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefaultBilling
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsDefaultBilling(array $isDefaultBilling = null)
    {
      $this->isDefaultBilling = $isDefaultBilling;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultShipping()
    {
      return $this->isDefaultShipping;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefaultShipping
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsDefaultShipping(array $isDefaultShipping = null)
    {
      $this->isDefaultShipping = $isDefaultShipping;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsExemptTime()
    {
      return $this->isExemptTime;
    }

    /**
     * @param SearchColumnBooleanField[] $isExemptTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsExemptTime(array $isExemptTime = null)
    {
      $this->isExemptTime = $isExemptTime;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsProductiveTime()
    {
      return $this->isProductiveTime;
    }

    /**
     * @param SearchColumnBooleanField[] $isProductiveTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsProductiveTime(array $isProductiveTime = null)
    {
      $this->isProductiveTime = $isProductiveTime;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsUtilizedTime()
    {
      return $this->isUtilizedTime;
    }

    /**
     * @param SearchColumnBooleanField[] $isUtilizedTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setIsUtilizedTime(array $isUtilizedTime = null)
    {
      $this->isUtilizedTime = $isUtilizedTime;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getJobBillingType()
    {
      return $this->jobBillingType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $jobBillingType
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setJobBillingType(array $jobBillingType = null)
    {
      $this->jobBillingType = $jobBillingType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobItem()
    {
      return $this->jobItem;
    }

    /**
     * @param SearchColumnSelectField[] $jobItem
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setJobItem(array $jobItem = null)
    {
      $this->jobItem = $jobItem;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getJobPrice()
    {
      return $this->jobPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $jobPrice
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setJobPrice(array $jobPrice = null)
    {
      $this->jobPrice = $jobPrice;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobResource()
    {
      return $this->jobResource;
    }

    /**
     * @param SearchColumnSelectField[] $jobResource
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setJobResource(array $jobResource = null)
    {
      $this->jobResource = $jobResource;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobResourceRole()
    {
      return $this->jobResourceRole;
    }

    /**
     * @param SearchColumnSelectField[] $jobResourceRole
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setJobResourceRole(array $jobResourceRole = null)
    {
      $this->jobResourceRole = $jobResourceRole;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param SearchColumnEnumSelectField[] $language
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setLanguage(array $language = null)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBaselineDate()
    {
      return $this->lastBaselineDate;
    }

    /**
     * @param SearchColumnDateField[] $lastBaselineDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setLastBaselineDate(array $lastBaselineDate = null)
    {
      $this->lastBaselineDate = $lastBaselineDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param SearchColumnEnumSelectField[] $level
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setLevel(array $level = null)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLimitTimeToAssignees()
    {
      return $this->limitTimeToAssignees;
    }

    /**
     * @param SearchColumnBooleanField[] $limitTimeToAssignees
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setLimitTimeToAssignees(array $limitTimeToAssignees = null)
    {
      $this->limitTimeToAssignees = $limitTimeToAssignees;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMaterializeTime()
    {
      return $this->materializeTime;
    }

    /**
     * @param SearchColumnBooleanField[] $materializeTime
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setMaterializeTime(array $materializeTime = null)
    {
      $this->materializeTime = $materializeTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentComplete
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setPercentComplete(array $percentComplete = null)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentTimeComplete
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setPercentTimeComplete(array $percentTimeComplete = null)
    {
      $this->percentTimeComplete = $percentTimeComplete;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPermission()
    {
      return $this->permission;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setPermission(array $permission = null)
    {
      $this->permission = $permission;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setPhone(array $phone = null)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhoneticName()
    {
      return $this->phoneticName;
    }

    /**
     * @param SearchColumnStringField[] $phoneticName
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setPhoneticName(array $phoneticName = null)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectedEndDate()
    {
      return $this->projectedEndDate;
    }

    /**
     * @param SearchColumnDateField[] $projectedEndDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setProjectedEndDate(array $projectedEndDate = null)
    {
      $this->projectedEndDate = $projectedEndDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectedEndDateBaseline()
    {
      return $this->projectedEndDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $projectedEndDateBaseline
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setProjectedEndDateBaseline(array $projectedEndDateBaseline = null)
    {
      $this->projectedEndDateBaseline = $projectedEndDateBaseline;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProjectExpenseType()
    {
      return $this->projectExpenseType;
    }

    /**
     * @param SearchColumnSelectField[] $projectExpenseType
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setProjectExpenseType(array $projectExpenseType = null)
    {
      $this->projectExpenseType = $projectExpenseType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param SearchColumnSelectField[] $revRecForecastRule
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setRevRecForecastRule(array $revRecForecastRule = null)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress1()
    {
      return $this->shipAddress1;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress1
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipAddress1(array $shipAddress1 = null)
    {
      $this->shipAddress1 = $shipAddress1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress2()
    {
      return $this->shipAddress2;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress2
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipAddress2(array $shipAddress2 = null)
    {
      $this->shipAddress2 = $shipAddress2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress3()
    {
      return $this->shipAddress3;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress3
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipAddress3(array $shipAddress3 = null)
    {
      $this->shipAddress3 = $shipAddress3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddressee()
    {
      return $this->shipAddressee;
    }

    /**
     * @param SearchColumnStringField[] $shipAddressee
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipAddressee(array $shipAddressee = null)
    {
      $this->shipAddressee = $shipAddressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAttention()
    {
      return $this->shipAttention;
    }

    /**
     * @param SearchColumnStringField[] $shipAttention
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipAttention(array $shipAttention = null)
    {
      $this->shipAttention = $shipAttention;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCity()
    {
      return $this->shipCity;
    }

    /**
     * @param SearchColumnStringField[] $shipCity
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipCity(array $shipCity = null)
    {
      $this->shipCity = $shipCity;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCountry()
    {
      return $this->shipCountry;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCountry
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipCountry(array $shipCountry = null)
    {
      $this->shipCountry = $shipCountry;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCountryCode()
    {
      return $this->shipCountryCode;
    }

    /**
     * @param SearchColumnStringField[] $shipCountryCode
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipCountryCode(array $shipCountryCode = null)
    {
      $this->shipCountryCode = $shipCountryCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipPhone()
    {
      return $this->shipPhone;
    }

    /**
     * @param SearchColumnStringField[] $shipPhone
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipPhone(array $shipPhone = null)
    {
      $this->shipPhone = $shipPhone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipState()
    {
      return $this->shipState;
    }

    /**
     * @param SearchColumnStringField[] $shipState
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipState(array $shipState = null)
    {
      $this->shipState = $shipState;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipZip()
    {
      return $this->shipZip;
    }

    /**
     * @param SearchColumnStringField[] $shipZip
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setShipZip(array $shipZip = null)
    {
      $this->shipZip = $shipZip;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateBaseline()
    {
      return $this->startDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $startDateBaseline
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setStartDateBaseline(array $startDateBaseline = null)
    {
      $this->startDateBaseline = $startDateBaseline;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setSubscription(array $subscription = null)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSubscriptionDate()
    {
      return $this->subscriptionDate;
    }

    /**
     * @param SearchColumnDateField[] $subscriptionDate
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setSubscriptionDate(array $subscriptionDate = null)
    {
      $this->subscriptionDate = $subscriptionDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSubscriptionStatus()
    {
      return $this->subscriptionStatus;
    }

    /**
     * @param SearchColumnBooleanField[] $subscriptionStatus
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setSubscriptionStatus(array $subscriptionStatus = null)
    {
      $this->subscriptionStatus = $subscriptionStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $timeRemaining
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setTimeRemaining(array $timeRemaining = null)
    {
      $this->timeRemaining = $timeRemaining;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsePercentCompleteOverride()
    {
      return $this->usePercentCompleteOverride;
    }

    /**
     * @param SearchColumnBooleanField[] $usePercentCompleteOverride
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setUsePercentCompleteOverride(array $usePercentCompleteOverride = null)
    {
      $this->usePercentCompleteOverride = $usePercentCompleteOverride;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param SearchColumnStringField[] $zipCode
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setZipCode(array $zipCode = null)
    {
      $this->zipCode = $zipCode;
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
     * @return \Nzolt\NetSuite\JobSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
