<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Marketing\Types\PromotionCodeUseType;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Marketing\Types\PromotionCodeApplyDiscountTo;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PromotionCode
 */
class PromotionCode extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $implementation;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var PromotionCodeUseType
     */
    protected $useType;

    /**
     * @access public
     * @var boolean
     */
    protected $displayLineDiscounts;

    /**
     * @access public
     * @var string
     */
    protected $code;

    /**
     * @access public
     * @var string
     */
    protected $codePattern;

    /**
     * @access public
     * @var integer
     */
    protected $numberToGenerate;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $locationList;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRef
     */
    public $discount;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var boolean
     */
    protected $discountType;

    /**
     * @access public
     * @var PromotionCodeApplyDiscountTo
     */
    protected $applyDiscountTo;

    /**
     * @access public
     * @var RecordRef
     */
    public $freeShipMethod;

    /**
     * @access public
     * @var float
     */
    protected $minimumOrderAmount;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var boolean
     */
    protected $isPublic;

    /**
     * @access public
     * @var PromotionCodeCurrencyList
     */
    protected $currencyList;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeItems;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var PromotionCodeItemsList
     */
    protected $itemsList;

    /**
     * @access public
     * @var PromotionCodePartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"implementation" => "RecordRef",
    	"customForm" => "RecordRef",
    	"useType" => "PromotionCodeUseType",
    	"displayLineDiscounts" => "boolean",
    	"code" => "string",
    	"codePattern" => "string",
    	"numberToGenerate" => "integer",
    	"description" => "string",
    	"locationList" => "RecordRefList",
    	"isInactive" => "boolean",
    	"discount" => "RecordRef",
    	"rate" => "string",
    	"discountType" => "boolean",
    	"applyDiscountTo" => "PromotionCodeApplyDiscountTo",
    	"freeShipMethod" => "RecordRef",
    	"minimumOrderAmount" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"isPublic" => "boolean",
    	"currencyList" => "PromotionCodeCurrencyList",
    	"excludeItems" => "boolean",
    	"name" => "string",
    	"itemsList" => "PromotionCodeItemsList",
    	"partnersList" => "PromotionCodePartnersList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set useType
     *
     * @param PromotionCodeUseType $useType
     * @return PromotionCode
     */
    public function setUseType(PromotionCodeUseType $useType) {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Get useType
     *
     * @return PromotionCodeUseType
     */
    public function getUseType() {
        return $this->useType;
    }


    /**
     * Set displayLineDiscounts
     *
     * @param boolean $displayLineDiscounts
     * @return PromotionCode
     */
    public function setDisplayLineDiscounts($displayLineDiscounts) {
        $this->displayLineDiscounts = $displayLineDiscounts;
        return $this;
    }

    /**
     * Get displayLineDiscounts
     *
     * @return boolean
     */
    public function getDisplayLineDiscounts() {
        return $this->displayLineDiscounts;
    }


    /**
     * Set code
     *
     * @param string $code
     * @return PromotionCode
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }


    /**
     * Set codePattern
     *
     * @param string $codePattern
     * @return PromotionCode
     */
    public function setCodePattern($codePattern) {
        $this->codePattern = $codePattern;
        return $this;
    }

    /**
     * Get codePattern
     *
     * @return string
     */
    public function getCodePattern() {
        return $this->codePattern;
    }


    /**
     * Set numberToGenerate
     *
     * @param integer $numberToGenerate
     * @return PromotionCode
     */
    public function setNumberToGenerate($numberToGenerate) {
        $this->numberToGenerate = $numberToGenerate;
        return $this;
    }

    /**
     * Get numberToGenerate
     *
     * @return integer
     */
    public function getNumberToGenerate() {
        return $this->numberToGenerate;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return PromotionCode
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set locationList
     *
     * @param RecordRefList $locationList
     * @return PromotionCode
     */
    public function setLocationList(RecordRefList $locationList) {
        $this->locationList = $locationList;
        return $this;
    }

    /**
     * Get locationList
     *
     * @return RecordRefList
     */
    public function getLocationList() {
        return $this->locationList;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return PromotionCode
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set rate
     *
     * @param string $rate
     * @return PromotionCode
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set discountType
     *
     * @param boolean $discountType
     * @return PromotionCode
     */
    public function setDiscountType($discountType) {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     * Get discountType
     *
     * @return boolean
     */
    public function getDiscountType() {
        return $this->discountType;
    }


    /**
     * Set applyDiscountTo
     *
     * @param PromotionCodeApplyDiscountTo $applyDiscountTo
     * @return PromotionCode
     */
    public function setApplyDiscountTo(PromotionCodeApplyDiscountTo $applyDiscountTo) {
        $this->applyDiscountTo = $applyDiscountTo;
        return $this;
    }

    /**
     * Get applyDiscountTo
     *
     * @return PromotionCodeApplyDiscountTo
     */
    public function getApplyDiscountTo() {
        return $this->applyDiscountTo;
    }


    /**
     * Set minimumOrderAmount
     *
     * @param float $minimumOrderAmount
     * @return PromotionCode
     */
    public function setMinimumOrderAmount($minimumOrderAmount) {
        $this->minimumOrderAmount = $minimumOrderAmount;
        return $this;
    }

    /**
     * Get minimumOrderAmount
     *
     * @return float
     */
    public function getMinimumOrderAmount() {
        return $this->minimumOrderAmount;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return PromotionCode
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return PromotionCode
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     * @return PromotionCode
     */
    public function setIsPublic($isPublic) {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean
     */
    public function getIsPublic() {
        return $this->isPublic;
    }


    /**
     * Set currencyList
     *
     * @param PromotionCodeCurrencyList $currencyList
     * @return PromotionCode
     */
    public function setCurrencyList(PromotionCodeCurrencyList $currencyList) {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * Get currencyList
     *
     * @return PromotionCodeCurrencyList
     */
    public function getCurrencyList() {
        return $this->currencyList;
    }


    /**
     * Set excludeItems
     *
     * @param boolean $excludeItems
     * @return PromotionCode
     */
    public function setExcludeItems($excludeItems) {
        $this->excludeItems = $excludeItems;
        return $this;
    }

    /**
     * Get excludeItems
     *
     * @return boolean
     */
    public function getExcludeItems() {
        return $this->excludeItems;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return PromotionCode
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set itemsList
     *
     * @param PromotionCodeItemsList $itemsList
     * @return PromotionCode
     */
    public function setItemsList(PromotionCodeItemsList $itemsList) {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * Get itemsList
     *
     * @return PromotionCodeItemsList
     */
    public function getItemsList() {
        return $this->itemsList;
    }


    /**
     * Set partnersList
     *
     * @param PromotionCodePartnersList $partnersList
     * @return PromotionCode
     */
    public function setPartnersList(PromotionCodePartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return PromotionCodePartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PromotionCode
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return PromotionCode
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return PromotionCode
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}