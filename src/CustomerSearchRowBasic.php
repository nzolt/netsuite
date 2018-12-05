<?php

namespace Nzolt\NetSuite;

class CustomerSearchRowBasic extends SearchRowBasic
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
     * @var SearchColumnBooleanField[] $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchColumnDoubleField[] $balance
     */
    protected $balance = null;

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
     * @var SearchColumnStringField[] $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var SearchColumnStringField[] $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var SearchColumnSelectField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnStringField[] $ccCustomerCode
     */
    protected $ccCustomerCode = null;

    /**
     * @var SearchColumnBooleanField[] $ccDefault
     */
    protected $ccDefault = null;

    /**
     * @var SearchColumnDateField[] $ccExpDate
     */
    protected $ccExpDate = null;

    /**
     * @var SearchColumnStringField[] $ccHolderName
     */
    protected $ccHolderName = null;

    /**
     * @var SearchColumnStringField[] $ccInternalId
     */
    protected $ccInternalId = null;

    /**
     * @var SearchColumnStringField[] $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var SearchColumnSelectField[] $ccState
     */
    protected $ccState = null;

    /**
     * @var SearchColumnDateField[] $ccStateFrom
     */
    protected $ccStateFrom = null;

    /**
     * @var SearchColumnSelectField[] $ccType
     */
    protected $ccType = null;

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
     * @var SearchColumnDoubleField[] $consolBalance
     */
    protected $consolBalance = null;

    /**
     * @var SearchColumnLongField[] $consolDaysOverdue
     */
    protected $consolDaysOverdue = null;

    /**
     * @var SearchColumnDoubleField[] $consolDepositBalance
     */
    protected $consolDepositBalance = null;

    /**
     * @var SearchColumnDoubleField[] $consolOverdueBalance
     */
    protected $consolOverdueBalance = null;

    /**
     * @var SearchColumnDoubleField[] $consolUnbilledOrders
     */
    protected $consolUnbilledOrders = null;

    /**
     * @var SearchColumnStringField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnDoubleField[] $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchColumnDoubleField[] $contributionPrimary
     */
    protected $contributionPrimary = null;

    /**
     * @var SearchColumnDateField[] $conversionDate
     */
    protected $conversionDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var SearchColumnEnumSelectField[] $creditHold
     */
    protected $creditHold = null;

    /**
     * @var SearchColumnBooleanField[] $creditHoldOverride
     */
    protected $creditHoldOverride = null;

    /**
     * @var SearchColumnDoubleField[] $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnDateField[] $dateClosed
     */
    protected $dateClosed = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnLongField[] $daysOverdue
     */
    protected $daysOverdue = null;

    /**
     * @var SearchColumnDoubleField[] $defaultOrderPriority
     */
    protected $defaultOrderPriority = null;

    /**
     * @var SearchColumnDoubleField[] $depositBalance
     */
    protected $depositBalance = null;

    /**
     * @var SearchColumnStringField[] $drAccount
     */
    protected $drAccount = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnEnumSelectField[] $emailPreference
     */
    protected $emailPreference = null;

    /**
     * @var SearchColumnBooleanField[] $emailTransactions
     */
    protected $emailTransactions = null;

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
     * @var SearchColumnDoubleField[] $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var SearchColumnBooleanField[] $explicitConversion
     */
    protected $explicitConversion = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fax
     */
    protected $fax = null;

    /**
     * @var SearchColumnBooleanField[] $faxTransactions
     */
    protected $faxTransactions = null;

    /**
     * @var SearchColumnStringField[] $firstName
     */
    protected $firstName = null;

    /**
     * @var SearchColumnDateField[] $firstOrderDate
     */
    protected $firstOrderDate = null;

    /**
     * @var SearchColumnDateField[] $firstSaleDate
     */
    protected $firstSaleDate = null;

    /**
     * @var SearchColumnStringField[] $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var SearchColumnDoubleField[] $fxBalance
     */
    protected $fxBalance = null;

    /**
     * @var SearchColumnDoubleField[] $fxConsolBalance
     */
    protected $fxConsolBalance = null;

    /**
     * @var SearchColumnDoubleField[] $fxConsolUnbilledOrders
     */
    protected $fxConsolUnbilledOrders = null;

    /**
     * @var SearchColumnDoubleField[] $fxUnbilledOrders
     */
    protected $fxUnbilledOrders = null;

    /**
     * @var SearchColumnBooleanField[] $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var SearchColumnEnumSelectField[] $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var SearchColumnStringField[] $groupPricingLevel
     */
    protected $groupPricingLevel = null;

    /**
     * @var SearchColumnBooleanField[] $hasDuplicates
     */
    protected $hasDuplicates = null;

    /**
     * @var SearchColumnStringField[] $homePhone
     */
    protected $homePhone = null;

    /**
     * @var SearchColumnSelectField[] $image
     */
    protected $image = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isBudgetApproved
     */
    protected $isBudgetApproved = null;

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
     * @var SearchColumnBooleanField[] $isPerson
     */
    protected $isPerson = null;

    /**
     * @var SearchColumnBooleanField[] $isShipAddress
     */
    protected $isShipAddress = null;

    /**
     * @var SearchColumnStringField[] $itemPricingLevel
     */
    protected $itemPricingLevel = null;

    /**
     * @var SearchColumnDoubleField[] $itemPricingUnitPrice
     */
    protected $itemPricingUnitPrice = null;

    /**
     * @var SearchColumnDateField[] $jobEndDate
     */
    protected $jobEndDate = null;

    /**
     * @var SearchColumnDateField[] $jobProjectedEnd
     */
    protected $jobProjectedEnd = null;

    /**
     * @var SearchColumnDateField[] $jobStartDate
     */
    protected $jobStartDate = null;

    /**
     * @var SearchColumnSelectField[] $jobType
     */
    protected $jobType = null;

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
     * @var SearchColumnDateField[] $lastOrderDate
     */
    protected $lastOrderDate = null;

    /**
     * @var SearchColumnDateField[] $lastSaleDate
     */
    protected $lastSaleDate = null;

    /**
     * @var SearchColumnDateField[] $leadDate
     */
    protected $leadDate = null;

    /**
     * @var SearchColumnSelectField[] $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchColumnEnumSelectField[] $level
     */
    protected $level = null;

    /**
     * @var SearchColumnBooleanField[] $manualCreditHold
     */
    protected $manualCreditHold = null;

    /**
     * @var SearchColumnStringField[] $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchColumnStringField[] $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var SearchColumnEnumSelectField[] $monthlyClosing
     */
    protected $monthlyClosing = null;

    /**
     * @var SearchColumnBooleanField[] $onCreditHold
     */
    protected $onCreditHold = null;

    /**
     * @var SearchColumnDoubleField[] $overdueBalance
     */
    protected $overdueBalance = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnSelectField[] $partner
     */
    protected $partner = null;

    /**
     * @var SearchColumnDoubleField[] $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchColumnStringField[] $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchColumnSelectField[] $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var SearchColumnStringField[] $pec
     */
    protected $pec = null;

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
     * @var SearchColumnSelectField[] $prefCCProcessor
     */
    protected $prefCCProcessor = null;

    /**
     * @var SearchColumnSelectField[] $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchColumnStringField[] $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var SearchColumnStringField[] $pricingItem
     */
    protected $pricingItem = null;

    /**
     * @var SearchColumnBooleanField[] $printTransactions
     */
    protected $printTransactions = null;

    /**
     * @var SearchColumnDateField[] $prospectDate
     */
    protected $prospectDate = null;

    /**
     * @var SearchColumnStringField[] $receivablesAccount
     */
    protected $receivablesAccount = null;

    /**
     * @var SearchColumnLongField[] $reminderDays
     */
    protected $reminderDays = null;

    /**
     * @var SearchColumnStringField[] $resaleNumber
     */
    protected $resaleNumber = null;

    /**
     * @var SearchColumnStringField[] $role
     */
    protected $role = null;

    /**
     * @var SearchColumnStringField[] $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var SearchColumnSelectField[] $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchColumnStringField[] $salutation
     */
    protected $salutation = null;

    /**
     * @var SearchColumnStringField[] $shipAddress
     */
    protected $shipAddress = null;

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
     * @var SearchColumnBooleanField[] $shipComplete
     */
    protected $shipComplete = null;

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
     * @var SearchColumnSelectField[] $shippingItem
     */
    protected $shippingItem = null;

    /**
     * @var SearchColumnStringField[] $shipState
     */
    protected $shipState = null;

    /**
     * @var SearchColumnStringField[] $shipZip
     */
    protected $shipZip = null;

    /**
     * @var SearchColumnEnumSelectField[] $stage
     */
    protected $stage = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

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
     * @var SearchColumnBooleanField[] $taxable
     */
    protected $taxable = null;

    /**
     * @var SearchColumnSelectField[] $taxItem
     */
    protected $taxItem = null;

    /**
     * @var SearchColumnSelectField[] $terms
     */
    protected $terms = null;

    /**
     * @var SearchColumnSelectField[] $territory
     */
    protected $territory = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnDoubleField[] $unbilledOrders
     */
    protected $unbilledOrders = null;

    /**
     * @var SearchColumnStringField[] $url
     */
    protected $url = null;

    /**
     * @var SearchColumnStringField[] $vatRegNumber
     */
    protected $vatRegNumber = null;

    /**
     * @var SearchColumnBooleanField[] $webLead
     */
    protected $webLead = null;

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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setAddressPhone(array $addressPhone = null)
    {
      $this->addressPhone = $addressPhone;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setAttention(array $attention = null)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setAvailableOffline(array $availableOffline = null)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setBalance(array $balance = null)
    {
      $this->balance = $balance;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setBillCountryCode(array $billCountryCode = null)
    {
      $this->billCountryCode = $billCountryCode;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setBillZipCode(array $billZipCode = null)
    {
      $this->billZipCode = $billZipCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param SearchColumnStringField[] $buyingReason
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setBuyingReason(array $buyingReason = null)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param SearchColumnStringField[] $buyingTimeFrame
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setBuyingTimeFrame(array $buyingTimeFrame = null)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcCustomerCode()
    {
      return $this->ccCustomerCode;
    }

    /**
     * @param SearchColumnStringField[] $ccCustomerCode
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcCustomerCode(array $ccCustomerCode = null)
    {
      $this->ccCustomerCode = $ccCustomerCode;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCcDefault()
    {
      return $this->ccDefault;
    }

    /**
     * @param SearchColumnBooleanField[] $ccDefault
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcDefault(array $ccDefault = null)
    {
      $this->ccDefault = $ccDefault;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCcExpDate()
    {
      return $this->ccExpDate;
    }

    /**
     * @param SearchColumnDateField[] $ccExpDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcExpDate(array $ccExpDate = null)
    {
      $this->ccExpDate = $ccExpDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcHolderName()
    {
      return $this->ccHolderName;
    }

    /**
     * @param SearchColumnStringField[] $ccHolderName
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcHolderName(array $ccHolderName = null)
    {
      $this->ccHolderName = $ccHolderName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcInternalId()
    {
      return $this->ccInternalId;
    }

    /**
     * @param SearchColumnStringField[] $ccInternalId
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcInternalId(array $ccInternalId = null)
    {
      $this->ccInternalId = $ccInternalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param SearchColumnStringField[] $ccNumber
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcNumber(array $ccNumber = null)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCcState()
    {
      return $this->ccState;
    }

    /**
     * @param SearchColumnSelectField[] $ccState
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcState(array $ccState = null)
    {
      $this->ccState = $ccState;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCcStateFrom()
    {
      return $this->ccStateFrom;
    }

    /**
     * @param SearchColumnDateField[] $ccStateFrom
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcStateFrom(array $ccStateFrom = null)
    {
      $this->ccStateFrom = $ccStateFrom;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCcType()
    {
      return $this->ccType;
    }

    /**
     * @param SearchColumnSelectField[] $ccType
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCcType(array $ccType = null)
    {
      $this->ccType = $ccType;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCompanyName(array $companyName = null)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolBalance()
    {
      return $this->consolBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $consolBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConsolBalance(array $consolBalance = null)
    {
      $this->consolBalance = $consolBalance;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getConsolDaysOverdue()
    {
      return $this->consolDaysOverdue;
    }

    /**
     * @param SearchColumnLongField[] $consolDaysOverdue
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConsolDaysOverdue(array $consolDaysOverdue = null)
    {
      $this->consolDaysOverdue = $consolDaysOverdue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolDepositBalance()
    {
      return $this->consolDepositBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $consolDepositBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConsolDepositBalance(array $consolDepositBalance = null)
    {
      $this->consolDepositBalance = $consolDepositBalance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolOverdueBalance()
    {
      return $this->consolOverdueBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $consolOverdueBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConsolOverdueBalance(array $consolOverdueBalance = null)
    {
      $this->consolOverdueBalance = $consolOverdueBalance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolUnbilledOrders()
    {
      return $this->consolUnbilledOrders;
    }

    /**
     * @param SearchColumnDoubleField[] $consolUnbilledOrders
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConsolUnbilledOrders(array $consolUnbilledOrders = null)
    {
      $this->consolUnbilledOrders = $consolUnbilledOrders;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setContribution(array $contribution = null)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContributionPrimary()
    {
      return $this->contributionPrimary;
    }

    /**
     * @param SearchColumnDoubleField[] $contributionPrimary
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setContributionPrimary(array $contributionPrimary = null)
    {
      $this->contributionPrimary = $contributionPrimary;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getConversionDate()
    {
      return $this->conversionDate;
    }

    /**
     * @param SearchColumnDateField[] $conversionDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setConversionDate(array $conversionDate = null)
    {
      $this->conversionDate = $conversionDate;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCreditHold()
    {
      return $this->creditHold;
    }

    /**
     * @param SearchColumnEnumSelectField[] $creditHold
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCreditHold(array $creditHold = null)
    {
      $this->creditHold = $creditHold;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreditHoldOverride()
    {
      return $this->creditHoldOverride;
    }

    /**
     * @param SearchColumnBooleanField[] $creditHoldOverride
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCreditHoldOverride(array $creditHoldOverride = null)
    {
      $this->creditHoldOverride = $creditHoldOverride;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditLimit()
    {
      return $this->creditLimit;
    }

    /**
     * @param SearchColumnDoubleField[] $creditLimit
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCreditLimit(array $creditLimit = null)
    {
      $this->creditLimit = $creditLimit;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateClosed()
    {
      return $this->dateClosed;
    }

    /**
     * @param SearchColumnDateField[] $dateClosed
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDateClosed(array $dateClosed = null)
    {
      $this->dateClosed = $dateClosed;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOverdue()
    {
      return $this->daysOverdue;
    }

    /**
     * @param SearchColumnLongField[] $daysOverdue
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDaysOverdue(array $daysOverdue = null)
    {
      $this->daysOverdue = $daysOverdue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDefaultOrderPriority()
    {
      return $this->defaultOrderPriority;
    }

    /**
     * @param SearchColumnDoubleField[] $defaultOrderPriority
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDefaultOrderPriority(array $defaultOrderPriority = null)
    {
      $this->defaultOrderPriority = $defaultOrderPriority;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDepositBalance()
    {
      return $this->depositBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $depositBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDepositBalance(array $depositBalance = null)
    {
      $this->depositBalance = $depositBalance;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param SearchColumnStringField[] $drAccount
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setDrAccount(array $drAccount = null)
    {
      $this->drAccount = $drAccount;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEmailPreference()
    {
      return $this->emailPreference;
    }

    /**
     * @param SearchColumnEnumSelectField[] $emailPreference
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setEmailPreference(array $emailPreference = null)
    {
      $this->emailPreference = $emailPreference;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEmailTransactions()
    {
      return $this->emailTransactions;
    }

    /**
     * @param SearchColumnBooleanField[] $emailTransactions
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setEmailTransactions(array $emailTransactions = null)
    {
      $this->emailTransactions = $emailTransactions;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setEntityStatus(array $entityStatus = null)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedBudget
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setEstimatedBudget(array $estimatedBudget = null)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExplicitConversion()
    {
      return $this->explicitConversion;
    }

    /**
     * @param SearchColumnBooleanField[] $explicitConversion
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setExplicitConversion(array $explicitConversion = null)
    {
      $this->explicitConversion = $explicitConversion;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFax(array $fax = null)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFaxTransactions()
    {
      return $this->faxTransactions;
    }

    /**
     * @param SearchColumnBooleanField[] $faxTransactions
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFaxTransactions(array $faxTransactions = null)
    {
      $this->faxTransactions = $faxTransactions;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFirstName(array $firstName = null)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFirstOrderDate()
    {
      return $this->firstOrderDate;
    }

    /**
     * @param SearchColumnDateField[] $firstOrderDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFirstOrderDate(array $firstOrderDate = null)
    {
      $this->firstOrderDate = $firstOrderDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFirstSaleDate()
    {
      return $this->firstSaleDate;
    }

    /**
     * @param SearchColumnDateField[] $firstSaleDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFirstSaleDate(array $firstSaleDate = null)
    {
      $this->firstSaleDate = $firstSaleDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param SearchColumnStringField[] $fxAccount
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFxAccount(array $fxAccount = null)
    {
      $this->fxAccount = $fxAccount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxBalance()
    {
      return $this->fxBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $fxBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFxBalance(array $fxBalance = null)
    {
      $this->fxBalance = $fxBalance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxConsolBalance()
    {
      return $this->fxConsolBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $fxConsolBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFxConsolBalance(array $fxConsolBalance = null)
    {
      $this->fxConsolBalance = $fxConsolBalance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxConsolUnbilledOrders()
    {
      return $this->fxConsolUnbilledOrders;
    }

    /**
     * @param SearchColumnDoubleField[] $fxConsolUnbilledOrders
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFxConsolUnbilledOrders(array $fxConsolUnbilledOrders = null)
    {
      $this->fxConsolUnbilledOrders = $fxConsolUnbilledOrders;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxUnbilledOrders()
    {
      return $this->fxUnbilledOrders;
    }

    /**
     * @param SearchColumnDoubleField[] $fxUnbilledOrders
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setFxUnbilledOrders(array $fxUnbilledOrders = null)
    {
      $this->fxUnbilledOrders = $fxUnbilledOrders;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(array $globalSubscriptionStatus = null)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupPricingLevel()
    {
      return $this->groupPricingLevel;
    }

    /**
     * @param SearchColumnStringField[] $groupPricingLevel
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setGroupPricingLevel(array $groupPricingLevel = null)
    {
      $this->groupPricingLevel = $groupPricingLevel;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasDuplicates()
    {
      return $this->hasDuplicates;
    }

    /**
     * @param SearchColumnBooleanField[] $hasDuplicates
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setHasDuplicates(array $hasDuplicates = null)
    {
      $this->hasDuplicates = $hasDuplicates;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setHomePhone(array $homePhone = null)
    {
      $this->homePhone = $homePhone;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param SearchColumnBooleanField[] $isBudgetApproved
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setIsBudgetApproved(array $isBudgetApproved = null)
    {
      $this->isBudgetApproved = $isBudgetApproved;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPerson()
    {
      return $this->isPerson;
    }

    /**
     * @param SearchColumnBooleanField[] $isPerson
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setIsPerson(array $isPerson = null)
    {
      $this->isPerson = $isPerson;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsShipAddress()
    {
      return $this->isShipAddress;
    }

    /**
     * @param SearchColumnBooleanField[] $isShipAddress
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setIsShipAddress(array $isShipAddress = null)
    {
      $this->isShipAddress = $isShipAddress;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemPricingLevel()
    {
      return $this->itemPricingLevel;
    }

    /**
     * @param SearchColumnStringField[] $itemPricingLevel
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setItemPricingLevel(array $itemPricingLevel = null)
    {
      $this->itemPricingLevel = $itemPricingLevel;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getItemPricingUnitPrice()
    {
      return $this->itemPricingUnitPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $itemPricingUnitPrice
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setItemPricingUnitPrice(array $itemPricingUnitPrice = null)
    {
      $this->itemPricingUnitPrice = $itemPricingUnitPrice;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobEndDate()
    {
      return $this->jobEndDate;
    }

    /**
     * @param SearchColumnDateField[] $jobEndDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setJobEndDate(array $jobEndDate = null)
    {
      $this->jobEndDate = $jobEndDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobProjectedEnd()
    {
      return $this->jobProjectedEnd;
    }

    /**
     * @param SearchColumnDateField[] $jobProjectedEnd
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setJobProjectedEnd(array $jobProjectedEnd = null)
    {
      $this->jobProjectedEnd = $jobProjectedEnd;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobStartDate()
    {
      return $this->jobStartDate;
    }

    /**
     * @param SearchColumnDateField[] $jobStartDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setJobStartDate(array $jobStartDate = null)
    {
      $this->jobStartDate = $jobStartDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobType()
    {
      return $this->jobType;
    }

    /**
     * @param SearchColumnSelectField[] $jobType
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setJobType(array $jobType = null)
    {
      $this->jobType = $jobType;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLastName(array $lastName = null)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastOrderDate()
    {
      return $this->lastOrderDate;
    }

    /**
     * @param SearchColumnDateField[] $lastOrderDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLastOrderDate(array $lastOrderDate = null)
    {
      $this->lastOrderDate = $lastOrderDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastSaleDate()
    {
      return $this->lastSaleDate;
    }

    /**
     * @param SearchColumnDateField[] $lastSaleDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLastSaleDate(array $lastSaleDate = null)
    {
      $this->lastSaleDate = $lastSaleDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLeadDate()
    {
      return $this->leadDate;
    }

    /**
     * @param SearchColumnDateField[] $leadDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLeadDate(array $leadDate = null)
    {
      $this->leadDate = $leadDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLeadSource(array $leadSource = null)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setLevel(array $level = null)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getManualCreditHold()
    {
      return $this->manualCreditHold;
    }

    /**
     * @param SearchColumnBooleanField[] $manualCreditHold
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setManualCreditHold(array $manualCreditHold = null)
    {
      $this->manualCreditHold = $manualCreditHold;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setMobilePhone(array $mobilePhone = null)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getMonthlyClosing()
    {
      return $this->monthlyClosing;
    }

    /**
     * @param SearchColumnEnumSelectField[] $monthlyClosing
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setMonthlyClosing(array $monthlyClosing = null)
    {
      $this->monthlyClosing = $monthlyClosing;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOnCreditHold()
    {
      return $this->onCreditHold;
    }

    /**
     * @param SearchColumnBooleanField[] $onCreditHold
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setOnCreditHold(array $onCreditHold = null)
    {
      $this->onCreditHold = $onCreditHold;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOverdueBalance()
    {
      return $this->overdueBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $overdueBalance
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setOverdueBalance(array $overdueBalance = null)
    {
      $this->overdueBalance = $overdueBalance;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchColumnSelectField[] $partner
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPartner(array $partner = null)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchColumnDoubleField[] $partnerContribution
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPartnerContribution(array $partnerContribution = null)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchColumnStringField[] $partnerRole
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPartnerRole(array $partnerRole = null)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPartnerTeamMember(array $partnerTeamMember = null)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPec()
    {
      return $this->pec;
    }

    /**
     * @param SearchColumnStringField[] $pec
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPec(array $pec = null)
    {
      $this->pec = $pec;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPhoneticName(array $phoneticName = null)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPrefCCProcessor()
    {
      return $this->prefCCProcessor;
    }

    /**
     * @param SearchColumnSelectField[] $prefCCProcessor
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPrefCCProcessor(array $prefCCProcessor = null)
    {
      $this->prefCCProcessor = $prefCCProcessor;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPriceLevel(array $priceLevel = null)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param SearchColumnStringField[] $pricingGroup
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPricingGroup(array $pricingGroup = null)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPricingItem()
    {
      return $this->pricingItem;
    }

    /**
     * @param SearchColumnStringField[] $pricingItem
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPricingItem(array $pricingItem = null)
    {
      $this->pricingItem = $pricingItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPrintTransactions()
    {
      return $this->printTransactions;
    }

    /**
     * @param SearchColumnBooleanField[] $printTransactions
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setPrintTransactions(array $printTransactions = null)
    {
      $this->printTransactions = $printTransactions;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProspectDate()
    {
      return $this->prospectDate;
    }

    /**
     * @param SearchColumnDateField[] $prospectDate
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setProspectDate(array $prospectDate = null)
    {
      $this->prospectDate = $prospectDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param SearchColumnStringField[] $receivablesAccount
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setReceivablesAccount(array $receivablesAccount = null)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getReminderDays()
    {
      return $this->reminderDays;
    }

    /**
     * @param SearchColumnLongField[] $reminderDays
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setReminderDays(array $reminderDays = null)
    {
      $this->reminderDays = $reminderDays;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResaleNumber()
    {
      return $this->resaleNumber;
    }

    /**
     * @param SearchColumnStringField[] $resaleNumber
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setResaleNumber(array $resaleNumber = null)
    {
      $this->resaleNumber = $resaleNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param SearchColumnStringField[] $role
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setRole(array $role = null)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param SearchColumnStringField[] $salesReadiness
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSalesReadiness(array $salesReadiness = null)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSalesRep(array $salesRep = null)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamMember
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSalesTeamMember(array $salesTeamMember = null)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamRole
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSalesTeamRole(array $salesTeamRole = null)
    {
      $this->salesTeamRole = $salesTeamRole;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSalutation(array $salutation = null)
    {
      $this->salutation = $salutation;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShipAddress(array $shipAddress = null)
    {
      $this->shipAddress = $shipAddress;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShipCity(array $shipCity = null)
    {
      $this->shipCity = $shipCity;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param SearchColumnBooleanField[] $shipComplete
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShipComplete(array $shipComplete = null)
    {
      $this->shipComplete = $shipComplete;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShipPhone(array $shipPhone = null)
    {
      $this->shipPhone = $shipPhone;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShippingItem()
    {
      return $this->shippingItem;
    }

    /**
     * @param SearchColumnSelectField[] $shippingItem
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShippingItem(array $shippingItem = null)
    {
      $this->shippingItem = $shippingItem;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setShipZip(array $shipZip = null)
    {
      $this->shipZip = $shipZip;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $stage
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setStage(array $stage = null)
    {
      $this->stage = $stage;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxable()
    {
      return $this->taxable;
    }

    /**
     * @param SearchColumnBooleanField[] $taxable
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setTaxable(array $taxable = null)
    {
      $this->taxable = $taxable;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxItem()
    {
      return $this->taxItem;
    }

    /**
     * @param SearchColumnSelectField[] $taxItem
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setTaxItem(array $taxItem = null)
    {
      $this->taxItem = $taxItem;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param SearchColumnSelectField[] $terms
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setTerms(array $terms = null)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerritory()
    {
      return $this->territory;
    }

    /**
     * @param SearchColumnSelectField[] $territory
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setTerritory(array $territory = null)
    {
      $this->territory = $territory;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnbilledOrders()
    {
      return $this->unbilledOrders;
    }

    /**
     * @param SearchColumnDoubleField[] $unbilledOrders
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setUnbilledOrders(array $unbilledOrders = null)
    {
      $this->unbilledOrders = $unbilledOrders;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setUrl(array $url = null)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVatRegNumber()
    {
      return $this->vatRegNumber;
    }

    /**
     * @param SearchColumnStringField[] $vatRegNumber
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setVatRegNumber(array $vatRegNumber = null)
    {
      $this->vatRegNumber = $vatRegNumber;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getWebLead()
    {
      return $this->webLead;
    }

    /**
     * @param SearchColumnBooleanField[] $webLead
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setWebLead(array $webLead = null)
    {
      $this->webLead = $webLead;
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
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
     * @return \Nzolt\NetSuite\CustomerSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
