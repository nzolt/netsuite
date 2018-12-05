<?php

namespace Nzolt\NetSuite;

class JobSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var SearchDoubleField $actualTime
     */
    protected $actualTime = null;

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
     * @var SearchBooleanField $allocatePayrollExpenses
     */
    protected $allocatePayrollExpenses = null;

    /**
     * @var SearchBooleanField $allowAllResourcesForTasks
     */
    protected $allowAllResourcesForTasks = null;

    /**
     * @var SearchBooleanField $allowExpenses
     */
    protected $allowExpenses = null;

    /**
     * @var SearchBooleanField $allowTime
     */
    protected $allowTime = null;

    /**
     * @var SearchBooleanField $applyProjectExpenseTypeToAll
     */
    protected $applyProjectExpenseTypeToAll = null;

    /**
     * @var SearchStringField $attention
     */
    protected $attention = null;

    /**
     * @var SearchMultiSelectField $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchDateField $calculatedEndDate
     */
    protected $calculatedEndDate = null;

    /**
     * @var SearchDateField $calculatedEndDateBaseline
     */
    protected $calculatedEndDateBaseline = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchStringField $comments
     */
    protected $comments = null;

    /**
     * @var SearchStringField $contact
     */
    protected $contact = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $county
     */
    protected $county = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchStringField $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchDoubleField $estCost
     */
    protected $estCost = null;

    /**
     * @var SearchDateField $estEndDate
     */
    protected $estEndDate = null;

    /**
     * @var SearchDoubleField $estimatedGrossProfit
     */
    protected $estimatedGrossProfit = null;

    /**
     * @var SearchDoubleField $estimatedGrossProfitPercent
     */
    protected $estimatedGrossProfitPercent = null;

    /**
     * @var SearchDoubleField $estimatedLaborCost
     */
    protected $estimatedLaborCost = null;

    /**
     * @var SearchDoubleField $estimatedLaborCostBaseline
     */
    protected $estimatedLaborCostBaseline = null;

    /**
     * @var SearchDoubleField $estimatedLaborRevenue
     */
    protected $estimatedLaborRevenue = null;

    /**
     * @var SearchDoubleField $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var SearchDoubleField $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var SearchDoubleField $estimatedTimeOverrideBaseline
     */
    protected $estimatedTimeOverrideBaseline = null;

    /**
     * @var SearchDoubleField $estRevenue
     */
    protected $estRevenue = null;

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
     * @var SearchBooleanField $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var SearchEnumMultiSelectField $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var SearchStringField $image
     */
    protected $image = null;

    /**
     * @var SearchBooleanField $includeCrmTasksInTotals
     */
    protected $includeCrmTasksInTotals = null;

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
     * @var SearchBooleanField $isExemptTime
     */
    protected $isExemptTime = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isProductiveTime
     */
    protected $isProductiveTime = null;

    /**
     * @var SearchBooleanField $isUtilizedTime
     */
    protected $isUtilizedTime = null;

    /**
     * @var SearchEnumMultiSelectField $jobBillingType
     */
    protected $jobBillingType = null;

    /**
     * @var SearchMultiSelectField $jobItem
     */
    protected $jobItem = null;

    /**
     * @var SearchDoubleField $jobPrice
     */
    protected $jobPrice = null;

    /**
     * @var SearchMultiSelectField $jobResource
     */
    protected $jobResource = null;

    /**
     * @var SearchMultiSelectField $jobResourceRole
     */
    protected $jobResourceRole = null;

    /**
     * @var SearchEnumMultiSelectField $language
     */
    protected $language = null;

    /**
     * @var SearchDateField $lastBaselineDate
     */
    protected $lastBaselineDate = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchEnumMultiSelectField $level
     */
    protected $level = null;

    /**
     * @var SearchBooleanField $limitTimeToAssignees
     */
    protected $limitTimeToAssignees = null;

    /**
     * @var SearchBooleanField $materializeTime
     */
    protected $materializeTime = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchLongField $pctComplete
     */
    protected $pctComplete = null;

    /**
     * @var SearchLongField $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var SearchEnumMultiSelectField $permission
     */
    protected $permission = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchStringField $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var SearchDateField $projectedEndDateBaseline
     */
    protected $projectedEndDateBaseline = null;

    /**
     * @var SearchMultiSelectField $projectExpenseType
     */
    protected $projectExpenseType = null;

    /**
     * @var SearchMultiSelectField $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchDateField $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchDoubleField $timeRemaining
     */
    protected $timeRemaining = null;

    /**
     * @var SearchMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchBooleanField $usePercentCompleteOverride
     */
    protected $usePercentCompleteOverride = null;

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
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param SearchStringField $accountNumber
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param SearchDoubleField $actualTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setActualTime($actualTime)
    {
      $this->actualTime = $actualTime;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAddressPhone($addressPhone)
    {
      $this->addressPhone = $addressPhone;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllocatePayrollExpenses()
    {
      return $this->allocatePayrollExpenses;
    }

    /**
     * @param SearchBooleanField $allocatePayrollExpenses
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAllocatePayrollExpenses($allocatePayrollExpenses)
    {
      $this->allocatePayrollExpenses = $allocatePayrollExpenses;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowAllResourcesForTasks()
    {
      return $this->allowAllResourcesForTasks;
    }

    /**
     * @param SearchBooleanField $allowAllResourcesForTasks
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAllowAllResourcesForTasks($allowAllResourcesForTasks)
    {
      $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowExpenses()
    {
      return $this->allowExpenses;
    }

    /**
     * @param SearchBooleanField $allowExpenses
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAllowExpenses($allowExpenses)
    {
      $this->allowExpenses = $allowExpenses;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowTime()
    {
      return $this->allowTime;
    }

    /**
     * @param SearchBooleanField $allowTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAllowTime($allowTime)
    {
      $this->allowTime = $allowTime;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyProjectExpenseTypeToAll()
    {
      return $this->applyProjectExpenseTypeToAll;
    }

    /**
     * @param SearchBooleanField $applyProjectExpenseTypeToAll
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setApplyProjectExpenseTypeToAll($applyProjectExpenseTypeToAll)
    {
      $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCalculatedEndDate()
    {
      return $this->calculatedEndDate;
    }

    /**
     * @param SearchDateField $calculatedEndDate
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCalculatedEndDate($calculatedEndDate)
    {
      $this->calculatedEndDate = $calculatedEndDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCalculatedEndDateBaseline()
    {
      return $this->calculatedEndDateBaseline;
    }

    /**
     * @param SearchDateField $calculatedEndDateBaseline
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCalculatedEndDateBaseline($calculatedEndDateBaseline)
    {
      $this->calculatedEndDateBaseline = $calculatedEndDateBaseline;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchStringField $contact
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstCost()
    {
      return $this->estCost;
    }

    /**
     * @param SearchDoubleField $estCost
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstCost($estCost)
    {
      $this->estCost = $estCost;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEstEndDate()
    {
      return $this->estEndDate;
    }

    /**
     * @param SearchDateField $estEndDate
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstEndDate($estEndDate)
    {
      $this->estEndDate = $estEndDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfit()
    {
      return $this->estimatedGrossProfit;
    }

    /**
     * @param SearchDoubleField $estimatedGrossProfit
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedGrossProfit($estimatedGrossProfit)
    {
      $this->estimatedGrossProfit = $estimatedGrossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfitPercent()
    {
      return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param SearchDoubleField $estimatedGrossProfitPercent
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedGrossProfitPercent($estimatedGrossProfitPercent)
    {
      $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCost()
    {
      return $this->estimatedLaborCost;
    }

    /**
     * @param SearchDoubleField $estimatedLaborCost
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedLaborCost($estimatedLaborCost)
    {
      $this->estimatedLaborCost = $estimatedLaborCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCostBaseline()
    {
      return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedLaborCostBaseline
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedLaborCostBaseline($estimatedLaborCostBaseline)
    {
      $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborRevenue()
    {
      return $this->estimatedLaborRevenue;
    }

    /**
     * @param SearchDoubleField $estimatedLaborRevenue
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedLaborRevenue($estimatedLaborRevenue)
    {
      $this->estimatedLaborRevenue = $estimatedLaborRevenue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param SearchDoubleField $estimatedTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedTime($estimatedTime)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverride
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedTimeOverride($estimatedTimeOverride)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverrideBaseline()
    {
      return $this->estimatedTimeOverrideBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverrideBaseline
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstimatedTimeOverrideBaseline($estimatedTimeOverrideBaseline)
    {
      $this->estimatedTimeOverrideBaseline = $estimatedTimeOverrideBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstRevenue()
    {
      return $this->estRevenue;
    }

    /**
     * @param SearchDoubleField $estRevenue
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setEstRevenue($estRevenue)
    {
      $this->estRevenue = $estRevenue;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeCrmTasksInTotals()
    {
      return $this->includeCrmTasksInTotals;
    }

    /**
     * @param SearchBooleanField $includeCrmTasksInTotals
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIncludeCrmTasksInTotals($includeCrmTasksInTotals)
    {
      $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIsDefaultShipping($isDefaultShipping)
    {
      $this->isDefaultShipping = $isDefaultShipping;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsExemptTime()
    {
      return $this->isExemptTime;
    }

    /**
     * @param SearchBooleanField $isExemptTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIsExemptTime($isExemptTime)
    {
      $this->isExemptTime = $isExemptTime;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsProductiveTime()
    {
      return $this->isProductiveTime;
    }

    /**
     * @param SearchBooleanField $isProductiveTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIsProductiveTime($isProductiveTime)
    {
      $this->isProductiveTime = $isProductiveTime;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsUtilizedTime()
    {
      return $this->isUtilizedTime;
    }

    /**
     * @param SearchBooleanField $isUtilizedTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setIsUtilizedTime($isUtilizedTime)
    {
      $this->isUtilizedTime = $isUtilizedTime;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getJobBillingType()
    {
      return $this->jobBillingType;
    }

    /**
     * @param SearchEnumMultiSelectField $jobBillingType
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setJobBillingType($jobBillingType)
    {
      $this->jobBillingType = $jobBillingType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobItem()
    {
      return $this->jobItem;
    }

    /**
     * @param SearchMultiSelectField $jobItem
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setJobItem($jobItem)
    {
      $this->jobItem = $jobItem;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getJobPrice()
    {
      return $this->jobPrice;
    }

    /**
     * @param SearchDoubleField $jobPrice
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setJobPrice($jobPrice)
    {
      $this->jobPrice = $jobPrice;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobResource()
    {
      return $this->jobResource;
    }

    /**
     * @param SearchMultiSelectField $jobResource
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setJobResource($jobResource)
    {
      $this->jobResource = $jobResource;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobResourceRole()
    {
      return $this->jobResourceRole;
    }

    /**
     * @param SearchMultiSelectField $jobResourceRole
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setJobResourceRole($jobResourceRole)
    {
      $this->jobResourceRole = $jobResourceRole;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBaselineDate()
    {
      return $this->lastBaselineDate;
    }

    /**
     * @param SearchDateField $lastBaselineDate
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setLastBaselineDate($lastBaselineDate)
    {
      $this->lastBaselineDate = $lastBaselineDate;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLimitTimeToAssignees()
    {
      return $this->limitTimeToAssignees;
    }

    /**
     * @param SearchBooleanField $limitTimeToAssignees
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setLimitTimeToAssignees($limitTimeToAssignees)
    {
      $this->limitTimeToAssignees = $limitTimeToAssignees;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMaterializeTime()
    {
      return $this->materializeTime;
    }

    /**
     * @param SearchBooleanField $materializeTime
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setMaterializeTime($materializeTime)
    {
      $this->materializeTime = $materializeTime;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPctComplete()
    {
      return $this->pctComplete;
    }

    /**
     * @param SearchLongField $pctComplete
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setPctComplete($pctComplete)
    {
      $this->pctComplete = $pctComplete;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param SearchLongField $percentTimeComplete
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setPercentTimeComplete($percentTimeComplete)
    {
      $this->percentTimeComplete = $percentTimeComplete;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setPermission($permission)
    {
      $this->permission = $permission;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProjectedEndDateBaseline()
    {
      return $this->projectedEndDateBaseline;
    }

    /**
     * @param SearchDateField $projectedEndDateBaseline
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setProjectedEndDateBaseline($projectedEndDateBaseline)
    {
      $this->projectedEndDateBaseline = $projectedEndDateBaseline;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectExpenseType()
    {
      return $this->projectExpenseType;
    }

    /**
     * @param SearchMultiSelectField $projectExpenseType
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setProjectExpenseType($projectExpenseType)
    {
      $this->projectExpenseType = $projectExpenseType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param SearchMultiSelectField $revRecForecastRule
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateBaseline()
    {
      return $this->startDateBaseline;
    }

    /**
     * @param SearchDateField $startDateBaseline
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setStartDateBaseline($startDateBaseline)
    {
      $this->startDateBaseline = $startDateBaseline;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param SearchDoubleField $timeRemaining
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setTimeRemaining($timeRemaining)
    {
      $this->timeRemaining = $timeRemaining;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchMultiSelectField $type
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsePercentCompleteOverride()
    {
      return $this->usePercentCompleteOverride;
    }

    /**
     * @param SearchBooleanField $usePercentCompleteOverride
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setUsePercentCompleteOverride($usePercentCompleteOverride)
    {
      $this->usePercentCompleteOverride = $usePercentCompleteOverride;
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
     * @return \Nzolt\NetSuite\JobSearchBasic
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
     * @return \Nzolt\NetSuite\JobSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
