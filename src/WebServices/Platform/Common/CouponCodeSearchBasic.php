<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;

/**
 * CouponCodeSearchBasic
 */
class CouponCodeSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $code;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateSent;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $id;

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
     * @var SearchMultiSelectField
     */
    protected $promotion;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $recipient;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $useCount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $used;

    static $paramtypesmap = array(
    	"code" => "SearchStringField",
    	"dateSent" => "SearchDateField",
    	"id" => "SearchLongField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"promotion" => "SearchMultiSelectField",
    	"recipient" => "SearchMultiSelectField",
    	"useCount" => "SearchLongField",
    	"used" => "SearchBooleanField",
    );

    /**
     * Set code
     *
     * @param SearchStringField $code
     * @return CouponCodeSearchBasic
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
     * Set dateSent
     *
     * @param SearchDateField $dateSent
     * @return CouponCodeSearchBasic
     */
    public function setDateSent(SearchDateField $dateSent) {
        $this->dateSent = $dateSent;
        return $this;
    }

    /**
     * Get dateSent
     *
     * @return SearchDateField
     */
    public function getDateSent() {
        return $this->dateSent;
    }


    /**
     * Set id
     *
     * @param SearchLongField $id
     * @return CouponCodeSearchBasic
     */
    public function setId(SearchLongField $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return SearchLongField
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CouponCodeSearchBasic
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
     * @return CouponCodeSearchBasic
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
     * Set promotion
     *
     * @param SearchMultiSelectField $promotion
     * @return CouponCodeSearchBasic
     */
    public function setPromotion(SearchMultiSelectField $promotion) {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * Get promotion
     *
     * @return SearchMultiSelectField
     */
    public function getPromotion() {
        return $this->promotion;
    }


    /**
     * Set recipient
     *
     * @param SearchMultiSelectField $recipient
     * @return CouponCodeSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient) {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return SearchMultiSelectField
     */
    public function getRecipient() {
        return $this->recipient;
    }


    /**
     * Set useCount
     *
     * @param SearchLongField $useCount
     * @return CouponCodeSearchBasic
     */
    public function setUseCount(SearchLongField $useCount) {
        $this->useCount = $useCount;
        return $this;
    }

    /**
     * Get useCount
     *
     * @return SearchLongField
     */
    public function getUseCount() {
        return $this->useCount;
    }


    /**
     * Set used
     *
     * @param SearchBooleanField $used
     * @return CouponCodeSearchBasic
     */
    public function setUsed(SearchBooleanField $used) {
        $this->used = $used;
        return $this;
    }

    /**
     * Get used
     *
     * @return SearchBooleanField
     */
    public function getUsed() {
        return $this->used;
    }

}