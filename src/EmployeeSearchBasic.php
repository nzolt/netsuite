<?php

namespace Nzolt\NetSuite;

class EmployeeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $address
     */
    protected $address = null;

    /**
     * @var SearchStringField $addressee
     */
    protected $addressee = null;

    /**
     * @var SearchStringField $addressLabel
     */
    protected $addressLabel = null;

    /**
     * @var SearchStringField $addressPhone
     */
    protected $addressPhone = null;

    /**
     * @var SearchStringField $alienNumber
     */
    protected $alienNumber = null;

    /**
     * @var SearchDoubleField $allocation
     */
    protected $allocation = null;

    /**
     * @var SearchDateField $anniversary
     */
    protected $anniversary = null;

    /**
     * @var SearchDoubleField $approvalLimit
     */
    protected $approvalLimit = null;

    /**
     * @var SearchMultiSelectField $approver
     */
    protected $approver = null;

    /**
     * @var SearchStringField $attention
     */
    protected $attention = null;

    /**
     * @var SearchDateField $authWorkDate
     */
    protected $authWorkDate = null;

    /**
     * @var SearchDoubleField $baseWage
     */
    protected $baseWage = null;

    /**
     * @var SearchEnumMultiSelectField $baseWageType
     */
    protected $baseWageType = null;

    /**
     * @var SearchStringField $billAddress
     */
    protected $billAddress = null;

    /**
     * @var SearchMultiSelectField $billingClass
     */
    protected $billingClass = null;

    /**
     * @var SearchDateField $birthDate
     */
    protected $birthDate = null;

    /**
     * @var SearchDateField $birthDay
     */
    protected $birthDay = null;

    /**
     * @var SearchMultiSelectField $cContribution
     */
    protected $cContribution = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchStringField $comments
     */
    protected $comments = null;

    /**
     * @var SearchMultiSelectField $commissionPlan
     */
    protected $commissionPlan = null;

    /**
     * @var SearchEnumMultiSelectField $compensationCurrency
     */
    protected $compensationCurrency = null;

    /**
     * @var SearchBooleanField $concurrentWebServicesUser
     */
    protected $concurrentWebServicesUser = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $county
     */
    protected $county = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchMultiSelectField $deduction
     */
    protected $deduction = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchMultiSelectField $earning
     */
    protected $earning = null;

    /**
     * @var SearchMultiSelectField $education
     */
    protected $education = null;

    /**
     * @var SearchBooleanField $eligibleForCommission
     */
    protected $eligibleForCommission = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchMultiSelectField $employeeStatus
     */
    protected $employeeStatus = null;

    /**
     * @var SearchMultiSelectField $employeeType
     */
    protected $employeeType = null;

    /**
     * @var SearchBooleanField $employeeTypeKpi
     */
    protected $employeeTypeKpi = null;

    /**
     * @var SearchStringField $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchMultiSelectField $ethnicity
     */
    protected $ethnicity = null;

    /**
     * @var SearchDoubleField $expenseLimit
     */
    protected $expenseLimit = null;

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
     * @var SearchStringField $firstName
     */
    protected $firstName = null;

    /**
     * @var SearchEnumMultiSelectField $gender
     */
    protected $gender = null;

    /**
     * @var SearchBooleanField $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var SearchEnumMultiSelectField $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var SearchMultiSelectField $group
     */
    protected $group = null;

    /**
     * @var SearchDateField $hireDate
     */
    protected $hireDate = null;

    /**
     * @var SearchBooleanField $I9Verified
     */
    protected $I9Verified = null;

    /**
     * @var SearchStringField $image
     */
    protected $image = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isDefaultBilling
     */
    protected $isDefaultBilling = null;

    /**
     * @var SearchBooleanField $isDefaultShipping
     */
    protected $isDefaultShipping = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isJobResource
     */
    protected $isJobResource = null;

    /**
     * @var SearchBooleanField $isTemplate
     */
    protected $isTemplate = null;

    /**
     * @var SearchMultiSelectField $job
     */
    protected $job = null;

    /**
     * @var SearchStringField $jobDescription
     */
    protected $jobDescription = null;

    /**
     * @var SearchDoubleField $laborCost
     */
    protected $laborCost = null;

    /**
     * @var SearchEnumMultiSelectField $language
     */
    protected $language = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchStringField $lastName
     */
    protected $lastName = null;

    /**
     * @var SearchDateField $lastPaidDate
     */
    protected $lastPaidDate = null;

    /**
     * @var SearchDateField $lastReviewDate
     */
    protected $lastReviewDate = null;

    /**
     * @var SearchEnumMultiSelectField $level
     */
    protected $level = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchMultiSelectField $maritalStatus
     */
    protected $maritalStatus = null;

    /**
     * @var SearchStringField $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchDateField $nextReviewDate
     */
    protected $nextReviewDate = null;

    /**
     * @var SearchBooleanField $offlineAccess
     */
    protected $offlineAccess = null;

    /**
     * @var SearchEnumMultiSelectField $payFrequency
     */
    protected $payFrequency = null;

    /**
     * @var SearchDateField $permChangeDate
     */
    protected $permChangeDate = null;

    /**
     * @var SearchEnumMultiSelectField $permission
     */
    protected $permission = null;

    /**
     * @var SearchEnumMultiSelectField $permissionChange
     */
    protected $permissionChange = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchStringField $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var SearchMultiSelectField $positionTitle
     */
    protected $positionTitle = null;

    /**
     * @var SearchDoubleField $primaryEarningAmount
     */
    protected $primaryEarningAmount = null;

    /**
     * @var SearchStringField $primaryEarningItem
     */
    protected $primaryEarningItem = null;

    /**
     * @var SearchStringField $primaryEarningType
     */
    protected $primaryEarningType = null;

    /**
     * @var SearchDoubleField $purchaseOrderApprovalLimit
     */
    protected $purchaseOrderApprovalLimit = null;

    /**
     * @var SearchMultiSelectField $purchaseOrderApprover
     */
    protected $purchaseOrderApprover = null;

    /**
     * @var SearchDoubleField $purchaseOrderLimit
     */
    protected $purchaseOrderLimit = null;

    /**
     * @var SearchDateField $releaseDate
     */
    protected $releaseDate = null;

    /**
     * @var SearchMultiSelectField $residentStatus
     */
    protected $residentStatus = null;

    /**
     * @var SearchMultiSelectField $role
     */
    protected $role = null;

    /**
     * @var SearchMultiSelectField $roleChange
     */
    protected $roleChange = null;

    /**
     * @var SearchDateField $roleChangeDate
     */
    protected $roleChangeDate = null;

    /**
     * @var SearchBooleanField $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchMultiSelectField $salesRole
     */
    protected $salesRole = null;

    /**
     * @var SearchStringField $salutation
     */
    protected $salutation = null;

    /**
     * @var SearchStringField $socialSecurityNumber
     */
    protected $socialSecurityNumber = null;

    /**
     * @var SearchDateField $startDateTimeOffCalc
     */
    protected $startDateTimeOffCalc = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $supervisor
     */
    protected $supervisor = null;

    /**
     * @var SearchBooleanField $supportRep
     */
    protected $supportRep = null;

    /**
     * @var SearchEnumMultiSelectField $terminationCategory
     */
    protected $terminationCategory = null;

    /**
     * @var SearchStringField $terminationDetails
     */
    protected $terminationDetails = null;

    /**
     * @var SearchMultiSelectField $terminationReason
     */
    protected $terminationReason = null;

    /**
     * @var SearchEnumMultiSelectField $terminationRegretted
     */
    protected $terminationRegretted = null;

    /**
     * @var SearchMultiSelectField $timeApprover
     */
    protected $timeApprover = null;

    /**
     * @var SearchMultiSelectField $timeOffPlan
     */
    protected $timeOffPlan = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchBooleanField $usePerquest
     */
    protected $usePerquest = null;

    /**
     * @var SearchBooleanField $useTimeData
     */
    protected $useTimeData = null;

    /**
     * @var SearchDateField $visaExpDate
     */
    protected $visaExpDate = null;

    /**
     * @var SearchMultiSelectField $visaType
     */
    protected $visaType = null;

    /**
     * @var SearchMultiSelectField $withholding
     */
    protected $withholding = null;

    /**
     * @var SearchMultiSelectField $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var SearchMultiSelectField $workplace
     */
    protected $workplace = null;

    /**
     * @var SearchStringField $zipCode
     */
    protected $zipCode = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressee()
    {
      return $this->addressee;
    }

    /**
     * @param SearchStringField $addressee
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAddressee($addressee)
    {
      $this->addressee = $addressee;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressLabel()
    {
      return $this->addressLabel;
    }

    /**
     * @param SearchStringField $addressLabel
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAddressLabel($addressLabel)
    {
      $this->addressLabel = $addressLabel;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressPhone()
    {
      return $this->addressPhone;
    }

    /**
     * @param SearchStringField $addressPhone
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAddressPhone($addressPhone)
    {
      $this->addressPhone = $addressPhone;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAlienNumber()
    {
      return $this->alienNumber;
    }

    /**
     * @param SearchStringField $alienNumber
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAlienNumber($alienNumber)
    {
      $this->alienNumber = $alienNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAllocation()
    {
      return $this->allocation;
    }

    /**
     * @param SearchDoubleField $allocation
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAllocation($allocation)
    {
      $this->allocation = $allocation;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getAnniversary()
    {
      return $this->anniversary;
    }

    /**
     * @param SearchDateField $anniversary
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAnniversary($anniversary)
    {
      $this->anniversary = $anniversary;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApprovalLimit()
    {
      return $this->approvalLimit;
    }

    /**
     * @param SearchDoubleField $approvalLimit
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setApprovalLimit($approvalLimit)
    {
      $this->approvalLimit = $approvalLimit;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApprover()
    {
      return $this->approver;
    }

    /**
     * @param SearchMultiSelectField $approver
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setApprover($approver)
    {
      $this->approver = $approver;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAttention()
    {
      return $this->attention;
    }

    /**
     * @param SearchStringField $attention
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getAuthWorkDate()
    {
      return $this->authWorkDate;
    }

    /**
     * @param SearchDateField $authWorkDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setAuthWorkDate($authWorkDate)
    {
      $this->authWorkDate = $authWorkDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBaseWage()
    {
      return $this->baseWage;
    }

    /**
     * @param SearchDoubleField $baseWage
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBaseWage($baseWage)
    {
      $this->baseWage = $baseWage;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBaseWageType()
    {
      return $this->baseWageType;
    }

    /**
     * @param SearchEnumMultiSelectField $baseWageType
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBaseWageType($baseWageType)
    {
      $this->baseWageType = $baseWageType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddress()
    {
      return $this->billAddress;
    }

    /**
     * @param SearchStringField $billAddress
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBillAddress($billAddress)
    {
      $this->billAddress = $billAddress;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param SearchMultiSelectField $billingClass
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBillingClass($billingClass)
    {
      $this->billingClass = $billingClass;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBirthDate()
    {
      return $this->birthDate;
    }

    /**
     * @param SearchDateField $birthDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBirthDate($birthDate)
    {
      $this->birthDate = $birthDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBirthDay()
    {
      return $this->birthDay;
    }

    /**
     * @param SearchDateField $birthDay
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setBirthDay($birthDay)
    {
      $this->birthDay = $birthDay;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCContribution()
    {
      return $this->cContribution;
    }

    /**
     * @param SearchMultiSelectField $cContribution
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCContribution($cContribution)
    {
      $this->cContribution = $cContribution;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param SearchStringField $comments
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCommissionPlan()
    {
      return $this->commissionPlan;
    }

    /**
     * @param SearchMultiSelectField $commissionPlan
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCommissionPlan($commissionPlan)
    {
      $this->commissionPlan = $commissionPlan;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCompensationCurrency()
    {
      return $this->compensationCurrency;
    }

    /**
     * @param SearchEnumMultiSelectField $compensationCurrency
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCompensationCurrency($compensationCurrency)
    {
      $this->compensationCurrency = $compensationCurrency;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getConcurrentWebServicesUser()
    {
      return $this->concurrentWebServicesUser;
    }

    /**
     * @param SearchBooleanField $concurrentWebServicesUser
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setConcurrentWebServicesUser($concurrentWebServicesUser)
    {
      $this->concurrentWebServicesUser = $concurrentWebServicesUser;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCounty()
    {
      return $this->county;
    }

    /**
     * @param SearchStringField $county
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeduction()
    {
      return $this->deduction;
    }

    /**
     * @param SearchMultiSelectField $deduction
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setDeduction($deduction)
    {
      $this->deduction = $deduction;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEarning()
    {
      return $this->earning;
    }

    /**
     * @param SearchMultiSelectField $earning
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEarning($earning)
    {
      $this->earning = $earning;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEducation()
    {
      return $this->education;
    }

    /**
     * @param SearchMultiSelectField $education
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEducation($education)
    {
      $this->education = $education;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEligibleForCommission()
    {
      return $this->eligibleForCommission;
    }

    /**
     * @param SearchBooleanField $eligibleForCommission
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEligibleForCommission($eligibleForCommission)
    {
      $this->eligibleForCommission = $eligibleForCommission;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeStatus()
    {
      return $this->employeeStatus;
    }

    /**
     * @param SearchMultiSelectField $employeeStatus
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEmployeeStatus($employeeStatus)
    {
      $this->employeeStatus = $employeeStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeType()
    {
      return $this->employeeType;
    }

    /**
     * @param SearchMultiSelectField $employeeType
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEmployeeType($employeeType)
    {
      $this->employeeType = $employeeType;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEmployeeTypeKpi()
    {
      return $this->employeeTypeKpi;
    }

    /**
     * @param SearchBooleanField $employeeTypeKpi
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEmployeeTypeKpi($employeeTypeKpi)
    {
      $this->employeeTypeKpi = $employeeTypeKpi;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param SearchStringField $entityId
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEthnicity()
    {
      return $this->ethnicity;
    }

    /**
     * @param SearchMultiSelectField $ethnicity
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setEthnicity($ethnicity)
    {
      $this->ethnicity = $ethnicity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpenseLimit()
    {
      return $this->expenseLimit;
    }

    /**
     * @param SearchDoubleField $expenseLimit
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setExpenseLimit($expenseLimit)
    {
      $this->expenseLimit = $expenseLimit;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param SearchStringField $firstName
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param SearchEnumMultiSelectField $gender
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGiveAccess()
    {
      return $this->giveAccess;
    }

    /**
     * @param SearchBooleanField $giveAccess
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGlobalSubscriptionStatus()
    {
      return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $globalSubscriptionStatus
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getHireDate()
    {
      return $this->hireDate;
    }

    /**
     * @param SearchDateField $hireDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setHireDate($hireDate)
    {
      $this->hireDate = $hireDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getI9Verified()
    {
      return $this->I9Verified;
    }

    /**
     * @param SearchBooleanField $I9Verified
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setI9Verified($I9Verified)
    {
      $this->I9Verified = $I9Verified;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param SearchStringField $image
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setImage($image)
    {
      $this->image = $image;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultBilling()
    {
      return $this->isDefaultBilling;
    }

    /**
     * @param SearchBooleanField $isDefaultBilling
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setIsDefaultBilling($isDefaultBilling)
    {
      $this->isDefaultBilling = $isDefaultBilling;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultShipping()
    {
      return $this->isDefaultShipping;
    }

    /**
     * @param SearchBooleanField $isDefaultShipping
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setIsDefaultShipping($isDefaultShipping)
    {
      $this->isDefaultShipping = $isDefaultShipping;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobResource()
    {
      return $this->isJobResource;
    }

    /**
     * @param SearchBooleanField $isJobResource
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setIsJobResource($isJobResource)
    {
      $this->isJobResource = $isJobResource;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTemplate()
    {
      return $this->isTemplate;
    }

    /**
     * @param SearchBooleanField $isTemplate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setIsTemplate($isTemplate)
    {
      $this->isTemplate = $isTemplate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param SearchMultiSelectField $job
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getJobDescription()
    {
      return $this->jobDescription;
    }

    /**
     * @param SearchStringField $jobDescription
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setJobDescription($jobDescription)
    {
      $this->jobDescription = $jobDescription;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLaborCost()
    {
      return $this->laborCost;
    }

    /**
     * @param SearchDoubleField $laborCost
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLaborCost($laborCost)
    {
      $this->laborCost = $laborCost;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param SearchStringField $lastName
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastPaidDate()
    {
      return $this->lastPaidDate;
    }

    /**
     * @param SearchDateField $lastPaidDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLastPaidDate($lastPaidDate)
    {
      $this->lastPaidDate = $lastPaidDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastReviewDate()
    {
      return $this->lastReviewDate;
    }

    /**
     * @param SearchDateField $lastReviewDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLastReviewDate($lastReviewDate)
    {
      $this->lastReviewDate = $lastReviewDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param SearchEnumMultiSelectField $level
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMaritalStatus()
    {
      return $this->maritalStatus;
    }

    /**
     * @param SearchMultiSelectField $maritalStatus
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setMaritalStatus($maritalStatus)
    {
      $this->maritalStatus = $maritalStatus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param SearchStringField $middleName
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextReviewDate()
    {
      return $this->nextReviewDate;
    }

    /**
     * @param SearchDateField $nextReviewDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setNextReviewDate($nextReviewDate)
    {
      $this->nextReviewDate = $nextReviewDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOfflineAccess()
    {
      return $this->offlineAccess;
    }

    /**
     * @param SearchBooleanField $offlineAccess
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setOfflineAccess($offlineAccess)
    {
      $this->offlineAccess = $offlineAccess;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPayFrequency()
    {
      return $this->payFrequency;
    }

    /**
     * @param SearchEnumMultiSelectField $payFrequency
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPayFrequency($payFrequency)
    {
      $this->payFrequency = $payFrequency;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPermChangeDate()
    {
      return $this->permChangeDate;
    }

    /**
     * @param SearchDateField $permChangeDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPermChangeDate($permChangeDate)
    {
      $this->permChangeDate = $permChangeDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPermission()
    {
      return $this->permission;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPermission($permission)
    {
      $this->permission = $permission;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPermissionChange()
    {
      return $this->permissionChange;
    }

    /**
     * @param SearchEnumMultiSelectField $permissionChange
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPermissionChange($permissionChange)
    {
      $this->permissionChange = $permissionChange;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhoneticName()
    {
      return $this->phoneticName;
    }

    /**
     * @param SearchStringField $phoneticName
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPositionTitle()
    {
      return $this->positionTitle;
    }

    /**
     * @param SearchMultiSelectField $positionTitle
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPositionTitle($positionTitle)
    {
      $this->positionTitle = $positionTitle;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrimaryEarningAmount()
    {
      return $this->primaryEarningAmount;
    }

    /**
     * @param SearchDoubleField $primaryEarningAmount
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPrimaryEarningAmount($primaryEarningAmount)
    {
      $this->primaryEarningAmount = $primaryEarningAmount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPrimaryEarningItem()
    {
      return $this->primaryEarningItem;
    }

    /**
     * @param SearchStringField $primaryEarningItem
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPrimaryEarningItem($primaryEarningItem)
    {
      $this->primaryEarningItem = $primaryEarningItem;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPrimaryEarningType()
    {
      return $this->primaryEarningType;
    }

    /**
     * @param SearchStringField $primaryEarningType
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPrimaryEarningType($primaryEarningType)
    {
      $this->primaryEarningType = $primaryEarningType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderApprovalLimit()
    {
      return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param SearchDoubleField $purchaseOrderApprovalLimit
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPurchaseOrderApprovalLimit($purchaseOrderApprovalLimit)
    {
      $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrderApprover()
    {
      return $this->purchaseOrderApprover;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrderApprover
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPurchaseOrderApprover($purchaseOrderApprover)
    {
      $this->purchaseOrderApprover = $purchaseOrderApprover;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderLimit()
    {
      return $this->purchaseOrderLimit;
    }

    /**
     * @param SearchDoubleField $purchaseOrderLimit
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setPurchaseOrderLimit($purchaseOrderLimit)
    {
      $this->purchaseOrderLimit = $purchaseOrderLimit;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReleaseDate()
    {
      return $this->releaseDate;
    }

    /**
     * @param SearchDateField $releaseDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setReleaseDate($releaseDate)
    {
      $this->releaseDate = $releaseDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResidentStatus()
    {
      return $this->residentStatus;
    }

    /**
     * @param SearchMultiSelectField $residentStatus
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setResidentStatus($residentStatus)
    {
      $this->residentStatus = $residentStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param SearchMultiSelectField $role
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRoleChange()
    {
      return $this->roleChange;
    }

    /**
     * @param SearchMultiSelectField $roleChange
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setRoleChange($roleChange)
    {
      $this->roleChange = $roleChange;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRoleChangeDate()
    {
      return $this->roleChangeDate;
    }

    /**
     * @param SearchDateField $roleChangeDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setRoleChangeDate($roleChangeDate)
    {
      $this->roleChangeDate = $roleChangeDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchBooleanField $salesRep
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRole()
    {
      return $this->salesRole;
    }

    /**
     * @param SearchMultiSelectField $salesRole
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSalesRole($salesRole)
    {
      $this->salesRole = $salesRole;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSalutation()
    {
      return $this->salutation;
    }

    /**
     * @param SearchStringField $salutation
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSalutation($salutation)
    {
      $this->salutation = $salutation;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSocialSecurityNumber()
    {
      return $this->socialSecurityNumber;
    }

    /**
     * @param SearchStringField $socialSecurityNumber
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
      $this->socialSecurityNumber = $socialSecurityNumber;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateTimeOffCalc()
    {
      return $this->startDateTimeOffCalc;
    }

    /**
     * @param SearchDateField $startDateTimeOffCalc
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setStartDateTimeOffCalc($startDateTimeOffCalc)
    {
      $this->startDateTimeOffCalc = $startDateTimeOffCalc;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSupervisor()
    {
      return $this->supervisor;
    }

    /**
     * @param SearchMultiSelectField $supervisor
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSupervisor($supervisor)
    {
      $this->supervisor = $supervisor;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSupportRep()
    {
      return $this->supportRep;
    }

    /**
     * @param SearchBooleanField $supportRep
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setSupportRep($supportRep)
    {
      $this->supportRep = $supportRep;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTerminationCategory()
    {
      return $this->terminationCategory;
    }

    /**
     * @param SearchEnumMultiSelectField $terminationCategory
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTerminationCategory($terminationCategory)
    {
      $this->terminationCategory = $terminationCategory;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTerminationDetails()
    {
      return $this->terminationDetails;
    }

    /**
     * @param SearchStringField $terminationDetails
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTerminationDetails($terminationDetails)
    {
      $this->terminationDetails = $terminationDetails;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerminationReason()
    {
      return $this->terminationReason;
    }

    /**
     * @param SearchMultiSelectField $terminationReason
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTerminationReason($terminationReason)
    {
      $this->terminationReason = $terminationReason;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTerminationRegretted()
    {
      return $this->terminationRegretted;
    }

    /**
     * @param SearchEnumMultiSelectField $terminationRegretted
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTerminationRegretted($terminationRegretted)
    {
      $this->terminationRegretted = $terminationRegretted;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeApprover()
    {
      return $this->timeApprover;
    }

    /**
     * @param SearchMultiSelectField $timeApprover
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTimeApprover($timeApprover)
    {
      $this->timeApprover = $timeApprover;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeOffPlan()
    {
      return $this->timeOffPlan;
    }

    /**
     * @param SearchMultiSelectField $timeOffPlan
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTimeOffPlan($timeOffPlan)
    {
      $this->timeOffPlan = $timeOffPlan;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsePerquest()
    {
      return $this->usePerquest;
    }

    /**
     * @param SearchBooleanField $usePerquest
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setUsePerquest($usePerquest)
    {
      $this->usePerquest = $usePerquest;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseTimeData()
    {
      return $this->useTimeData;
    }

    /**
     * @param SearchBooleanField $useTimeData
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setUseTimeData($useTimeData)
    {
      $this->useTimeData = $useTimeData;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getVisaExpDate()
    {
      return $this->visaExpDate;
    }

    /**
     * @param SearchDateField $visaExpDate
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setVisaExpDate($visaExpDate)
    {
      $this->visaExpDate = $visaExpDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVisaType()
    {
      return $this->visaType;
    }

    /**
     * @param SearchMultiSelectField $visaType
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setVisaType($visaType)
    {
      $this->visaType = $visaType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWithholding()
    {
      return $this->withholding;
    }

    /**
     * @param SearchMultiSelectField $withholding
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setWithholding($withholding)
    {
      $this->withholding = $withholding;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchMultiSelectField $workCalendar
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkplace()
    {
      return $this->workplace;
    }

    /**
     * @param SearchMultiSelectField $workplace
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setWorkplace($workplace)
    {
      $this->workplace = $workplace;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param SearchStringField $zipCode
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
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
     * @return \Nzolt\NetSuite\EmployeeSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
