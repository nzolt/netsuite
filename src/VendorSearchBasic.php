<?php

namespace Nzolt\NetSuite;

class VendorSearchBasic extends SearchRecordBasic
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
     * @var SearchDoubleField $balance
     */
    protected $balance = null;

    /**
     * @var SearchStringField $billAddress
     */
    protected $billAddress = null;

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
     * @var SearchDoubleField $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchDoubleField $currentExchangeRate
     */
    protected $currentExchangeRate = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchBooleanField $eligibleForCommission
     */
    protected $eligibleForCommission = null;

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
     * @var SearchStringField $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchMultiSelectField $expenseAccount
     */
    protected $expenseAccount = null;

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
     * @var SearchDoubleField $fxBalance
     */
    protected $fxBalance = null;

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
     * @var SearchBooleanField $hasDuplicates
     */
    protected $hasDuplicates = null;

    /**
     * @var SearchStringField $image
     */
    protected $image = null;

    /**
     * @var SearchMultiSelectField $incoterm
     */
    protected $incoterm = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $is1099Eligible
     */
    protected $is1099Eligible = null;

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
     * @var SearchBooleanField $isJobResourceVend
     */
    protected $isJobResourceVend = null;

    /**
     * @var SearchBooleanField $isPerson
     */
    protected $isPerson = null;

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
     * @var SearchEnumMultiSelectField $level
     */
    protected $level = null;

    /**
     * @var SearchStringField $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchEnumMultiSelectField $otherRelationships
     */
    protected $otherRelationships = null;

    /**
     * @var SearchMultiSelectField $payablesAccount
     */
    protected $payablesAccount = null;

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
     * @var SearchBooleanField $printTransactions
     */
    protected $printTransactions = null;

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
     * @var SearchStringField $salutation
     */
    protected $salutation = null;

    /**
     * @var SearchStringField $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchStringField $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var SearchMultiSelectField $timeApprover
     */
    protected $timeApprover = null;

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
     * @var SearchMultiSelectField $workCalendar
     */
    protected $workCalendar = null;

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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setBillAddress($billAddress)
    {
      $this->billAddress = $billAddress;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCurrentExchangeRate()
    {
      return $this->currentExchangeRate;
    }

    /**
     * @param SearchDoubleField $currentExchangeRate
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setCurrentExchangeRate($currentExchangeRate)
    {
      $this->currentExchangeRate = $currentExchangeRate;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setEmailTransactions($emailTransactions)
    {
      $this->emailTransactions = $emailTransactions;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param SearchMultiSelectField $expenseAccount
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setExpenseAccount($expenseAccount)
    {
      $this->expenseAccount = $expenseAccount;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setFxBalance($fxBalance)
    {
      $this->fxBalance = $fxBalance;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setGroup($group)
    {
      $this->group = $group;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchMultiSelectField $incoterm
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIs1099Eligible()
    {
      return $this->is1099Eligible;
    }

    /**
     * @param SearchBooleanField $is1099Eligible
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setIs1099Eligible($is1099Eligible)
    {
      $this->is1099Eligible = $is1099Eligible;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobResourceVend()
    {
      return $this->isJobResourceVend;
    }

    /**
     * @param SearchBooleanField $isJobResourceVend
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setIsJobResourceVend($isJobResourceVend)
    {
      $this->isJobResourceVend = $isJobResourceVend;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setIsPerson($isPerson)
    {
      $this->isPerson = $isPerson;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setLevel($level)
    {
      $this->level = $level;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setOtherRelationships($otherRelationships)
    {
      $this->otherRelationships = $otherRelationships;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param SearchMultiSelectField $payablesAccount
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setPayablesAccount($payablesAccount)
    {
      $this->payablesAccount = $payablesAccount;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setPrintTransactions($printTransactions)
    {
      $this->printTransactions = $printTransactions;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setTaxIdNum($taxIdNum)
    {
      $this->taxIdNum = $taxIdNum;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setTimeApprover($timeApprover)
    {
      $this->timeApprover = $timeApprover;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setVatRegNumber($vatRegNumber)
    {
      $this->vatRegNumber = $vatRegNumber;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
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
     * @return \Nzolt\NetSuite\VendorSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
