<?php

namespace Nzolt\NetSuite;

class LocationSearchRowBasic extends SearchRowBasic
{

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
     * @var SearchColumnBooleanField[] $allowStorePickup
     */
    protected $allowStorePickup = null;

    /**
     * @var SearchColumnEnumSelectField[] $autoAssignmentRegionSetting
     */
    protected $autoAssignmentRegionSetting = null;

    /**
     * @var SearchColumnLongField[] $bufferStock
     */
    protected $bufferStock = null;

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnLongField[] $dailyShippingCapacity
     */
    protected $dailyShippingCapacity = null;

    /**
     * @var SearchColumnDateField[] $endTime
     */
    protected $endTime = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $geolocationMethod
     */
    protected $geolocationMethod = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isFriday
     */
    protected $isFriday = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isMonday
     */
    protected $isMonday = null;

    /**
     * @var SearchColumnBooleanField[] $isOffice
     */
    protected $isOffice = null;

    /**
     * @var SearchColumnBooleanField[] $isSaturday
     */
    protected $isSaturday = null;

    /**
     * @var SearchColumnBooleanField[] $isSunday
     */
    protected $isSunday = null;

    /**
     * @var SearchColumnBooleanField[] $isThursday
     */
    protected $isThursday = null;

    /**
     * @var SearchColumnBooleanField[] $isTuesday
     */
    protected $isTuesday = null;

    /**
     * @var SearchColumnBooleanField[] $isWednesday
     */
    protected $isWednesday = null;

    /**
     * @var SearchColumnDoubleField[] $latitude
     */
    protected $latitude = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationType
     */
    protected $locationType = null;

    /**
     * @var SearchColumnDoubleField[] $longitude
     */
    protected $longitude = null;

    /**
     * @var SearchColumnBooleanField[] $makeInventoryAvailable
     */
    protected $makeInventoryAvailable = null;

    /**
     * @var SearchColumnBooleanField[] $makeInventoryAvailableStore
     */
    protected $makeInventoryAvailableStore = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $nameNoHierarchy
     */
    protected $nameNoHierarchy = null;

    /**
     * @var SearchColumnDateField[] $nextPickupCutOffTime
     */
    protected $nextPickupCutOffTime = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnDateField[] $sameDayPickupCutOffTime
     */
    protected $sameDayPickupCutOffTime = null;

    /**
     * @var SearchColumnDateField[] $startTime
     */
    protected $startTime = null;

    /**
     * @var SearchColumnStringField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnDoubleField[] $storePickupBufferStock
     */
    protected $storePickupBufferStock = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnEnumSelectField[] $timeZone
     */
    protected $timeZone = null;

    /**
     * @var SearchColumnLongField[] $totalShippingCapacity
     */
    protected $totalShippingCapacity = null;

    /**
     * @var SearchColumnStringField[] $tranPrefix
     */
    protected $tranPrefix = null;

    /**
     * @var SearchColumnBooleanField[] $usesBins
     */
    protected $usesBins = null;

    /**
     * @var SearchColumnStringField[] $zip
     */
    protected $zip = null;

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
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param SearchColumnStringField[] $address1
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setAddress3(array $address3 = null)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowStorePickup()
    {
      return $this->allowStorePickup;
    }

