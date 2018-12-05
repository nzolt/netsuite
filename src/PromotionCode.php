<?php

namespace Nzolt\NetSuite;

class PromotionCode extends Record
{

    /**
     * @var RecordRef $implementation
     */
    protected $implementation = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var PromotionCodeUseType $useType
     */
    protected $useType = null;

    /**
     * @var boolean $displayLineDiscounts
     */
    protected $displayLineDiscounts = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $codePattern
     */
    protected $codePattern = null;

    /**
     * @var int $numberToGenerate
     */
    protected $numberToGenerate = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRefList $locationList
     */
    protected $locationList = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $discount
     */
    protected $discount = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var boolean $discountType
     */
    protected $discountType = null;

    /**
     * @var PromotionCodeApplyDiscountTo $applyDiscountTo
     */
    protected $applyDiscountTo = null;

    /**
     * @var RecordRef $freeShipMethod
     */
    protected $freeShipMethod = null;

    /**
     * @var float $minimumOrderAmount
     */
    protected $minimumOrderAmount = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @var PromotionCodeCurrencyList $currencyList
     */
    protected $currencyList = null;

    /**
     * @var boolean $excludeItems
     */
    protected $excludeItems = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var PromotionCodeItemsList $itemsList
     */
    protected $itemsList = null;

    /**
     * @var PromotionCodePartnersList $partnersList
     */
    protected $partnersList = null;

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
     * @return RecordRef
     */
    public function getImplementation()
    {
      return $this->implementation;
    }

    /**
     * @param RecordRef $implementation
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setImplementation($implementation)
    {
      $this->implementation = $implementation;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return PromotionCodeUseType
     */
    public function getUseType()
    {
      return $this->useType;
    }

    /**
     * @param PromotionCodeUseType $useType
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setUseType($useType)
    {
      $this->useType = $useType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayLineDiscounts()
    {
      return $this->displayLineDiscounts;
    }

    /**
     * @param boolean $displayLineDiscounts
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setDisplayLineDiscounts($displayLineDiscounts)
    {
      $this->displayLineDiscounts = $displayLineDiscounts;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodePattern()
    {
      return $this->codePattern;
    }

    /**
     * @param string $codePattern
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setCodePattern($codePattern)
    {
      $this->codePattern = $codePattern;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberToGenerate()
    {
      return $this->numberToGenerate;
    }

    /**
     * @param int $numberToGenerate
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setNumberToGenerate($numberToGenerate)
    {
      $this->numberToGenerate = $numberToGenerate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocationList()
    {
      return $this->locationList;
    }

    /**
     * @param RecordRefList $locationList
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setLocationList($locationList)
    {
      $this->locationList = $locationList;
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
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param RecordRef $discount
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscountType()
    {
      return $this->discountType;
    }

    /**
     * @param boolean $discountType
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setDiscountType($discountType)
    {
      $this->discountType = $discountType;
      return $this;
    }

    /**
     * @return PromotionCodeApplyDiscountTo
     */
    public function getApplyDiscountTo()
    {
      return $this->applyDiscountTo;
    }

    /**
     * @param PromotionCodeApplyDiscountTo $applyDiscountTo
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setApplyDiscountTo($applyDiscountTo)
    {
      $this->applyDiscountTo = $applyDiscountTo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFreeShipMethod()
    {
      return $this->freeShipMethod;
    }

    /**
     * @param RecordRef $freeShipMethod
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setFreeShipMethod($freeShipMethod)
    {
      $this->freeShipMethod = $freeShipMethod;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderAmount()
    {
      return $this->minimumOrderAmount;
    }

    /**
     * @param float $minimumOrderAmount
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setMinimumOrderAmount($minimumOrderAmount)
    {
      $this->minimumOrderAmount = $minimumOrderAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

    /**
     * @return PromotionCodeCurrencyList
     */
    public function getCurrencyList()
    {
      return $this->currencyList;
    }

    /**
     * @param PromotionCodeCurrencyList $currencyList
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setCurrencyList($currencyList)
    {
      $this->currencyList = $currencyList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeItems()
    {
      return $this->excludeItems;
    }

    /**
     * @param boolean $excludeItems
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setExcludeItems($excludeItems)
    {
      $this->excludeItems = $excludeItems;
      return $this;
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
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return PromotionCodeItemsList
     */
    public function getItemsList()
    {
      return $this->itemsList;
    }

    /**
     * @param PromotionCodeItemsList $itemsList
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setItemsList($itemsList)
    {
      $this->itemsList = $itemsList;
      return $this;
    }

    /**
     * @return PromotionCodePartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param PromotionCodePartnersList $partnersList
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
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
     * @return \Nzolt\NetSuite\PromotionCode
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
     * @return \Nzolt\NetSuite\PromotionCode
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
     * @return \Nzolt\NetSuite\PromotionCode
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
