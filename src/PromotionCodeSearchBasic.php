<?php

namespace Nzolt\NetSuite;

class PromotionCodeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchEnumMultiSelectField $applyDiscountTo
     */
    protected $applyDiscountTo = null;

    /**
     * @var SearchStringField $code
     */
    protected $code = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchMultiSelectField $discount
     */
    protected $discount = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $freeShipItem
     */
    protected $freeShipItem = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isPublic
     */
    protected $isPublic = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchMultiSelectField $partner
     */
    protected $partner = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApplyDiscountTo()
    {
      return $this->applyDiscountTo;
    }

    /**
     * @param SearchEnumMultiSelectField $applyDiscountTo
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setApplyDiscountTo($applyDiscountTo)
    {
      $this->applyDiscountTo = $applyDiscountTo;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param SearchStringField $code
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param SearchMultiSelectField $discount
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFreeShipItem()
    {
      return $this->freeShipItem;
    }

    /**
     * @param SearchMultiSelectField $freeShipItem
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setFreeShipItem($freeShipItem)
    {
      $this->freeShipItem = $freeShipItem;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param SearchBooleanField $isPublic
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
