<?php

namespace Nzolt\NetSuite;

class LocationSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $address
     */
    protected $address = null;

    /**
     * @var SearchBooleanField $allowStorePickup
     */
    protected $allowStorePickup = null;

    /**
     * @var SearchEnumMultiSelectField $autoAssignmentRegionSetting
     */
    protected $autoAssignmentRegionSetting = null;

    /**
     * @var SearchLongField $bufferStock
     */
    protected $bufferStock = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $county
     */
    protected $county = null;

    /**
     * @var SearchLongField $dailyShippingCapacity
     */
    protected $dailyShippingCapacity = null;

    /**
     * @var SearchDateField $endTime
     */
    protected $endTime = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $geolocationMethod
     */
    protected $geolocationMethod = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isFriday
     */
    protected $isFriday = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isMonday
     */
    protected $isMonday = null;

    /**
     * @var SearchBooleanField $isOffice
     */
    protected $isOffice = null;

    /**
     * @var SearchBooleanField $isSaturday
     */
    protected $isSaturday = null;

    /**
     * @var SearchBooleanField $isSunday
     */
    protected $isSunday = null;

    /**
     * @var SearchBooleanField $isThursday
     */
    protected $isThursday = null;

    /**
     * @var SearchBooleanField $isTuesday
     */
    protected $isTuesday = null;

    /**
     * @var SearchBooleanField $isWednesday
     */
    protected $isWednesday = null;

    /**
     * @var SearchDoubleField $latitude
     */
    protected $latitude = null;

    /**
     * @var SearchEnumMultiSelectField $locationType
     */
    protected $locationType = null;

    /**
     * @var SearchDoubleField $longitude
     */
    protected $longitude = null;

    /**
     * @var SearchBooleanField $makeInventoryAvailable
     */
    protected $makeInventoryAvailable = null;

    /**
     * @var SearchBooleanField $makeInventoryAvailableStore
     */
    protected $makeInventoryAvailableStore = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchStringField $nameNoHierarchy
     */
    protected $nameNoHierarchy = null;

    /**
     * @var SearchDateField $nextPickupCutOffTime
     */
    protected $nextPickupCutOffTime = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchDateField $sameDayPickupCutOffTime
     */
    protected $sameDayPickupCutOffTime = null;

    /**
     * @var SearchDateField $startTime
     */
    protected $startTime = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchDoubleField $storePickupBufferStock
     */
    protected $storePickupBufferStock = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchEnumMultiSelectField $timeZone
     */
    protected $timeZone = null;

    /**
     * @var SearchLongField $totalShippingCapacity
     */
    protected $totalShippingCapacity = null;

    /**
     * @var SearchStringField $tranprefix
     */
    protected $tranprefix = null;

    /**
     * @var SearchBooleanField $usesBins
     */
    protected $usesBins = null;

    /**
     * @var SearchStringField $zip
     */
    protected $zip = null;

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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowStorePickup()
    {
      return $this->allowStorePickup;
    }

    /**
     * @param SearchBooleanField $allowStorePickup
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setAllowStorePickup($allowStorePickup)
    {
      $this->allowStorePickup = $allowStorePickup;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAutoAssignmentRegionSetting()
    {
      return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param SearchEnumMultiSelectField $autoAssignmentRegionSetting
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setAutoAssignmentRegionSetting($autoAssignmentRegionSetting)
    {
      $this->autoAssignmentRegionSetting = $autoAssignmentRegionSetting;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBufferStock()
    {
      return $this->bufferStock;
    }

    /**
     * @param SearchLongField $bufferStock
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setBufferStock($bufferStock)
    {
      $this->bufferStock = $bufferStock;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDailyShippingCapacity()
    {
      return $this->dailyShippingCapacity;
    }

    /**
     * @param SearchLongField $dailyShippingCapacity
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setDailyShippingCapacity($dailyShippingCapacity)
    {
      $this->dailyShippingCapacity = $dailyShippingCapacity;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param SearchDateField $endTime
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGeolocationMethod()
    {
      return $this->geolocationMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $geolocationMethod
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setGeolocationMethod($geolocationMethod)
    {
      $this->geolocationMethod = $geolocationMethod;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsFriday()
    {
      return $this->isFriday;
    }

    /**
     * @param SearchBooleanField $isFriday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsFriday($isFriday)
    {
      $this->isFriday = $isFriday;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMonday()
    {
      return $this->isMonday;
    }

    /**
     * @param SearchBooleanField $isMonday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsMonday($isMonday)
    {
      $this->isMonday = $isMonday;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOffice()
    {
      return $this->isOffice;
    }

    /**
     * @param SearchBooleanField $isOffice
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsOffice($isOffice)
    {
      $this->isOffice = $isOffice;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSaturday()
    {
      return $this->isSaturday;
    }

    /**
     * @param SearchBooleanField $isSaturday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsSaturday($isSaturday)
    {
      $this->isSaturday = $isSaturday;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSunday()
    {
      return $this->isSunday;
    }

    /**
     * @param SearchBooleanField $isSunday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsSunday($isSunday)
    {
      $this->isSunday = $isSunday;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsThursday()
    {
      return $this->isThursday;
    }

    /**
     * @param SearchBooleanField $isThursday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsThursday($isThursday)
    {
      $this->isThursday = $isThursday;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTuesday()
    {
      return $this->isTuesday;
    }

    /**
     * @param SearchBooleanField $isTuesday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsTuesday($isTuesday)
    {
      $this->isTuesday = $isTuesday;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsWednesday()
    {
      return $this->isWednesday;
    }

    /**
     * @param SearchBooleanField $isWednesday
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setIsWednesday($isWednesday)
    {
      $this->isWednesday = $isWednesday;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param SearchDoubleField $latitude
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationType()
    {
      return $this->locationType;
    }

    /**
     * @param SearchEnumMultiSelectField $locationType
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setLocationType($locationType)
    {
      $this->locationType = $locationType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param SearchDoubleField $longitude
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailable()
    {
      return $this->makeInventoryAvailable;
    }

    /**
     * @param SearchBooleanField $makeInventoryAvailable
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setMakeInventoryAvailable($makeInventoryAvailable)
    {
      $this->makeInventoryAvailable = $makeInventoryAvailable;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailableStore()
    {
      return $this->makeInventoryAvailableStore;
    }

    /**
     * @param SearchBooleanField $makeInventoryAvailableStore
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setMakeInventoryAvailableStore($makeInventoryAvailableStore)
    {
      $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameNoHierarchy()
    {
      return $this->nameNoHierarchy;
    }

    /**
     * @param SearchStringField $nameNoHierarchy
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setNameNoHierarchy($nameNoHierarchy)
    {
      $this->nameNoHierarchy = $nameNoHierarchy;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextPickupCutOffTime()
    {
      return $this->nextPickupCutOffTime;
    }

    /**
     * @param SearchDateField $nextPickupCutOffTime
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setNextPickupCutOffTime($nextPickupCutOffTime)
    {
      $this->nextPickupCutOffTime = $nextPickupCutOffTime;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSameDayPickupCutOffTime()
    {
      return $this->sameDayPickupCutOffTime;
    }

    /**
     * @param SearchDateField $sameDayPickupCutOffTime
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setSameDayPickupCutOffTime($sameDayPickupCutOffTime)
    {
      $this->sameDayPickupCutOffTime = $sameDayPickupCutOffTime;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param SearchDateField $startTime
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStorePickupBufferStock()
    {
      return $this->storePickupBufferStock;
    }

    /**
     * @param SearchDoubleField $storePickupBufferStock
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setStorePickupBufferStock($storePickupBufferStock)
    {
      $this->storePickupBufferStock = $storePickupBufferStock;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTimeZone()
    {
      return $this->timeZone;
    }

    /**
     * @param SearchEnumMultiSelectField $timeZone
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setTimeZone($timeZone)
    {
      $this->timeZone = $timeZone;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getTotalShippingCapacity()
    {
      return $this->totalShippingCapacity;
    }

    /**
     * @param SearchLongField $totalShippingCapacity
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setTotalShippingCapacity($totalShippingCapacity)
    {
      $this->totalShippingCapacity = $totalShippingCapacity;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranprefix()
    {
      return $this->tranprefix;
    }

    /**
     * @param SearchStringField $tranprefix
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setTranprefix($tranprefix)
    {
      $this->tranprefix = $tranprefix;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsesBins()
    {
      return $this->usesBins;
    }

    /**
     * @param SearchBooleanField $usesBins
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setUsesBins($usesBins)
    {
      $this->usesBins = $usesBins;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchStringField $zip
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
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
     * @return \Nzolt\NetSuite\LocationSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
