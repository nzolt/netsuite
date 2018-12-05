<?php

namespace Nzolt\NetSuite;

class VendorSearchRowBasic extends SearchRowBasic
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
     * @var SearchColumnDoubleField[] $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnDoubleField[] $currentExchangeRate
     */
    protected $currentExchangeRate = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnBooleanField[] $eligibleForCommission
     */
    protected $eligibleForCommission = null;

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
     * @var SearchColumnStringField[] $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchColumnLongField[] $entityNumber
     */
    protected $entityNumber = null;

    /**
     * @var SearchColumnSelectField[] $expenseAccount
     */
    protected $expenseAccount = null;

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
     * @var SearchColumnDoubleField[] $fxBalance
     */
    protected $fxBalance = null;

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
     * @var SearchColumnSelectField[] $incoterm
     */
    protected $incoterm = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $is1099Eligible
     */
    protected $is1099Eligible = null;

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
     * @var SearchColumnBooleanField[] $isJobResourceVend
     */
    protected $isJobResourceVend = null;

    /**
     * @var SearchColumnBooleanField[] $isPerson
     */
    protected $isPerson = null;

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
     * @var SearchColumnEnumSelectField[] $level
     */
    protected $level = null;

    /**
     * @var SearchColumnStringField[] $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchColumnStringField[] $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var SearchColumnSelectField[] $payablesAccount
     */
    protected $payablesAccount = null;

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
     * @var SearchColumnStringField[] $printOnCheckAs
     */
    protected $printOnCheckAs = null;

    /**
     * @var SearchColumnBooleanField[] $printTransactions
     */
    protected $printTransactions = null;

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
     * @var SearchColumnStringField[] $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var SearchColumnSelectField[] $terms
     */
    protected $terms = null;

    /**
     * @var SearchColumnSelectField[] $timeApprover
     */
    protected $timeApprover = null;

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
     * @var SearchColumnSelectField[] $workCalendar
     */
    protected $workCalendar = null;

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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setAttention(array $attention = null)
    {
      $this->attention = $attention;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setBillZipCode(array $billZipCode = null)
    {
      $this->billZipCode = $billZipCode;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCurrentExchangeRate()
    {
      return $this->currentExchangeRate;
    }

    /**
     * @param SearchColumnDoubleField[] $currentExchangeRate
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setCurrentExchangeRate(array $currentExchangeRate = null)
    {
      $this->currentExchangeRate = $currentExchangeRate;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setEmailTransactions(array $emailTransactions = null)
    {
      $this->emailTransactions = $emailTransactions;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setEntityNumber(array $entityNumber = null)
    {
      $this->entityNumber = $entityNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $expenseAccount
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setExpenseAccount(array $expenseAccount = null)
    {
      $this->expenseAccount = $expenseAccount;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setFirstName(array $firstName = null)
    {
      $this->firstName = $firstName;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setFxBalance(array $fxBalance = null)
    {
      $this->fxBalance = $fxBalance;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(array $globalSubscriptionStatus = null)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setImage(array $image = null)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchColumnSelectField[] $incoterm
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setIncoterm(array $incoterm = null)
    {
      $this->incoterm = $incoterm;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIs1099Eligible()
    {
      return $this->is1099Eligible;
    }

    /**
     * @param SearchColumnBooleanField[] $is1099Eligible
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setIs1099Eligible(array $is1099Eligible = null)
    {
      $this->is1099Eligible = $is1099Eligible;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobResourceVend()
    {
      return $this->isJobResourceVend;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobResourceVend
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setIsJobResourceVend(array $isJobResourceVend = null)
    {
      $this->isJobResourceVend = $isJobResourceVend;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setIsPerson(array $isPerson = null)
    {
      $this->isPerson = $isPerson;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setLastName(array $lastName = null)
    {
      $this->lastName = $lastName;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setLevel(array $level = null)
    {
      $this->level = $level;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setMobilePhone(array $mobilePhone = null)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param SearchColumnSelectField[] $payablesAccount
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setPayablesAccount(array $payablesAccount = null)
    {
      $this->payablesAccount = $payablesAccount;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setPhoneticName(array $phoneticName = null)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrintOnCheckAs()
    {
      return $this->printOnCheckAs;
    }

    /**
     * @param SearchColumnStringField[] $printOnCheckAs
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setPrintOnCheckAs(array $printOnCheckAs = null)
    {
      $this->printOnCheckAs = $printOnCheckAs;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setPrintTransactions(array $printTransactions = null)
    {
      $this->printTransactions = $printTransactions;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setReceiptQuantityDiff(array $receiptQuantityDiff = null)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setShipZip(array $shipZip = null)
    {
      $this->shipZip = $shipZip;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setTaxIdNum(array $taxIdNum = null)
    {
      $this->taxIdNum = $taxIdNum;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setTerms(array $terms = null)
    {
      $this->terms = $terms;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setTimeApprover(array $timeApprover = null)
    {
      $this->timeApprover = $timeApprover;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setVatRegNumber(array $vatRegNumber = null)
    {
      $this->vatRegNumber = $vatRegNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchColumnSelectField[] $workCalendar
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setWorkCalendar(array $workCalendar = null)
    {
      $this->workCalendar = $workCalendar;
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
