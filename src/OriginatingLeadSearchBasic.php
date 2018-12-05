<?php

namespace Nzolt\NetSuite;

class OriginatingLeadSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $accountNumber
     */
    protected $accountNumber = null;

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
     * @var SearchStringField $attention
     */
    protected $attention = null;

    /**
     * @var SearchBooleanField $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchDoubleField $balance
     */
    protected $balance = null;

    /**
     * @var SearchStringField $billAddress
     */
    protected $billAddress = null;

    /**
     * @var SearchDoubleField $boughtAmount
     */
    protected $boughtAmount = null;

    /**
     * @var SearchDateField $boughtDate
     */
    protected $boughtDate = null;

    /**
     * @var SearchMultiSelectField $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var SearchMultiSelectField $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchStringField $ccCustomerCode
     */
    protected $ccCustomerCode = null;

    /**
     * @var SearchBooleanField $ccDefault
     */
    protected $ccDefault = null;

    /**
     * @var SearchDateField $ccExpDate
     */
    protected $ccExpDate = null;

    /**
     * @var SearchStringField $ccHolderName
     */
    protected $ccHolderName = null;

    /**
     * @var SearchStringField $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var SearchMultiSelectField $ccState
     */
    protected $ccState = null;

    /**
     * @var SearchDateField $ccStateFrom
     */
    protected $ccStateFrom = null;

    /**
     * @var SearchMultiSelectField $ccType
     */
    protected $ccType = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchMultiSelectField $classBought
     */
    protected $classBought = null;

    /**
     * @var SearchStringField $comments
     */
    protected $comments = null;

    /**
     * @var SearchStringField $companyName
     */
    protected $companyName = null;

    /**
     * @var SearchDoubleField $consolBalance
     */
    protected $consolBalance = null;

    /**
     * @var SearchLongField $consolDaysOverdue
     */
    protected $consolDaysOverdue = null;

    /**
     * @var SearchDoubleField $consolDepositBalance
     */
    protected $consolDepositBalance = null;

    /**
     * @var SearchDoubleField $consolOverdueBalance
     */
    protected $consolOverdueBalance = null;

    /**
     * @var SearchDoubleField $consolUnbilledOrders
     */
    protected $consolUnbilledOrders = null;

    /**
     * @var SearchStringField $contact
     */
    protected $contact = null;

    /**
     * @var SearchLongField $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchDateField $conversionDate
     */
    protected $conversionDate = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $county
     */
    protected $county = null;

    /**
     * @var SearchEnumMultiSelectField $creditHold
     */
    protected $creditHold = null;

    /**
     * @var SearchBooleanField $creditHoldOverride
     */
    protected $creditHoldOverride = null;

    /**
     * @var SearchDoubleField $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $custStage
     */
    protected $custStage = null;

    /**
     * @var SearchMultiSelectField $custStatus
     */
    protected $custStatus = null;

    /**
     * @var SearchDateField $dateClosed
     */
    protected $dateClosed = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchLongField $daysOverdue
     */
    protected $daysOverdue = null;

    /**
     * @var SearchDoubleField $defaultOrderPriority
     */
    protected $defaultOrderPriority = null;

    /**
     * @var SearchDoubleField $depositBalance
     */
    protected $depositBalance = null;

    /**
     * @var SearchMultiSelectField $deptBought
     */
    protected $deptBought = null;

    /**
     * @var SearchMultiSelectField $drAccount
     */
    protected $drAccount = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchEnumMultiSelectField $emailPreference
     */
    protected $emailPreference = null;

    /**
     * @var SearchBooleanField $emailTransactions
     */
    protected $emailTransactions = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchStringField $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchMultiSelectField $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchDoubleField $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var SearchBooleanField $explicitConversion
     */
    protected $explicitConversion = null;

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
     * @var SearchBooleanField $faxTransactions
     */
    protected $faxTransactions = null;

    /**
     * @var SearchStringField $firstName
     */
    protected $firstName = null;

    /**
     * @var SearchDateField $firstOrderDate
     */
    protected $firstOrderDate = null;

    /**
     * @var SearchDateField $firstSaleDate
     */
    protected $firstSaleDate = null;

    /**
     * @var SearchMultiSelectField $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var SearchDoubleField $fxBalance
     */
    protected $fxBalance = null;

    /**
     * @var SearchDoubleField $fxConsolBalance
     */
    protected $fxConsolBalance = null;

    /**
     * @var SearchDoubleField $fxConsolUnbilledOrders
     */
    protected $fxConsolUnbilledOrders = null;

    /**
     * @var SearchDoubleField $fxUnbilledOrders
     */
    protected $fxUnbilledOrders = null;

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
     * @var SearchMultiSelectField $groupPricingLevel
     */
    protected $groupPricingLevel = null;

    /**
     * @var SearchBooleanField $hasDuplicates
     */
    protected $hasDuplicates = null;

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
     * @var SearchBooleanField $isBudgetApproved
     */
    protected $isBudgetApproved = null;

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
     * @var SearchBooleanField $isPerson
     */
    protected $isPerson = null;

    /**
     * @var SearchBooleanField $isReportedLead
     */
    protected $isReportedLead = null;

    /**
     * @var SearchBooleanField $isShipAddress
     */
    protected $isShipAddress = null;

    /**
     * @var SearchMultiSelectField $itemPricingLevel
     */
    protected $itemPricingLevel = null;

    /**
     * @var SearchDoubleField $itemPricingUnitPrice
     */
    protected $itemPricingUnitPrice = null;

    /**
     * @var SearchMultiSelectField $itemsBought
     */
    protected $itemsBought = null;

    /**
     * @var SearchMultiSelectField $itemsOrdered
     */
    protected $itemsOrdered = null;

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
     * @var SearchDateField $lastOrderDate
     */
    protected $lastOrderDate = null;

    /**
     * @var SearchDateField $lastSaleDate
     */
    protected $lastSaleDate = null;

    /**
     * @var SearchDateField $leadDate
     */
    protected $leadDate = null;

    /**
     * @var SearchMultiSelectField $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchEnumMultiSelectField $level
     */
    protected $level = null;

    /**
     * @var SearchMultiSelectField $locationBought
     */
    protected $locationBought = null;

    /**
     * @var SearchBooleanField $manualCreditHold
     */
    protected $manualCreditHold = null;

    /**
     * @var SearchMultiSelectField $merchantAccount
     */
    protected $merchantAccount = null;

    /**
     * @var SearchStringField $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchEnumMultiSelectField $monthlyClosing
     */
    protected $monthlyClosing = null;

    /**
     * @var SearchBooleanField $onCreditHold
     */
    protected $onCreditHold = null;

    /**
     * @var SearchDoubleField $orderedAmount
     */
    protected $orderedAmount = null;

    /**
     * @var SearchDateField $orderedDate
     */
    protected $orderedDate = null;

    /**
     * @var SearchEnumMultiSelectField $otherRelationships
     */
    protected $otherRelationships = null;

    /**
     * @var SearchDoubleField $overdueBalance
     */
    protected $overdueBalance = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchMultiSelectField $parentItemsBought
     */
    protected $parentItemsBought = null;

    /**
     * @var SearchMultiSelectField $parentItemsOrdered
     */
    protected $parentItemsOrdered = null;

    /**
     * @var SearchMultiSelectField $partner
     */
    protected $partner = null;

    /**
     * @var SearchLongField $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchMultiSelectField $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchMultiSelectField $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var SearchStringField $pec
     */
    protected $pec = null;

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
     * @var SearchMultiSelectField $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchMultiSelectField $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var SearchMultiSelectField $pricingItem
     */
    protected $pricingItem = null;

    /**
     * @var SearchBooleanField $printTransactions
     */
    protected $printTransactions = null;

    /**
     * @var SearchDateField $prospectDate
     */
    protected $prospectDate = null;

    /**
     * @var SearchBooleanField $pstExempt
     */
    protected $pstExempt = null;

    /**
     * @var SearchMultiSelectField $receivablesAccount
     */
    protected $receivablesAccount = null;

    /**
     * @var SearchDateField $reminderDate
     */
    protected $reminderDate = null;

    /**
     * @var SearchStringField $resaleNumber
     */
    protected $resaleNumber = null;

    /**
     * @var SearchMultiSelectField $role
     */
    protected $role = null;

    /**
     * @var SearchMultiSelectField $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var SearchMultiSelectField $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchMultiSelectField $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchMultiSelectField $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchStringField $salutation
     */
    protected $salutation = null;

    /**
     * @var SearchStringField $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var SearchBooleanField $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var SearchMultiSelectField $shippingItem
     */
    protected $shippingItem = null;

    /**
     * @var SearchMultiSelectField $stage
     */
    protected $stage = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $subsidBought
     */
    protected $subsidBought = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchBooleanField $taxable
     */
    protected $taxable = null;

    /**
     * @var SearchMultiSelectField $terms
     */
    protected $terms = null;

    /**
     * @var SearchMultiSelectField $territory
     */
    protected $territory = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchDoubleField $unbilledOrders
     */
    protected $unbilledOrders = null;

    /**
     * @var SearchStringField $url
     */
    protected $url = null;

    /**
     * @var SearchStringField $vatRegNumber
     */
    protected $vatRegNumber = null;

    /**
     * @var SearchBooleanField $webLead
     */
    protected $webLead = null;

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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setAddressPhone($addressPhone)
    {
      $this->addressPhone = $addressPhone;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchBooleanField $availableOffline
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setAvailableOffline($availableOffline)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param SearchDoubleField $balance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBillAddress($billAddress)
    {
      $this->billAddress = $billAddress;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBoughtAmount()
    {
      return $this->boughtAmount;
    }

    /**
     * @param SearchDoubleField $boughtAmount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBoughtAmount($boughtAmount)
    {
      $this->boughtAmount = $boughtAmount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBoughtDate()
    {
      return $this->boughtDate;
    }

    /**
     * @param SearchDateField $boughtDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBoughtDate($boughtDate)
    {
      $this->boughtDate = $boughtDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param SearchMultiSelectField $buyingReason
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBuyingReason($buyingReason)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setBuyingTimeFrame($buyingTimeFrame)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcCustomerCode()
    {
      return $this->ccCustomerCode;
    }

    /**
     * @param SearchStringField $ccCustomerCode
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcCustomerCode($ccCustomerCode)
    {
      $this->ccCustomerCode = $ccCustomerCode;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCcDefault()
    {
      return $this->ccDefault;
    }

    /**
     * @param SearchBooleanField $ccDefault
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcDefault($ccDefault)
    {
      $this->ccDefault = $ccDefault;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcExpDate()
    {
      return $this->ccExpDate;
    }

    /**
     * @param SearchDateField $ccExpDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcExpDate($ccExpDate)
    {
      $this->ccExpDate = $ccExpDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcHolderName()
    {
      return $this->ccHolderName;
    }

    /**
     * @param SearchStringField $ccHolderName
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcHolderName($ccHolderName)
    {
      $this->ccHolderName = $ccHolderName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param SearchStringField $ccNumber
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCcState()
    {
      return $this->ccState;
    }

    /**
     * @param SearchMultiSelectField $ccState
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcState($ccState)
    {
      $this->ccState = $ccState;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcStateFrom()
    {
      return $this->ccStateFrom;
    }

    /**
     * @param SearchDateField $ccStateFrom
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcStateFrom($ccStateFrom)
    {
      $this->ccStateFrom = $ccStateFrom;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCcType()
    {
      return $this->ccType;
    }

    /**
     * @param SearchMultiSelectField $ccType
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCcType($ccType)
    {
      $this->ccType = $ccType;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClassBought()
    {
      return $this->classBought;
    }

    /**
     * @param SearchMultiSelectField $classBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setClassBought($classBought)
    {
      $this->classBought = $classBought;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param SearchStringField $companyName
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolBalance()
    {
      return $this->consolBalance;
    }

    /**
     * @param SearchDoubleField $consolBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConsolBalance($consolBalance)
    {
      $this->consolBalance = $consolBalance;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getConsolDaysOverdue()
    {
      return $this->consolDaysOverdue;
    }

    /**
     * @param SearchLongField $consolDaysOverdue
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConsolDaysOverdue($consolDaysOverdue)
    {
      $this->consolDaysOverdue = $consolDaysOverdue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolDepositBalance()
    {
      return $this->consolDepositBalance;
    }

    /**
     * @param SearchDoubleField $consolDepositBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConsolDepositBalance($consolDepositBalance)
    {
      $this->consolDepositBalance = $consolDepositBalance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolOverdueBalance()
    {
      return $this->consolOverdueBalance;
    }

    /**
     * @param SearchDoubleField $consolOverdueBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConsolOverdueBalance($consolOverdueBalance)
    {
      $this->consolOverdueBalance = $consolOverdueBalance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolUnbilledOrders()
    {
      return $this->consolUnbilledOrders;
    }

    /**
     * @param SearchDoubleField $consolUnbilledOrders
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConsolUnbilledOrders($consolUnbilledOrders)
    {
      $this->consolUnbilledOrders = $consolUnbilledOrders;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchLongField $contribution
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getConversionDate()
    {
      return $this->conversionDate;
    }

    /**
     * @param SearchDateField $conversionDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setConversionDate($conversionDate)
    {
      $this->conversionDate = $conversionDate;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCreditHold()
    {
      return $this->creditHold;
    }

    /**
     * @param SearchEnumMultiSelectField $creditHold
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCreditHold($creditHold)
    {
      $this->creditHold = $creditHold;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCreditHoldOverride()
    {
      return $this->creditHoldOverride;
    }

    /**
     * @param SearchBooleanField $creditHoldOverride
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCreditHoldOverride($creditHoldOverride)
    {
      $this->creditHoldOverride = $creditHoldOverride;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditLimit()
    {
      return $this->creditLimit;
    }

    /**
     * @param SearchDoubleField $creditLimit
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCreditLimit($creditLimit)
    {
      $this->creditLimit = $creditLimit;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustStage()
    {
      return $this->custStage;
    }

    /**
     * @param SearchMultiSelectField $custStage
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCustStage($custStage)
    {
      $this->custStage = $custStage;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustStatus()
    {
      return $this->custStatus;
    }

    /**
     * @param SearchMultiSelectField $custStatus
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCustStatus($custStatus)
    {
      $this->custStatus = $custStatus;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateClosed()
    {
      return $this->dateClosed;
    }

    /**
     * @param SearchDateField $dateClosed
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDateClosed($dateClosed)
    {
      $this->dateClosed = $dateClosed;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOverdue()
    {
      return $this->daysOverdue;
    }

    /**
     * @param SearchLongField $daysOverdue
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDaysOverdue($daysOverdue)
    {
      $this->daysOverdue = $daysOverdue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDefaultOrderPriority()
    {
      return $this->defaultOrderPriority;
    }

    /**
     * @param SearchDoubleField $defaultOrderPriority
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDefaultOrderPriority($defaultOrderPriority)
    {
      $this->defaultOrderPriority = $defaultOrderPriority;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDepositBalance()
    {
      return $this->depositBalance;
    }

    /**
     * @param SearchDoubleField $depositBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDepositBalance($depositBalance)
    {
      $this->depositBalance = $depositBalance;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeptBought()
    {
      return $this->deptBought;
    }

    /**
     * @param SearchMultiSelectField $deptBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDeptBought($deptBought)
    {
      $this->deptBought = $deptBought;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param SearchMultiSelectField $drAccount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setDrAccount($drAccount)
    {
      $this->drAccount = $drAccount;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEmailPreference()
    {
      return $this->emailPreference;
    }

    /**
     * @param SearchEnumMultiSelectField $emailPreference
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEmailPreference($emailPreference)
    {
      $this->emailPreference = $emailPreference;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEmailTransactions()
    {
      return $this->emailTransactions;
    }

    /**
     * @param SearchBooleanField $emailTransactions
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEmailTransactions($emailTransactions)
    {
      $this->emailTransactions = $emailTransactions;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param SearchDoubleField $estimatedBudget
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setEstimatedBudget($estimatedBudget)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExplicitConversion()
    {
      return $this->explicitConversion;
    }

    /**
     * @param SearchBooleanField $explicitConversion
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setExplicitConversion($explicitConversion)
    {
      $this->explicitConversion = $explicitConversion;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFaxTransactions()
    {
      return $this->faxTransactions;
    }

    /**
     * @param SearchBooleanField $faxTransactions
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFaxTransactions($faxTransactions)
    {
      $this->faxTransactions = $faxTransactions;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFirstOrderDate()
    {
      return $this->firstOrderDate;
    }

    /**
     * @param SearchDateField $firstOrderDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFirstOrderDate($firstOrderDate)
    {
      $this->firstOrderDate = $firstOrderDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFirstSaleDate()
    {
      return $this->firstSaleDate;
    }

    /**
     * @param SearchDateField $firstSaleDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFirstSaleDate($firstSaleDate)
    {
      $this->firstSaleDate = $firstSaleDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param SearchMultiSelectField $fxAccount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFxAccount($fxAccount)
    {
      $this->fxAccount = $fxAccount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxBalance()
    {
      return $this->fxBalance;
    }

    /**
     * @param SearchDoubleField $fxBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFxBalance($fxBalance)
    {
      $this->fxBalance = $fxBalance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxConsolBalance()
    {
      return $this->fxConsolBalance;
    }

    /**
     * @param SearchDoubleField $fxConsolBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFxConsolBalance($fxConsolBalance)
    {
      $this->fxConsolBalance = $fxConsolBalance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxConsolUnbilledOrders()
    {
      return $this->fxConsolUnbilledOrders;
    }

    /**
     * @param SearchDoubleField $fxConsolUnbilledOrders
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFxConsolUnbilledOrders($fxConsolUnbilledOrders)
    {
      $this->fxConsolUnbilledOrders = $fxConsolUnbilledOrders;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxUnbilledOrders()
    {
      return $this->fxUnbilledOrders;
    }

    /**
     * @param SearchDoubleField $fxUnbilledOrders
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setFxUnbilledOrders($fxUnbilledOrders)
    {
      $this->fxUnbilledOrders = $fxUnbilledOrders;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupPricingLevel()
    {
      return $this->groupPricingLevel;
    }

    /**
     * @param SearchMultiSelectField $groupPricingLevel
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setGroupPricingLevel($groupPricingLevel)
    {
      $this->groupPricingLevel = $groupPricingLevel;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasDuplicates()
    {
      return $this->hasDuplicates;
    }

    /**
     * @param SearchBooleanField $hasDuplicates
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setHasDuplicates($hasDuplicates)
    {
      $this->hasDuplicates = $hasDuplicates;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param SearchBooleanField $isBudgetApproved
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setIsBudgetApproved($isBudgetApproved)
    {
      $this->isBudgetApproved = $isBudgetApproved;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPerson()
    {
      return $this->isPerson;
    }

    /**
     * @param SearchBooleanField $isPerson
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setIsPerson($isPerson)
    {
      $this->isPerson = $isPerson;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReportedLead()
    {
      return $this->isReportedLead;
    }

    /**
     * @param SearchBooleanField $isReportedLead
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setIsReportedLead($isReportedLead)
    {
      $this->isReportedLead = $isReportedLead;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsShipAddress()
    {
      return $this->isShipAddress;
    }

    /**
     * @param SearchBooleanField $isShipAddress
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setIsShipAddress($isShipAddress)
    {
      $this->isShipAddress = $isShipAddress;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemPricingLevel()
    {
      return $this->itemPricingLevel;
    }

    /**
     * @param SearchMultiSelectField $itemPricingLevel
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setItemPricingLevel($itemPricingLevel)
    {
      $this->itemPricingLevel = $itemPricingLevel;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getItemPricingUnitPrice()
    {
      return $this->itemPricingUnitPrice;
    }

    /**
     * @param SearchDoubleField $itemPricingUnitPrice
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setItemPricingUnitPrice($itemPricingUnitPrice)
    {
      $this->itemPricingUnitPrice = $itemPricingUnitPrice;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemsBought()
    {
      return $this->itemsBought;
    }

    /**
     * @param SearchMultiSelectField $itemsBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setItemsBought($itemsBought)
    {
      $this->itemsBought = $itemsBought;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemsOrdered()
    {
      return $this->itemsOrdered;
    }

    /**
     * @param SearchMultiSelectField $itemsOrdered
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setItemsOrdered($itemsOrdered)
    {
      $this->itemsOrdered = $itemsOrdered;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastOrderDate()
    {
      return $this->lastOrderDate;
    }

    /**
     * @param SearchDateField $lastOrderDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLastOrderDate($lastOrderDate)
    {
      $this->lastOrderDate = $lastOrderDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastSaleDate()
    {
      return $this->lastSaleDate;
    }

    /**
     * @param SearchDateField $lastSaleDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLastSaleDate($lastSaleDate)
    {
      $this->lastSaleDate = $lastSaleDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLeadDate()
    {
      return $this->leadDate;
    }

    /**
     * @param SearchDateField $leadDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLeadDate($leadDate)
    {
      $this->leadDate = $leadDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchMultiSelectField $leadSource
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocationBought()
    {
      return $this->locationBought;
    }

    /**
     * @param SearchMultiSelectField $locationBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setLocationBought($locationBought)
    {
      $this->locationBought = $locationBought;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getManualCreditHold()
    {
      return $this->manualCreditHold;
    }

    /**
     * @param SearchBooleanField $manualCreditHold
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setManualCreditHold($manualCreditHold)
    {
      $this->manualCreditHold = $manualCreditHold;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMerchantAccount()
    {
      return $this->merchantAccount;
    }

    /**
     * @param SearchMultiSelectField $merchantAccount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setMerchantAccount($merchantAccount)
    {
      $this->merchantAccount = $merchantAccount;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getMonthlyClosing()
    {
      return $this->monthlyClosing;
    }

    /**
     * @param SearchEnumMultiSelectField $monthlyClosing
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setMonthlyClosing($monthlyClosing)
    {
      $this->monthlyClosing = $monthlyClosing;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOnCreditHold()
    {
      return $this->onCreditHold;
    }

    /**
     * @param SearchBooleanField $onCreditHold
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setOnCreditHold($onCreditHold)
    {
      $this->onCreditHold = $onCreditHold;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrderedAmount()
    {
      return $this->orderedAmount;
    }

    /**
     * @param SearchDoubleField $orderedAmount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setOrderedAmount($orderedAmount)
    {
      $this->orderedAmount = $orderedAmount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getOrderedDate()
    {
      return $this->orderedDate;
    }

    /**
     * @param SearchDateField $orderedDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setOrderedDate($orderedDate)
    {
      $this->orderedDate = $orderedDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOtherRelationships()
    {
      return $this->otherRelationships;
    }

    /**
     * @param SearchEnumMultiSelectField $otherRelationships
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setOtherRelationships($otherRelationships)
    {
      $this->otherRelationships = $otherRelationships;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOverdueBalance()
    {
      return $this->overdueBalance;
    }

    /**
     * @param SearchDoubleField $overdueBalance
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setOverdueBalance($overdueBalance)
    {
      $this->overdueBalance = $overdueBalance;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentItemsBought()
    {
      return $this->parentItemsBought;
    }

    /**
     * @param SearchMultiSelectField $parentItemsBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setParentItemsBought($parentItemsBought)
    {
      $this->parentItemsBought = $parentItemsBought;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentItemsOrdered()
    {
      return $this->parentItemsOrdered;
    }

    /**
     * @param SearchMultiSelectField $parentItemsOrdered
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setParentItemsOrdered($parentItemsOrdered)
    {
      $this->parentItemsOrdered = $parentItemsOrdered;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchLongField $partnerContribution
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPartnerContribution($partnerContribution)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchMultiSelectField $partnerRole
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPartnerRole($partnerRole)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchMultiSelectField $partnerTeamMember
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPartnerTeamMember($partnerTeamMember)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPec()
    {
      return $this->pec;
    }

    /**
     * @param SearchStringField $pec
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPec($pec)
    {
      $this->pec = $pec;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param SearchMultiSelectField $pricingGroup
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPricingItem()
    {
      return $this->pricingItem;
    }

    /**
     * @param SearchMultiSelectField $pricingItem
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPricingItem($pricingItem)
    {
      $this->pricingItem = $pricingItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrintTransactions()
    {
      return $this->printTransactions;
    }

    /**
     * @param SearchBooleanField $printTransactions
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPrintTransactions($printTransactions)
    {
      $this->printTransactions = $printTransactions;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProspectDate()
    {
      return $this->prospectDate;
    }

    /**
     * @param SearchDateField $prospectDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setProspectDate($prospectDate)
    {
      $this->prospectDate = $prospectDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPstExempt()
    {
      return $this->pstExempt;
    }

    /**
     * @param SearchBooleanField $pstExempt
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setPstExempt($pstExempt)
    {
      $this->pstExempt = $pstExempt;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param SearchMultiSelectField $receivablesAccount
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setReceivablesAccount($receivablesAccount)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReminderDate()
    {
      return $this->reminderDate;
    }

    /**
     * @param SearchDateField $reminderDate
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setReminderDate($reminderDate)
    {
      $this->reminderDate = $reminderDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResaleNumber()
    {
      return $this->resaleNumber;
    }

    /**
     * @param SearchStringField $resaleNumber
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setResaleNumber($resaleNumber)
    {
      $this->resaleNumber = $resaleNumber;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param SearchMultiSelectField $salesReadiness
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSalesReadiness($salesReadiness)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchMultiSelectField $salesTeamMember
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSalesTeamMember($salesTeamMember)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchMultiSelectField $salesTeamRole
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSalesTeamRole($salesTeamRole)
    {
      $this->salesTeamRole = $salesTeamRole;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSalutation($salutation)
    {
      $this->salutation = $salutation;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param SearchStringField $shipAddress
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param SearchBooleanField $shipComplete
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setShipComplete($shipComplete)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShippingItem()
    {
      return $this->shippingItem;
    }

    /**
     * @param SearchMultiSelectField $shippingItem
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setShippingItem($shippingItem)
    {
      $this->shippingItem = $shippingItem;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchMultiSelectField $stage
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidBought()
    {
      return $this->subsidBought;
    }

    /**
     * @param SearchMultiSelectField $subsidBought
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSubsidBought($subsidBought)
    {
      $this->subsidBought = $subsidBought;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxable()
    {
      return $this->taxable;
    }

    /**
     * @param SearchBooleanField $taxable
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setTaxable($taxable)
    {
      $this->taxable = $taxable;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param SearchMultiSelectField $terms
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerritory()
    {
      return $this->territory;
    }

    /**
     * @param SearchMultiSelectField $territory
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setTerritory($territory)
    {
      $this->territory = $territory;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnbilledOrders()
    {
      return $this->unbilledOrders;
    }

    /**
     * @param SearchDoubleField $unbilledOrders
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setUnbilledOrders($unbilledOrders)
    {
      $this->unbilledOrders = $unbilledOrders;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVatRegNumber()
    {
      return $this->vatRegNumber;
    }

    /**
     * @param SearchStringField $vatRegNumber
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setVatRegNumber($vatRegNumber)
    {
      $this->vatRegNumber = $vatRegNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getWebLead()
    {
      return $this->webLead;
    }

    /**
     * @param SearchBooleanField $webLead
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setWebLead($webLead)
    {
      $this->webLead = $webLead;
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
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
     * @return \Nzolt\NetSuite\OriginatingLeadSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
