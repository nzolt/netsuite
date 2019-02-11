<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * PromotionCodeSearchBasic
 */
class PromotionCodeSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $applyDiscountTo;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $code;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $discount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $discountAmount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $freeShipItem;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPublic;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partner;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"applyDiscountTo" => "SearchEnumMultiSelectField",
    	"code" => "SearchStringField",
    	"description" => "SearchStringField",
    	"discount" => "SearchMultiSelectField",
    	"discountAmount" => "SearchDoubleField",
    	"endDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"freeShipItem" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isPublic" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"partner" => "SearchMultiSelectField",
    	"startDate" => "SearchDateField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set applyDiscountTo
     *
     * @param SearchEnumMultiSelectField $applyDiscountTo
     * @return PromotionCodeSearchBasic
     */
    public function setApplyDiscountTo(SearchEnumMultiSelectField $applyDiscountTo) {
        $this->applyDiscountTo = $applyDiscountTo;
        return $this;
    }

    /**
     * Get applyDiscountTo
     *
     * @return SearchEnumMultiSelectField
     */
    public function getApplyDiscountTo() {
        return $this->applyDiscountTo;
    }


    /**
     * Set code
     *
     * @param SearchStringField $code
     * @return PromotionCodeSearchBasic
     */
    public function setCode(SearchStringField $code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return SearchStringField
     */
    public function getCode() {
        return $this->code;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return PromotionCodeSearchBasic
     */
    public function setDescription(SearchStringField $description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return SearchStringField
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set discount
     *
     * @param SearchMultiSelectField $discount
     * @return PromotionCodeSearchBasic
     */
    public function setDiscount(SearchMultiSelectField $discount) {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Get discount
     *
     * @return SearchMultiSelectField
     */
    public function getDiscount() {
        return $this->discount;
    }


    /**
     * Set discountAmount
     *
     * @param SearchDoubleField $discountAmount
     * @return PromotionCodeSearchBasic
     */
    public function setDiscountAmount(SearchDoubleField $discountAmount) {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return SearchDoubleField
     */
    public function getDiscountAmount() {
        return $this->discountAmount;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return PromotionCodeSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return PromotionCodeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return PromotionCodeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set freeShipItem
     *
     * @param SearchMultiSelectField $freeShipItem
     * @return PromotionCodeSearchBasic
     */
    public function setFreeShipItem(SearchMultiSelectField $freeShipItem) {
        $this->freeShipItem = $freeShipItem;
        return $this;
    }

    /**
     * Get freeShipItem
     *
     * @return SearchMultiSelectField
     */
    public function getFreeShipItem() {
        return $this->freeShipItem;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return PromotionCodeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return PromotionCodeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return PromotionCodeSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isPublic
     *
     * @param SearchBooleanField $isPublic
     * @return PromotionCodeSearchBasic
     */
    public function setIsPublic(SearchBooleanField $isPublic) {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * Get isPublic
     *
     * @return SearchBooleanField
     */
    public function getIsPublic() {
        return $this->isPublic;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return PromotionCodeSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return PromotionCodeSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return PromotionCodeSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set partner
     *
     * @param SearchMultiSelectField $partner
     * @return PromotionCodeSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner) {
        $this->partner = $partner;
        return $this;
    }

    /**
     * Get partner
     *
     * @return SearchMultiSelectField
     */
    public function getPartner() {
        return $this->partner;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return PromotionCodeSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return PromotionCodeSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}