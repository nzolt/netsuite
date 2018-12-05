<?php

namespace Nzolt\NetSuite;

class Location extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $tranPrefix
     */
    protected $tranPrefix = null;

    /**
     * @var Address $mainAddress
     */
    protected $mainAddress = null;

    /**
     * @var Address $returnAddress
     */
    protected $returnAddress = null;

    /**
     * @var LocationType $locationType
     */
    protected $locationType = null;

    /**
     * @var LocationTimeZone $timeZone
     */
    protected $timeZone = null;

    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @var RecordRef $logo
     */
    protected $logo = null;

    /**
     * @var boolean $useBins
     */
    protected $useBins = null;

    /**
     * @var boolean $makeInventoryAvailable
     */
    protected $makeInventoryAvailable = null;

    /**
     * @var boolean $makeInventoryAvailableStore
     */
    protected $makeInventoryAvailableStore = null;

    /**
     * @var LocationGeolocationMethod $geolocationMethod
     */
    protected $geolocationMethod = null;

    /**
     * @var LocationAutoAssignmentRegionSetting $autoAssignmentRegionSetting
     */
    protected $autoAssignmentRegionSetting = null;

    /**
     * @var \DateTime $nextPickupCutOffTime
     */
    protected $nextPickupCutOffTime = null;

    /**
     * @var int $bufferStock
     */
    protected $bufferStock = null;

    /**
     * @var boolean $allowStorePickup
     */
    protected $allowStorePickup = null;

    /**
     * @var float $storePickupBufferStock
     */
    protected $storePickupBufferStock = null;

    /**
     * @var int $dailyShippingCapacity
     */
    protected $dailyShippingCapacity = null;

    /**
     * @var int $totalShippingCapacity
     */
    protected $totalShippingCapacity = null;

    /**
     * @var LocationRegionsList $includeLocationRegionsList
     */
    protected $includeLocationRegionsList = null;

    /**
     * @var LocationRegionsList $excludeLocationRegionsList
     */
    protected $excludeLocationRegionsList = null;

    /**
     * @var LocationBusinessHoursList $businessHoursList
     */
    protected $businessHoursList = null;

    /**
     * @var ClassTranslationList $classTranslationList
     */
    protected $classTranslationList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\Location
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\Location
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param boolean $includeChildren
     * @return \Nzolt\NetSuite\Location
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList()
    {
      return $this->subsidiaryList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return \Nzolt\NetSuite\Location
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Location
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranPrefix()
    {
      return $this->tranPrefix;
    }

    /**
     * @param string $tranPrefix
     * @return \Nzolt\NetSuite\Location
     */
    public function setTranPrefix($tranPrefix)
    {
      $this->tranPrefix = $tranPrefix;
      return $this;
    }

    /**
     * @return Address
     */
    public function getMainAddress()
    {
      return $this->mainAddress;
    }

    /**
     * @param Address $mainAddress
     * @return \Nzolt\NetSuite\Location
     */
    public function setMainAddress($mainAddress)
    {
      $this->mainAddress = $mainAddress;
      return $this;
    }

    /**
     * @return Address
     */
    public function getReturnAddress()
    {
      return $this->returnAddress;
    }

    /**
     * @param Address $returnAddress
     * @return \Nzolt\NetSuite\Location
     */
    public function setReturnAddress($returnAddress)
    {
      $this->returnAddress = $returnAddress;
      return $this;
    }

    /**
     * @return LocationType
     */
    public function getLocationType()
    {
      return $this->locationType;
    }

    /**
     * @param LocationType $locationType
     * @return \Nzolt\NetSuite\Location
     */
    public function setLocationType($locationType)
    {
      $this->locationType = $locationType;
      return $this;
    }

    /**
     * @return LocationTimeZone
     */
    public function getTimeZone()
    {
      return $this->timeZone;
    }

    /**
     * @param LocationTimeZone $timeZone
     * @return \Nzolt\NetSuite\Location
     */
    public function setTimeZone($timeZone)
    {
      $this->timeZone = $timeZone;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \Nzolt\NetSuite\Location
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \Nzolt\NetSuite\Location
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param RecordRef $logo
     * @return \Nzolt\NetSuite\Location
     */
    public function setLogo($logo)
    {
      $this->logo = $logo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseBins()
    {
      return $this->useBins;
    }

    /**
     * @param boolean $useBins
     * @return \Nzolt\NetSuite\Location
     */
    public function setUseBins($useBins)
    {
      $this->useBins = $useBins;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMakeInventoryAvailable()
    {
      return $this->makeInventoryAvailable;
    }

    /**
     * @param boolean $makeInventoryAvailable
     * @return \Nzolt\NetSuite\Location
     */
    public function setMakeInventoryAvailable($makeInventoryAvailable)
    {
      $this->makeInventoryAvailable = $makeInventoryAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMakeInventoryAvailableStore()
    {
      return $this->makeInventoryAvailableStore;
    }

    /**
     * @param boolean $makeInventoryAvailableStore
     * @return \Nzolt\NetSuite\Location
     */
    public function setMakeInventoryAvailableStore($makeInventoryAvailableStore)
    {
      $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
      return $this;
    }

    /**
     * @return LocationGeolocationMethod
     */
    public function getGeolocationMethod()
    {
      return $this->geolocationMethod;
    }

    /**
     * @param LocationGeolocationMethod $geolocationMethod
     * @return \Nzolt\NetSuite\Location
     */
    public function setGeolocationMethod($geolocationMethod)
    {
      $this->geolocationMethod = $geolocationMethod;
      return $this;
    }

    /**
     * @return LocationAutoAssignmentRegionSetting
     */
    public function getAutoAssignmentRegionSetting()
    {
      return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param LocationAutoAssignmentRegionSetting $autoAssignmentRegionSetting
     * @return \Nzolt\NetSuite\Location
     */
    public function setAutoAssignmentRegionSetting($autoAssignmentRegionSetting)
    {
      $this->autoAssignmentRegionSetting = $autoAssignmentRegionSetting;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextPickupCutOffTime()
    {
      if ($this->nextPickupCutOffTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextPickupCutOffTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextPickupCutOffTime
     * @return \Nzolt\NetSuite\Location
     */
    public function setNextPickupCutOffTime(\DateTime $nextPickupCutOffTime = null)
    {
      if ($nextPickupCutOffTime == null) {
       $this->nextPickupCutOffTime = null;
      } else {
        $this->nextPickupCutOffTime = $nextPickupCutOffTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getBufferStock()
    {
      return $this->bufferStock;
    }

    /**
     * @param int $bufferStock
     * @return \Nzolt\NetSuite\Location
     */
    public function setBufferStock($bufferStock)
    {
      $this->bufferStock = $bufferStock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowStorePickup()
    {
      return $this->allowStorePickup;
    }

    /**
     * @param boolean $allowStorePickup
     * @return \Nzolt\NetSuite\Location
     */
    public function setAllowStorePickup($allowStorePickup)
    {
      $this->allowStorePickup = $allowStorePickup;
      return $this;
    }

    /**
     * @return float
     */
    public function getStorePickupBufferStock()
    {
      return $this->storePickupBufferStock;
    }

    /**
     * @param float $storePickupBufferStock
     * @return \Nzolt\NetSuite\Location
     */
    public function setStorePickupBufferStock($storePickupBufferStock)
    {
      $this->storePickupBufferStock = $storePickupBufferStock;
      return $this;
    }

    /**
     * @return int
     */
    public function getDailyShippingCapacity()
    {
      return $this->dailyShippingCapacity;
    }

    /**
     * @param int $dailyShippingCapacity
     * @return \Nzolt\NetSuite\Location
     */
    public function setDailyShippingCapacity($dailyShippingCapacity)
    {
      $this->dailyShippingCapacity = $dailyShippingCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalShippingCapacity()
    {
      return $this->totalShippingCapacity;
    }

    /**
     * @param int $totalShippingCapacity
     * @return \Nzolt\NetSuite\Location
     */
    public function setTotalShippingCapacity($totalShippingCapacity)
    {
      $this->totalShippingCapacity = $totalShippingCapacity;
      return $this;
    }

    /**
     * @return LocationRegionsList
     */
    public function getIncludeLocationRegionsList()
    {
      return $this->includeLocationRegionsList;
    }

    /**
     * @param LocationRegionsList $includeLocationRegionsList
     * @return \Nzolt\NetSuite\Location
     */
    public function setIncludeLocationRegionsList($includeLocationRegionsList)
    {
      $this->includeLocationRegionsList = $includeLocationRegionsList;
      return $this;
    }

    /**
     * @return LocationRegionsList
     */
    public function getExcludeLocationRegionsList()
    {
      return $this->excludeLocationRegionsList;
    }

    /**
     * @param LocationRegionsList $excludeLocationRegionsList
     * @return \Nzolt\NetSuite\Location
     */
    public function setExcludeLocationRegionsList($excludeLocationRegionsList)
    {
      $this->excludeLocationRegionsList = $excludeLocationRegionsList;
      return $this;
    }

    /**
     * @return LocationBusinessHoursList
     */
    public function getBusinessHoursList()
    {
      return $this->businessHoursList;
    }

    /**
     * @param LocationBusinessHoursList $businessHoursList
     * @return \Nzolt\NetSuite\Location
     */
    public function setBusinessHoursList($businessHoursList)
    {
      $this->businessHoursList = $businessHoursList;
      return $this;
    }

    /**
     * @return ClassTranslationList
     */
    public function getClassTranslationList()
    {
      return $this->classTranslationList;
    }

    /**
     * @param ClassTranslationList $classTranslationList
     * @return \Nzolt\NetSuite\Location
     */
    public function setClassTranslationList($classTranslationList)
    {
      $this->classTranslationList = $classTranslationList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Location
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Location
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Location
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