    /**
     * @param SearchColumnBooleanField[] $allowStorePickup
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setAllowStorePickup(array $allowStorePickup = null)
    {
      $this->allowStorePickup = $allowStorePickup;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAutoAssignmentRegionSetting()
    {
      return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param SearchColumnEnumSelectField[] $autoAssignmentRegionSetting
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setAutoAssignmentRegionSetting(array $autoAssignmentRegionSetting = null)
    {
      $this->autoAssignmentRegionSetting = $autoAssignmentRegionSetting;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBufferStock()
    {
      return $this->bufferStock;
    }

    /**
     * @param SearchColumnLongField[] $bufferStock
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setBufferStock(array $bufferStock = null)
    {
      $this->bufferStock = $bufferStock;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDailyShippingCapacity()
    {
      return $this->dailyShippingCapacity;
    }

    /**
     * @param SearchColumnLongField[] $dailyShippingCapacity
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setDailyShippingCapacity(array $dailyShippingCapacity = null)
    {
      $this->dailyShippingCapacity = $dailyShippingCapacity;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param SearchColumnDateField[] $endTime
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setEndTime(array $endTime = null)
    {
      $this->endTime = $endTime;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGeolocationMethod()
    {
      return $this->geolocationMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $geolocationMethod
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setGeolocationMethod(array $geolocationMethod = null)
    {
      $this->geolocationMethod = $geolocationMethod;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsFriday()
    {
      return $this->isFriday;
    }

    /**
     * @param SearchColumnBooleanField[] $isFriday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsFriday(array $isFriday = null)
    {
      $this->isFriday = $isFriday;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMonday()
    {
      return $this->isMonday;
    }

    /**
     * @param SearchColumnBooleanField[] $isMonday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsMonday(array $isMonday = null)
    {
      $this->isMonday = $isMonday;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOffice()
    {
      return $this->isOffice;
    }

    /**
     * @param SearchColumnBooleanField[] $isOffice
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsOffice(array $isOffice = null)
    {
      $this->isOffice = $isOffice;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSaturday()
    {
      return $this->isSaturday;
    }

    /**
     * @param SearchColumnBooleanField[] $isSaturday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsSaturday(array $isSaturday = null)
    {
      $this->isSaturday = $isSaturday;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSunday()
    {
      return $this->isSunday;
    }

    /**
     * @param SearchColumnBooleanField[] $isSunday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsSunday(array $isSunday = null)
    {
      $this->isSunday = $isSunday;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsThursday()
    {
      return $this->isThursday;
    }

    /**
     * @param SearchColumnBooleanField[] $isThursday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsThursday(array $isThursday = null)
    {
      $this->isThursday = $isThursday;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTuesday()
    {
      return $this->isTuesday;
    }

    /**
     * @param SearchColumnBooleanField[] $isTuesday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsTuesday(array $isTuesday = null)
    {
      $this->isTuesday = $isTuesday;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsWednesday()
    {
      return $this->isWednesday;
    }

    /**
     * @param SearchColumnBooleanField[] $isWednesday
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setIsWednesday(array $isWednesday = null)
    {
      $this->isWednesday = $isWednesday;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param SearchColumnDoubleField[] $latitude
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setLatitude(array $latitude = null)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationType()
    {
      return $this->locationType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationType
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setLocationType(array $locationType = null)
    {
      $this->locationType = $locationType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param SearchColumnDoubleField[] $longitude
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setLongitude(array $longitude = null)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMakeInventoryAvailable()
    {
      return $this->makeInventoryAvailable;
    }

    /**
     * @param SearchColumnBooleanField[] $makeInventoryAvailable
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setMakeInventoryAvailable(array $makeInventoryAvailable = null)
    {
      $this->makeInventoryAvailable = $makeInventoryAvailable;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMakeInventoryAvailableStore()
    {
      return $this->makeInventoryAvailableStore;
    }

    /**
     * @param SearchColumnBooleanField[] $makeInventoryAvailableStore
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setMakeInventoryAvailableStore(array $makeInventoryAvailableStore = null)
    {
      $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameNoHierarchy()
    {
      return $this->nameNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $nameNoHierarchy
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setNameNoHierarchy(array $nameNoHierarchy = null)
    {
      $this->nameNoHierarchy = $nameNoHierarchy;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextPickupCutOffTime()
    {
      return $this->nextPickupCutOffTime;
    }

    /**
     * @param SearchColumnDateField[] $nextPickupCutOffTime
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setNextPickupCutOffTime(array $nextPickupCutOffTime = null)
    {
      $this->nextPickupCutOffTime = $nextPickupCutOffTime;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setPhone(array $phone = null)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSameDayPickupCutOffTime()
    {
      return $this->sameDayPickupCutOffTime;
    }

    /**
     * @param SearchColumnDateField[] $sameDayPickupCutOffTime
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setSameDayPickupCutOffTime(array $sameDayPickupCutOffTime = null)
    {
      $this->sameDayPickupCutOffTime = $sameDayPickupCutOffTime;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param SearchColumnDateField[] $startTime
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setStartTime(array $startTime = null)
    {
      $this->startTime = $startTime;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStorePickupBufferStock()
    {
      return $this->storePickupBufferStock;
    }

    /**
     * @param SearchColumnDoubleField[] $storePickupBufferStock
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setStorePickupBufferStock(array $storePickupBufferStock = null)
    {
      $this->storePickupBufferStock = $storePickupBufferStock;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTimeZone()
    {
      return $this->timeZone;
    }

    /**
     * @param SearchColumnEnumSelectField[] $timeZone
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setTimeZone(array $timeZone = null)
    {
      $this->timeZone = $timeZone;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTotalShippingCapacity()
    {
      return $this->totalShippingCapacity;
    }

    /**
     * @param SearchColumnLongField[] $totalShippingCapacity
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setTotalShippingCapacity(array $totalShippingCapacity = null)
    {
      $this->totalShippingCapacity = $totalShippingCapacity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranPrefix()
    {
      return $this->tranPrefix;
    }

    /**
     * @param SearchColumnStringField[] $tranPrefix
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setTranPrefix(array $tranPrefix = null)
    {
      $this->tranPrefix = $tranPrefix;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsesBins()
    {
      return $this->usesBins;
    }

    /**
     * @param SearchColumnBooleanField[] $usesBins
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setUsesBins(array $usesBins = null)
    {
      $this->usesBins = $usesBins;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setZip(array $zip = null)
    {
      $this->zip = $zip;
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
     * @return \Nzolt\NetSuite\LocationSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
