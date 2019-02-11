<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * SolutionSearchBasic
 */
class SolutionSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $abstract;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $assigned;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $caseCount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $code;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

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
     * @var SearchStringField
     */
    protected $find;

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
    protected $isOnline;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $number;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $topic;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"abstract" => "SearchStringField",
    	"assigned" => "SearchMultiSelectField",
    	"caseCount" => "SearchLongField",
    	"code" => "SearchStringField",
    	"createdDate" => "SearchDateField",
    	"description" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"find" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isOnline" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"number" => "SearchLongField",
    	"status" => "SearchEnumMultiSelectField",
    	"title" => "SearchStringField",
    	"topic" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set abstract
     *
     * @param SearchStringField $abstract
     * @return SolutionSearchBasic
     */
    public function setAbstract(SearchStringField $abstract) {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Get abstract
     *
     * @return SearchStringField
     */
    public function getAbstract() {
        return $this->abstract;
    }


    /**
     * Set assigned
     *
     * @param SearchMultiSelectField $assigned
     * @return SolutionSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned) {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * Get assigned
     *
     * @return SearchMultiSelectField
     */
    public function getAssigned() {
        return $this->assigned;
    }


    /**
     * Set caseCount
     *
     * @param SearchLongField $caseCount
     * @return SolutionSearchBasic
     */
    public function setCaseCount(SearchLongField $caseCount) {
        $this->caseCount = $caseCount;
        return $this;
    }

    /**
     * Get caseCount
     *
     * @return SearchLongField
     */
    public function getCaseCount() {
        return $this->caseCount;
    }


    /**
     * Set code
     *
     * @param SearchStringField $code
     * @return SolutionSearchBasic
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
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return SolutionSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return SearchDateField
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return SolutionSearchBasic
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
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return SolutionSearchBasic
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
     * @return SolutionSearchBasic
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
     * Set find
     *
     * @param SearchStringField $find
     * @return SolutionSearchBasic
     */
    public function setFind(SearchStringField $find) {
        $this->find = $find;
        return $this;
    }

    /**
     * Get find
     *
     * @return SearchStringField
     */
    public function getFind() {
        return $this->find;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return SolutionSearchBasic
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
     * @return SolutionSearchBasic
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
     * @return SolutionSearchBasic
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
     * Set isOnline
     *
     * @param SearchBooleanField $isOnline
     * @return SolutionSearchBasic
     */
    public function setIsOnline(SearchBooleanField $isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return SearchBooleanField
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return SolutionSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set number
     *
     * @param SearchLongField $number
     * @return SolutionSearchBasic
     */
    public function setNumber(SearchLongField $number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return SearchLongField
     */
    public function getNumber() {
        return $this->number;
    }


    /**
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return SolutionSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return SolutionSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set topic
     *
     * @param SearchMultiSelectField $topic
     * @return SolutionSearchBasic
     */
    public function setTopic(SearchMultiSelectField $topic) {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Get topic
     *
     * @return SearchMultiSelectField
     */
    public function getTopic() {
        return $this->topic;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return SolutionSearchBasic
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