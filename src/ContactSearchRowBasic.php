<?php

namespace Nzolt\NetSuite;

class ContactSearchRowBasic extends SearchRowBasic
{

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
     * @var SearchColumnSelectField[] $company
     */
    protected $company = null;

    /**
     * @var SearchColumnSelectField[] $contactRole
     */
    protected $contactRole = null;

    /**
     * @var SearchColumnStringField[] $contactSource
     */
    protected $contactSource = null;

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
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnStringField[] $entityId
     */
    protected $entityId = null;

    /**
     * @var SearchColumnLongField[] $entityNumber
     */
    protected $entityNumber = null;

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
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

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
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

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
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchColumnStringField[] $address
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setAddressPhone(array $addressPhone = null)
    {
      $this->addressPhone = $addressPhone;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setAvailableOffline(array $availableOffline = null)
    {
      $this->availableOffline = $availableOffline;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setCompany(array $company = null)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getContactRole()
    {
      return $this->contactRole;
    }

    /**
     * @param SearchColumnSelectField[] $contactRole
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setContactRole(array $contactRole = null)
    {
      $this->contactRole = $contactRole;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContactSource()
    {
      return $this->contactSource;
    }

    /**
     * @param SearchColumnStringField[] $contactSource
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setContactSource(array $contactSource = null)
    {
      $this->contactSource = $contactSource;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setEntityNumber(array $entityNumber = null)
    {
      $this->entityNumber = $entityNumber;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setFirstName(array $firstName = null)
    {
      $this->firstName = $firstName;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setMobilePhone(array $mobilePhone = null)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setPhoneticName(array $phoneticName = null)
    {
      $this->phoneticName = $phoneticName;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
