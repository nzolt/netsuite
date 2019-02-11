<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;

/**
 * CustomListSearchBasic
 */
class CustomListSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

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
    protected $isOrdered;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"description" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isOrdered" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"owner" => "SearchMultiSelectField",
    	"scriptId" => "SearchStringField",
    );

    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return CustomListSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CustomListSearchBasic
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
     * @return CustomListSearchBasic
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
     * @return CustomListSearchBasic
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
     * Set isOrdered
     *
     * @param SearchBooleanField $isOrdered
     * @return CustomListSearchBasic
     */
    public function setIsOrdered(SearchBooleanField $isOrdered) {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * Get isOrdered
     *
     * @return SearchBooleanField
     */
    public function getIsOrdered() {
        return $this->isOrdered;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return CustomListSearchBasic
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
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return CustomListSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Get owner
     *
     * @return SearchMultiSelectField
     */
    public function getOwner() {
        return $this->owner;
    }


    /**
     * Set scriptId
     *
     * @param SearchStringField $scriptId
     * @return CustomListSearchBasic
     */
    public function setScriptId(SearchStringField $scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return SearchStringField
     */
    public function getScriptId() {
        return $this->scriptId;
    }

}