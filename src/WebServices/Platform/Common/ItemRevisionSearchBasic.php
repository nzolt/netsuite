<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * ItemRevisionSearchBasic
 */
class ItemRevisionSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDateField
     */
    protected $effectiveDate;

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
    protected $item;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $obsoleteDate;

    static $paramtypesmap = array(
    	"effectiveDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"obsoleteDate" => "SearchDateField",
    );

    /**
     * Set effectiveDate
     *
     * @param SearchDateField $effectiveDate
     * @return ItemRevisionSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate) {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return SearchDateField
     */
    public function getEffectiveDate() {
        return $this->effectiveDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ItemRevisionSearchBasic
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
     * @return ItemRevisionSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ItemRevisionSearchBasic
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
     * @return ItemRevisionSearchBasic
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
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return ItemRevisionSearchBasic
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
     * Set name
     *
     * @param SearchStringField $name
     * @return ItemRevisionSearchBasic
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
     * Set obsoleteDate
     *
     * @param SearchDateField $obsoleteDate
     * @return ItemRevisionSearchBasic
     */
    public function setObsoleteDate(SearchDateField $obsoleteDate) {
        $this->obsoleteDate = $obsoleteDate;
        return $this;
    }

    /**
     * Get obsoleteDate
     *
     * @return SearchDateField
     */
    public function getObsoleteDate() {
        return $this->obsoleteDate;
    }

}