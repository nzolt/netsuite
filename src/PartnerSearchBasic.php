<?php

namespace Nzolt\NetSuite;

class PartnerSearchBasic extends SearchRecordBasic
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
     * @var SearchBooleanField $assignTasks
     */
    protected $assignTasks = null;

    /**
     * @var SearchStringField $attention
     */
    protected $attention = null;

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
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

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
     * @var SearchStringField $entityId
     */
    protected $entityId = null;

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
     * @var SearchBooleanField $isPerson
     */
    protected $isPerson = null;

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
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $middleName
     */
    protected $middleName = null;

    /**
     * @var SearchEnumMultiSelectField $otherRelationships
     */
    protected $otherRelationships = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchStringField $partnerCode
     */
    protected $partnerCode = null;

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
     * @var SearchMultiSelectField $promoCode
     */
    protected $promoCode = null;

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
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchStringField $URL
     */
    protected $URL = null;

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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setAddressPhone($addressPhone)
    {
      $this->addressPhone = $addressPhone;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAssignTasks()
    {
      return $this->assignTasks;
    }

    /**
     * @param SearchBooleanField $assignTasks
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setAssignTasks($assignTasks)
    {
      $this->assignTasks = $assignTasks;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setCommissionPlan($commissionPlan)
    {
      $this->commissionPlan = $commissionPlan;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setEmailPreference($emailPreference)
    {
      $this->emailPreference = $emailPreference;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setIsPerson($isPerson)
    {
      $this->isPerson = $isPerson;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setOtherRelationships($otherRelationships)
    {
      $this->otherRelationships = $otherRelationships;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPartnerCode()
    {
      return $this->partnerCode;
    }

    /**
     * @param SearchStringField $partnerCode
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setPartnerCode($partnerCode)
    {
      $this->partnerCode = $partnerCode;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param SearchMultiSelectField $promoCode
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param SearchStringField $URL
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
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
     * @return \Nzolt\NetSuite\PartnerSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
