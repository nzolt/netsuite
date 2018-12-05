<?php

namespace Nzolt\NetSuite;

class EmployeeSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accountNumber
     */
    protected $accountNumber = null;

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
     * @var SearchColumnStringField[] $alienNumber
     */
    protected $alienNumber = null;

    /**
     * @var SearchColumnDoubleField[] $allocation
     */
    protected $allocation = null;

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
     * @var SearchColumnDoubleField[] $approvalLimit
     */
    protected $approvalLimit = null;

    /**
     * @var SearchColumnSelectField[] $approver
     */
    protected $approver = null;

    /**
     * @var SearchColumnStringField[] $attention
     */
    protected $attention = null;

    /**
     * @var SearchColumnDateField[] $authWorkDate
     */
    protected $authWorkDate = null;

    /**
     * @var SearchColumnDoubleField[] $baseWage
     */
    protected $baseWage = null;

    /**
     * @var SearchEnumMultiSelectField[] $baseWageType
     */
    protected $baseWageType = null;

    /**
     * @var SearchColumnStringField[] $billAddress
     */
    protected $billAddress = null;

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
     * @var SearchColumnSelectField[] $billingClass
     */
    protected $billingClass = null;

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
     * @var SearchColumnDateField[] $birthDate
     */
    protected $birthDate = null;

    /**
     * @var SearchColumnDateField[] $birthDay
     */
    protected $birthDay = null;

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnStringField[] $comments
     */
    protected $comments = null;

    /**
     * @var SearchColumnEnumSelectField[] $compensationCurrency
     */
    protected $compensationCurrency = null;

    /**
     * @var SearchColumnBooleanField[] $concurrentWebServicesUser
     */
    protected $concurrentWebServicesUser = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnBooleanField[] $eligibleForCommission
     */
    protected $eligibleForCommission = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnSelectField[] $employeeStatus
     */
    protected $employeeStatus = null;

    /**
     * @var SearchColumnSelectField[] $employeeType
     */
    protected $employeeType = null;

    /**
     * @var SearchColumnStringField[] $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchColumnLongField[] $entityNumber
     */
    protected $entityNumber = null;

    /**
     * @var SearchColumnSelectField[] $ethnicity
     */
    protected $ethnicity = null;

    /**
     * @var SearchColumnDoubleField[] $expenseLimit
     */
    protected $expenseLimit = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fax
     */
    protected $fax = null;

    /**
     * @var SearchColumnStringField[] $firstName
     */
    protected $firstName = null;

    /**
     * @var SearchColumnEnumSelectField[] $gender
     */
    protected $gender = null;

    /**
     * @var SearchColumnBooleanField[] $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var SearchColumnEnumSelectField[] $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var SearchColumnDateField[] $hireDate
     */
    protected $hireDate = null;

    /**
     * @var SearchColumnStringField[] $homePhone
     */
    protected $homePhone = null;

    /**
     * @var SearchColumnBooleanField[] $i9Verified
     */
    protected $i9Verified = null;

    /**
     * @var SearchColumnSelectField[] $image
     */
    protected $image = null;

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
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isJobResource
     */
    protected $isJobResource = null;

    /**
     * @var SearchColumnBooleanField[] $isSalesRep
     */
    protected $isSalesRep = null;

    /**
     * @var SearchColumnBooleanField[] $isSupportRep
     */
    protected $isSupportRep = null;

    /**
     * @var SearchColumnBooleanField[] $isTemplate
     */
    protected $isTemplate = null;

    /**
     * @var SearchColumnSelectField[] $job
     */
    protected $job = null;

    /**
     * @var SearchColumnDoubleField[] $laborCost
     */
    protected $laborCost = null;

    /**
     * @var SearchColumnEnumSelectField[] $language
     */
    protected $language = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $lastName
     */
    protected $lastName = null;

    /**
     * @var SearchColumnDateField[] $lastPaidDate
     */
    protected $lastPaidDate = null;

    /**
     * @var SearchColumnDateField[] $lastReviewDate
     */
    protected $lastReviewDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $level
     */
    protected $level = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnSelectField[] $maritalStatus
     */
    protected $maritalStatus = null;

    /**
     * @var SearchColumnStringField[] $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchColumnStringField[] $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var SearchColumnDateField[] $nextReviewDate
     */
    protected $nextReviewDate = null;

    /**
     * @var SearchColumnBooleanField[] $offlineAccess
     */
    protected $offlineAccess = null;

    /**
     * @var SearchColumnEnumSelectField[] $payFrequency
     */
    protected $payFrequency = null;

    /**
     * @var SearchColumnDateField[] $permChangeDate
     */
    protected $permChangeDate = null;

    /**
     * @var SearchColumnStringField[] $permChangeLevel
     */
    protected $permChangeLevel = null;

    /**
     * @var SearchColumnEnumSelectField[] $permission
     */
    protected $permission = null;

    /**
     * @var SearchColumnEnumSelectField[] $permissionChange
     */
    protected $permissionChange = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnStringField[] $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var SearchColumnStringField[] $positionTitle
     */
    protected $positionTitle = null;

    /**
     * @var SearchColumnDoubleField[] $primaryEarningAmount
     */
    protected $primaryEarningAmount = null;

    /**
     * @var SearchColumnStringField[] $primaryEarningItem
     */
    protected $primaryEarningItem = null;

    /**
     * @var SearchColumnStringField[] $primaryEarningType
     */
    protected $primaryEarningType = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderApprovalLimit
     */
    protected $purchaseOrderApprovalLimit = null;

    /**
     * @var SearchColumnSelectField[] $purchaseOrderApprover
     */
    protected $purchaseOrderApprover = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderLimit
     */
    protected $purchaseOrderLimit = null;

    /**
     * @var SearchColumnDateField[] $releaseDate
     */
    protected $releaseDate = null;

    /**
     * @var SearchColumnSelectField[] $residentStatus
     */
    protected $residentStatus = null;

    /**
     * @var SearchColumnSelectField[] $role
     */
    protected $role = null;

    /**
     * @var SearchColumnStringField[] $roleChange
     */
    protected $roleChange = null;

    /**
     * @var SearchColumnStringField[] $roleChangeAction
     */
    protected $roleChangeAction = null;

    /**
     * @var SearchColumnDateField[] $roleChangeDate
     */
    protected $roleChangeDate = null;

    /**
     * @var SearchColumnSelectField[] $salesRole
     */
    protected $salesRole = null;

    /**
     * @var SearchColumnStringField[] $salutation
     */
    protected $salutation = null;

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
     * @var SearchColumnStringField[] $socialSecurityNumber
     */
    protected $socialSecurityNumber = null;

    /**
     * @var SearchColumnDateField[] $startDateTimeOffCalc
     */
    protected $startDateTimeOffCalc = null;

    /**
     * @var SearchColumnEnumSelectField[] $state
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
     * @var SearchColumnSelectField[] $supervisor
     */
    protected $supervisor = null;

    /**
     * @var SearchColumnEnumSelectField[] $terminationCategory
     */
    protected $terminationCategory = null;

    /**
     * @var SearchColumnStringField[] $terminationDetails
     */
    protected $terminationDetails = null;

    /**
     * @var SearchColumnSelectField[] $terminationReason
     */
    protected $terminationReason = null;

    /**
     * @var SearchColumnEnumSelectField[] $terminationRegretted
     */
    protected $terminationRegretted = null;

    /**
     * @var SearchColumnSelectField[] $timeApprover
     */
    protected $timeApprover = null;

    /**
     * @var SearchColumnStringField[] $timeOffPlan
     */
    protected $timeOffPlan = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnBooleanField[] $usePerquest
     */
    protected $usePerquest = null;

    /**
     * @var SearchColumnBooleanField[] $useTimeData
     */
    protected $useTimeData = null;

    /**
     * @var SearchColumnDateField[] $visaExpDate
     */
    protected $visaExpDate = null;

    /**
     * @var SearchColumnSelectField[] $visaType
     */
    protected $visaType = null;

    /**
     * @var SearchColumnStringField[] $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var SearchColumnSelectField[] $workplace
     */
    protected $workplace = null;

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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAccountNumber(array $accountNumber = null)
    {
      $this->accountNumber = $accountNumber;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAddressPhone(array $addressPhone = null)
    {
      $this->addressPhone = $addressPhone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAlienNumber()
    {
      return $this->alienNumber;
    }

    /**
     * @param SearchColumnStringField[] $alienNumber
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAlienNumber(array $alienNumber = null)
    {
      $this->alienNumber = $alienNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAllocation()
    {
      return $this->allocation;
    }

    /**
     * @param SearchColumnDoubleField[] $allocation
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAllocation(array $allocation = null)
    {
      $this->allocation = $allocation;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAltPhone(array $altPhone = null)
    {
      $this->altPhone = $altPhone;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApprovalLimit()
    {
      return $this->approvalLimit;
    }

    /**
     * @param SearchColumnDoubleField[] $approvalLimit
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setApprovalLimit(array $approvalLimit = null)
    {
      $this->approvalLimit = $approvalLimit;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getApprover()
    {
      return $this->approver;
    }

    /**
     * @param SearchColumnSelectField[] $approver
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setApprover(array $approver = null)
    {
      $this->approver = $approver;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAttention(array $attention = null)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getAuthWorkDate()
    {
      return $this->authWorkDate;
    }

    /**
     * @param SearchColumnDateField[] $authWorkDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setAuthWorkDate(array $authWorkDate = null)
    {
      $this->authWorkDate = $authWorkDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBaseWage()
    {
      return $this->baseWage;
    }

    /**
     * @param SearchColumnDoubleField[] $baseWage
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBaseWage(array $baseWage = null)
    {
      $this->baseWage = $baseWage;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField[]
     */
    public function getBaseWageType()
    {
      return $this->baseWageType;
    }

    /**
     * @param SearchEnumMultiSelectField[] $baseWageType
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBaseWageType(array $baseWageType = null)
    {
      $this->baseWageType = $baseWageType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress()
    {
      return $this->billAddress;
    }

    /**
     * @param SearchColumnStringField[] $billAddress
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBillAddress(array $billAddress = null)
    {
      $this->billAddress = $billAddress;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBillCountryCode(array $billCountryCode = null)
    {
      $this->billCountryCode = $billCountryCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param SearchColumnSelectField[] $billingClass
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBillingClass(array $billingClass = null)
    {
      $this->billingClass = $billingClass;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBillZipCode(array $billZipCode = null)
    {
      $this->billZipCode = $billZipCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBirthDate()
    {
      return $this->birthDate;
    }

    /**
     * @param SearchColumnDateField[] $birthDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBirthDate(array $birthDate = null)
    {
      $this->birthDate = $birthDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBirthDay()
    {
      return $this->birthDay;
    }

    /**
     * @param SearchColumnDateField[] $birthDay
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setBirthDay(array $birthDay = null)
    {
      $this->birthDay = $birthDay;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCompensationCurrency()
    {
      return $this->compensationCurrency;
    }

    /**
     * @param SearchColumnEnumSelectField[] $compensationCurrency
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setCompensationCurrency(array $compensationCurrency = null)
    {
      $this->compensationCurrency = $compensationCurrency;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getConcurrentWebServicesUser()
    {
      return $this->concurrentWebServicesUser;
    }

    /**
     * @param SearchColumnBooleanField[] $concurrentWebServicesUser
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setConcurrentWebServicesUser(array $concurrentWebServicesUser = null)
    {
      $this->concurrentWebServicesUser = $concurrentWebServicesUser;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEligibleForCommission()
    {
      return $this->eligibleForCommission;
    }

    /**
     * @param SearchColumnBooleanField[] $eligibleForCommission
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEligibleForCommission(array $eligibleForCommission = null)
    {
      $this->eligibleForCommission = $eligibleForCommission;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeStatus()
    {
      return $this->employeeStatus;
    }

    /**
     * @param SearchColumnSelectField[] $employeeStatus
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEmployeeStatus(array $employeeStatus = null)
    {
      $this->employeeStatus = $employeeStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeType()
    {
      return $this->employeeType;
    }

    /**
     * @param SearchColumnSelectField[] $employeeType
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEmployeeType(array $employeeType = null)
    {
      $this->employeeType = $employeeType;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEntityNumber(array $entityNumber = null)
    {
      $this->entityNumber = $entityNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEthnicity()
    {
      return $this->ethnicity;
    }

    /**
     * @param SearchColumnSelectField[] $ethnicity
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setEthnicity(array $ethnicity = null)
    {
      $this->ethnicity = $ethnicity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpenseLimit()
    {
      return $this->expenseLimit;
    }

    /**
     * @param SearchColumnDoubleField[] $expenseLimit
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setExpenseLimit(array $expenseLimit = null)
    {
      $this->expenseLimit = $expenseLimit;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setFax(array $fax = null)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param SearchColumnStringField[] $firstName
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setFirstName(array $firstName = null)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gender
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setGender(array $gender = null)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGiveAccess()
    {
      return $this->giveAccess;
    }

    /**
     * @param SearchColumnBooleanField[] $giveAccess
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setGiveAccess(array $giveAccess = null)
    {
      $this->giveAccess = $giveAccess;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(array $globalSubscriptionStatus = null)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getHireDate()
    {
      return $this->hireDate;
    }

    /**
     * @param SearchColumnDateField[] $hireDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setHireDate(array $hireDate = null)
    {
      $this->hireDate = $hireDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHomePhone()
    {
      return $this->homePhone;
    }

    /**
     * @param SearchColumnStringField[] $homePhone
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setHomePhone(array $homePhone = null)
    {
      $this->homePhone = $homePhone;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getI9Verified()
    {
      return $this->i9Verified;
    }

    /**
     * @param SearchColumnBooleanField[] $i9Verified
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setI9Verified(array $i9Verified = null)
    {
      $this->i9Verified = $i9Verified;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setImage(array $image = null)
    {
      $this->image = $image;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsDefaultShipping(array $isDefaultShipping = null)
    {
      $this->isDefaultShipping = $isDefaultShipping;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobResource()
    {
      return $this->isJobResource;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobResource
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsJobResource(array $isJobResource = null)
    {
      $this->isJobResource = $isJobResource;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSalesRep()
    {
      return $this->isSalesRep;
    }

    /**
     * @param SearchColumnBooleanField[] $isSalesRep
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsSalesRep(array $isSalesRep = null)
    {
      $this->isSalesRep = $isSalesRep;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSupportRep()
    {
      return $this->isSupportRep;
    }

    /**
     * @param SearchColumnBooleanField[] $isSupportRep
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsSupportRep(array $isSupportRep = null)
    {
      $this->isSupportRep = $isSupportRep;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTemplate()
    {
      return $this->isTemplate;
    }

    /**
     * @param SearchColumnBooleanField[] $isTemplate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setIsTemplate(array $isTemplate = null)
    {
      $this->isTemplate = $isTemplate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param SearchColumnSelectField[] $job
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setJob(array $job = null)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLaborCost()
    {
      return $this->laborCost;
    }

    /**
     * @param SearchColumnDoubleField[] $laborCost
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLaborCost(array $laborCost = null)
    {
      $this->laborCost = $laborCost;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLanguage(array $language = null)
    {
      $this->language = $language;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param SearchColumnStringField[] $lastName
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLastName(array $lastName = null)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastPaidDate()
    {
      return $this->lastPaidDate;
    }

    /**
     * @param SearchColumnDateField[] $lastPaidDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLastPaidDate(array $lastPaidDate = null)
    {
      $this->lastPaidDate = $lastPaidDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastReviewDate()
    {
      return $this->lastReviewDate;
    }

    /**
     * @param SearchColumnDateField[] $lastReviewDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLastReviewDate(array $lastReviewDate = null)
    {
      $this->lastReviewDate = $lastReviewDate;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLevel(array $level = null)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMaritalStatus()
    {
      return $this->maritalStatus;
    }

    /**
     * @param SearchColumnSelectField[] $maritalStatus
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setMaritalStatus(array $maritalStatus = null)
    {
      $this->maritalStatus = $maritalStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param SearchColumnStringField[] $middleName
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setMiddleName(array $middleName = null)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMobilePhone()
    {
      return $this->mobilePhone;
    }

    /**
     * @param SearchColumnStringField[] $mobilePhone
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setMobilePhone(array $mobilePhone = null)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextReviewDate()
    {
      return $this->nextReviewDate;
    }

    /**
     * @param SearchColumnDateField[] $nextReviewDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setNextReviewDate(array $nextReviewDate = null)
    {
      $this->nextReviewDate = $nextReviewDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOfflineAccess()
    {
      return $this->offlineAccess;
    }

    /**
     * @param SearchColumnBooleanField[] $offlineAccess
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setOfflineAccess(array $offlineAccess = null)
    {
      $this->offlineAccess = $offlineAccess;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPayFrequency()
    {
      return $this->payFrequency;
    }

    /**
     * @param SearchColumnEnumSelectField[] $payFrequency
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPayFrequency(array $payFrequency = null)
    {
      $this->payFrequency = $payFrequency;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPermChangeDate()
    {
      return $this->permChangeDate;
    }

    /**
     * @param SearchColumnDateField[] $permChangeDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPermChangeDate(array $permChangeDate = null)
    {
      $this->permChangeDate = $permChangeDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPermChangeLevel()
    {
      return $this->permChangeLevel;
    }

    /**
     * @param SearchColumnStringField[] $permChangeLevel
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPermChangeLevel(array $permChangeLevel = null)
    {
      $this->permChangeLevel = $permChangeLevel;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPermission(array $permission = null)
    {
      $this->permission = $permission;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPermissionChange()
    {
      return $this->permissionChange;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permissionChange
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPermissionChange(array $permissionChange = null)
    {
      $this->permissionChange = $permissionChange;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPhoneticName(array $phoneticName = null)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPositionTitle()
    {
      return $this->positionTitle;
    }

    /**
     * @param SearchColumnStringField[] $positionTitle
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPositionTitle(array $positionTitle = null)
    {
      $this->positionTitle = $positionTitle;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPrimaryEarningAmount()
    {
      return $this->primaryEarningAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $primaryEarningAmount
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPrimaryEarningAmount(array $primaryEarningAmount = null)
    {
      $this->primaryEarningAmount = $primaryEarningAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryEarningItem()
    {
      return $this->primaryEarningItem;
    }

    /**
     * @param SearchColumnStringField[] $primaryEarningItem
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPrimaryEarningItem(array $primaryEarningItem = null)
    {
      $this->primaryEarningItem = $primaryEarningItem;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryEarningType()
    {
      return $this->primaryEarningType;
    }

    /**
     * @param SearchColumnStringField[] $primaryEarningType
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPrimaryEarningType(array $primaryEarningType = null)
    {
      $this->primaryEarningType = $primaryEarningType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderApprovalLimit()
    {
      return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderApprovalLimit
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPurchaseOrderApprovalLimit(array $purchaseOrderApprovalLimit = null)
    {
      $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrderApprover()
    {
      return $this->purchaseOrderApprover;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrderApprover
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPurchaseOrderApprover(array $purchaseOrderApprover = null)
    {
      $this->purchaseOrderApprover = $purchaseOrderApprover;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderLimit()
    {
      return $this->purchaseOrderLimit;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderLimit
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setPurchaseOrderLimit(array $purchaseOrderLimit = null)
    {
      $this->purchaseOrderLimit = $purchaseOrderLimit;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReleaseDate()
    {
      return $this->releaseDate;
    }

    /**
     * @param SearchColumnDateField[] $releaseDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setReleaseDate(array $releaseDate = null)
    {
      $this->releaseDate = $releaseDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResidentStatus()
    {
      return $this->residentStatus;
    }

    /**
     * @param SearchColumnSelectField[] $residentStatus
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setResidentStatus(array $residentStatus = null)
    {
      $this->residentStatus = $residentStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param SearchColumnSelectField[] $role
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setRole(array $role = null)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRoleChange()
    {
      return $this->roleChange;
    }

    /**
     * @param SearchColumnStringField[] $roleChange
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setRoleChange(array $roleChange = null)
    {
      $this->roleChange = $roleChange;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRoleChangeAction()
    {
      return $this->roleChangeAction;
    }

    /**
     * @param SearchColumnStringField[] $roleChangeAction
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setRoleChangeAction(array $roleChangeAction = null)
    {
      $this->roleChangeAction = $roleChangeAction;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRoleChangeDate()
    {
      return $this->roleChangeDate;
    }

    /**
     * @param SearchColumnDateField[] $roleChangeDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setRoleChangeDate(array $roleChangeDate = null)
    {
      $this->roleChangeDate = $roleChangeDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRole()
    {
      return $this->salesRole;
    }

    /**
     * @param SearchColumnSelectField[] $salesRole
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setSalesRole(array $salesRole = null)
    {
      $this->salesRole = $salesRole;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalutation()
    {
      return $this->salutation;
    }

    /**
     * @param SearchColumnStringField[] $salutation
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setSalutation(array $salutation = null)
    {
      $this->salutation = $salutation;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setShipZip(array $shipZip = null)
    {
      $this->shipZip = $shipZip;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSocialSecurityNumber()
    {
      return $this->socialSecurityNumber;
    }

    /**
     * @param SearchColumnStringField[] $socialSecurityNumber
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setSocialSecurityNumber(array $socialSecurityNumber = null)
    {
      $this->socialSecurityNumber = $socialSecurityNumber;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateTimeOffCalc()
    {
      return $this->startDateTimeOffCalc;
    }

    /**
     * @param SearchColumnDateField[] $startDateTimeOffCalc
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setStartDateTimeOffCalc(array $startDateTimeOffCalc = null)
    {
      $this->startDateTimeOffCalc = $startDateTimeOffCalc;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchColumnEnumSelectField[] $state
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSupervisor()
    {
      return $this->supervisor;
    }

    /**
     * @param SearchColumnSelectField[] $supervisor
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setSupervisor(array $supervisor = null)
    {
      $this->supervisor = $supervisor;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTerminationCategory()
    {
      return $this->terminationCategory;
    }

    /**
     * @param SearchColumnEnumSelectField[] $terminationCategory
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTerminationCategory(array $terminationCategory = null)
    {
      $this->terminationCategory = $terminationCategory;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTerminationDetails()
    {
      return $this->terminationDetails;
    }

    /**
     * @param SearchColumnStringField[] $terminationDetails
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTerminationDetails(array $terminationDetails = null)
    {
      $this->terminationDetails = $terminationDetails;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerminationReason()
    {
      return $this->terminationReason;
    }

    /**
     * @param SearchColumnSelectField[] $terminationReason
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTerminationReason(array $terminationReason = null)
    {
      $this->terminationReason = $terminationReason;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTerminationRegretted()
    {
      return $this->terminationRegretted;
    }

    /**
     * @param SearchColumnEnumSelectField[] $terminationRegretted
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTerminationRegretted(array $terminationRegretted = null)
    {
      $this->terminationRegretted = $terminationRegretted;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeApprover()
    {
      return $this->timeApprover;
    }

    /**
     * @param SearchColumnSelectField[] $timeApprover
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTimeApprover(array $timeApprover = null)
    {
      $this->timeApprover = $timeApprover;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTimeOffPlan()
    {
      return $this->timeOffPlan;
    }

    /**
     * @param SearchColumnStringField[] $timeOffPlan
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTimeOffPlan(array $timeOffPlan = null)
    {
      $this->timeOffPlan = $timeOffPlan;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsePerquest()
    {
      return $this->usePerquest;
    }

    /**
     * @param SearchColumnBooleanField[] $usePerquest
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setUsePerquest(array $usePerquest = null)
    {
      $this->usePerquest = $usePerquest;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseTimeData()
    {
      return $this->useTimeData;
    }

    /**
     * @param SearchColumnBooleanField[] $useTimeData
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setUseTimeData(array $useTimeData = null)
    {
      $this->useTimeData = $useTimeData;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getVisaExpDate()
    {
      return $this->visaExpDate;
    }

    /**
     * @param SearchColumnDateField[] $visaExpDate
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setVisaExpDate(array $visaExpDate = null)
    {
      $this->visaExpDate = $visaExpDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVisaType()
    {
      return $this->visaType;
    }

    /**
     * @param SearchColumnSelectField[] $visaType
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setVisaType(array $visaType = null)
    {
      $this->visaType = $visaType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchColumnStringField[] $workCalendar
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setWorkCalendar(array $workCalendar = null)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkplace()
    {
      return $this->workplace;
    }

    /**
     * @param SearchColumnSelectField[] $workplace
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setWorkplace(array $workplace = null)
    {
      $this->workplace = $workplace;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
