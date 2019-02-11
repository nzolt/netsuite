<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * IssueSearchBasic
 */
class IssueSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchLongField
     */
    protected $ageInMonths;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $assigned;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buildBroken;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $buildBrokenName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buildFixed;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $buildFixedName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buildTarget;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $buildTargetName;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $caseCount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $caseNumber;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $closedDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateReleased;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $details;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $duplicateOf;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $eFix;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employeeOrTeam;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $eventStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalAbstract;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalDetails;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalFixedIn;

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
    protected $externalStatus;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $fixed;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $fixedBy;

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
    protected $isOwner;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isReviewed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isShowStopper;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $issueAbstract;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $issueNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $module;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $number;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $originalFixedIn;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $priority;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $product;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $productTeam;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $relatedIssue;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $relationship;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $relationshipComment;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $reportedBy;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $reproduce;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $resolved;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $resolvedBy;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $reviewer;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $severity;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $source;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $tags;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $tracking;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $userType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $versionBroken;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $versionFixed;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $versionTarget;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"ageInMonths" => "SearchLongField",
    	"assigned" => "SearchMultiSelectField",
    	"buildBroken" => "SearchMultiSelectField",
    	"buildBrokenName" => "SearchStringField",
    	"buildFixed" => "SearchMultiSelectField",
    	"buildFixedName" => "SearchStringField",
    	"buildTarget" => "SearchMultiSelectField",
    	"buildTargetName" => "SearchStringField",
    	"caseCount" => "SearchLongField",
    	"caseNumber" => "SearchStringField",
    	"closedDate" => "SearchDateField",
    	"createdDate" => "SearchDateField",
    	"dateReleased" => "SearchDateField",
    	"details" => "SearchStringField",
    	"duplicateOf" => "SearchMultiSelectField",
    	"eFix" => "SearchBooleanField",
    	"employeeOrTeam" => "SearchMultiSelectField",
    	"eventStatus" => "SearchEnumMultiSelectField",
    	"externalAbstract" => "SearchStringField",
    	"externalDetails" => "SearchStringField",
    	"externalFixedIn" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"externalStatus" => "SearchMultiSelectField",
    	"fixed" => "SearchDateField",
    	"fixedBy" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isOwner" => "SearchBooleanField",
    	"isReviewed" => "SearchBooleanField",
    	"isShowStopper" => "SearchBooleanField",
    	"issueAbstract" => "SearchStringField",
    	"issueNumber" => "SearchStringField",
    	"item" => "SearchMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"module" => "SearchMultiSelectField",
    	"number" => "SearchLongField",
    	"originalFixedIn" => "SearchStringField",
    	"priority" => "SearchMultiSelectField",
    	"product" => "SearchMultiSelectField",
    	"productTeam" => "SearchMultiSelectField",
    	"relatedIssue" => "SearchMultiSelectField",
    	"relationship" => "SearchEnumMultiSelectField",
    	"relationshipComment" => "SearchStringField",
    	"reportedBy" => "SearchMultiSelectField",
    	"reproduce" => "SearchMultiSelectField",
    	"resolved" => "SearchDateField",
    	"resolvedBy" => "SearchMultiSelectField",
    	"reviewer" => "SearchMultiSelectField",
    	"severity" => "SearchMultiSelectField",
    	"source" => "SearchEnumMultiSelectField",
    	"status" => "SearchMultiSelectField",
    	"tags" => "SearchMultiSelectField",
    	"tracking" => "SearchBooleanField",
    	"type" => "SearchMultiSelectField",
    	"userType" => "SearchMultiSelectField",
    	"versionBroken" => "SearchMultiSelectField",
    	"versionFixed" => "SearchMultiSelectField",
    	"versionTarget" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set ageInMonths
     *
     * @param SearchLongField $ageInMonths
     * @return IssueSearchBasic
     */
    public function setAgeInMonths(SearchLongField $ageInMonths) {
        $this->ageInMonths = $ageInMonths;
        return $this;
    }

    /**
     * Get ageInMonths
     *
     * @return SearchLongField
     */
    public function getAgeInMonths() {
        return $this->ageInMonths;
    }


    /**
     * Set assigned
     *
     * @param SearchMultiSelectField $assigned
     * @return IssueSearchBasic
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
     * Set buildBroken
     *
     * @param SearchMultiSelectField $buildBroken
     * @return IssueSearchBasic
     */
    public function setBuildBroken(SearchMultiSelectField $buildBroken) {
        $this->buildBroken = $buildBroken;
        return $this;
    }

    /**
     * Get buildBroken
     *
     * @return SearchMultiSelectField
     */
    public function getBuildBroken() {
        return $this->buildBroken;
    }


    /**
     * Set buildBrokenName
     *
     * @param SearchStringField $buildBrokenName
     * @return IssueSearchBasic
     */
    public function setBuildBrokenName(SearchStringField $buildBrokenName) {
        $this->buildBrokenName = $buildBrokenName;
        return $this;
    }

    /**
     * Get buildBrokenName
     *
     * @return SearchStringField
     */
    public function getBuildBrokenName() {
        return $this->buildBrokenName;
    }


    /**
     * Set buildFixed
     *
     * @param SearchMultiSelectField $buildFixed
     * @return IssueSearchBasic
     */
    public function setBuildFixed(SearchMultiSelectField $buildFixed) {
        $this->buildFixed = $buildFixed;
        return $this;
    }

    /**
     * Get buildFixed
     *
     * @return SearchMultiSelectField
     */
    public function getBuildFixed() {
        return $this->buildFixed;
    }


    /**
     * Set buildFixedName
     *
     * @param SearchStringField $buildFixedName
     * @return IssueSearchBasic
     */
    public function setBuildFixedName(SearchStringField $buildFixedName) {
        $this->buildFixedName = $buildFixedName;
        return $this;
    }

    /**
     * Get buildFixedName
     *
     * @return SearchStringField
     */
    public function getBuildFixedName() {
        return $this->buildFixedName;
    }


    /**
     * Set buildTarget
     *
     * @param SearchMultiSelectField $buildTarget
     * @return IssueSearchBasic
     */
    public function setBuildTarget(SearchMultiSelectField $buildTarget) {
        $this->buildTarget = $buildTarget;
        return $this;
    }

    /**
     * Get buildTarget
     *
     * @return SearchMultiSelectField
     */
    public function getBuildTarget() {
        return $this->buildTarget;
    }


    /**
     * Set buildTargetName
     *
     * @param SearchStringField $buildTargetName
     * @return IssueSearchBasic
     */
    public function setBuildTargetName(SearchStringField $buildTargetName) {
        $this->buildTargetName = $buildTargetName;
        return $this;
    }

    /**
     * Get buildTargetName
     *
     * @return SearchStringField
     */
    public function getBuildTargetName() {
        return $this->buildTargetName;
    }


    /**
     * Set caseCount
     *
     * @param SearchLongField $caseCount
     * @return IssueSearchBasic
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
     * Set caseNumber
     *
     * @param SearchStringField $caseNumber
     * @return IssueSearchBasic
     */
    public function setCaseNumber(SearchStringField $caseNumber) {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * Get caseNumber
     *
     * @return SearchStringField
     */
    public function getCaseNumber() {
        return $this->caseNumber;
    }


    /**
     * Set closedDate
     *
     * @param SearchDateField $closedDate
     * @return IssueSearchBasic
     */
    public function setClosedDate(SearchDateField $closedDate) {
        $this->closedDate = $closedDate;
        return $this;
    }

    /**
     * Get closedDate
     *
     * @return SearchDateField
     */
    public function getClosedDate() {
        return $this->closedDate;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return IssueSearchBasic
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
     * Set dateReleased
     *
     * @param SearchDateField $dateReleased
     * @return IssueSearchBasic
     */
    public function setDateReleased(SearchDateField $dateReleased) {
        $this->dateReleased = $dateReleased;
        return $this;
    }

    /**
     * Get dateReleased
     *
     * @return SearchDateField
     */
    public function getDateReleased() {
        return $this->dateReleased;
    }


    /**
     * Set details
     *
     * @param SearchStringField $details
     * @return IssueSearchBasic
     */
    public function setDetails(SearchStringField $details) {
        $this->details = $details;
        return $this;
    }

    /**
     * Get details
     *
     * @return SearchStringField
     */
    public function getDetails() {
        return $this->details;
    }


    /**
     * Set duplicateOf
     *
     * @param SearchMultiSelectField $duplicateOf
     * @return IssueSearchBasic
     */
    public function setDuplicateOf(SearchMultiSelectField $duplicateOf) {
        $this->duplicateOf = $duplicateOf;
        return $this;
    }

    /**
     * Get duplicateOf
     *
     * @return SearchMultiSelectField
     */
    public function getDuplicateOf() {
        return $this->duplicateOf;
    }


    /**
     * Set eFix
     *
     * @param SearchBooleanField $eFix
     * @return IssueSearchBasic
     */
    public function setEFix(SearchBooleanField $eFix) {
        $this->eFix = $eFix;
        return $this;
    }

    /**
     * Get eFix
     *
     * @return SearchBooleanField
     */
    public function getEFix() {
        return $this->eFix;
    }


    /**
     * Set employeeOrTeam
     *
     * @param SearchMultiSelectField $employeeOrTeam
     * @return IssueSearchBasic
     */
    public function setEmployeeOrTeam(SearchMultiSelectField $employeeOrTeam) {
        $this->employeeOrTeam = $employeeOrTeam;
        return $this;
    }

    /**
     * Get employeeOrTeam
     *
     * @return SearchMultiSelectField
     */
    public function getEmployeeOrTeam() {
        return $this->employeeOrTeam;
    }


    /**
     * Set eventStatus
     *
     * @param SearchEnumMultiSelectField $eventStatus
     * @return IssueSearchBasic
     */
    public function setEventStatus(SearchEnumMultiSelectField $eventStatus) {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    /**
     * Get eventStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getEventStatus() {
        return $this->eventStatus;
    }


    /**
     * Set externalAbstract
     *
     * @param SearchStringField $externalAbstract
     * @return IssueSearchBasic
     */
    public function setExternalAbstract(SearchStringField $externalAbstract) {
        $this->externalAbstract = $externalAbstract;
        return $this;
    }

    /**
     * Get externalAbstract
     *
     * @return SearchStringField
     */
    public function getExternalAbstract() {
        return $this->externalAbstract;
    }


    /**
     * Set externalDetails
     *
     * @param SearchStringField $externalDetails
     * @return IssueSearchBasic
     */
    public function setExternalDetails(SearchStringField $externalDetails) {
        $this->externalDetails = $externalDetails;
        return $this;
    }

    /**
     * Get externalDetails
     *
     * @return SearchStringField
     */
    public function getExternalDetails() {
        return $this->externalDetails;
    }


    /**
     * Set externalFixedIn
     *
     * @param SearchMultiSelectField $externalFixedIn
     * @return IssueSearchBasic
     */
    public function setExternalFixedIn(SearchMultiSelectField $externalFixedIn) {
        $this->externalFixedIn = $externalFixedIn;
        return $this;
    }

    /**
     * Get externalFixedIn
     *
     * @return SearchMultiSelectField
     */
    public function getExternalFixedIn() {
        return $this->externalFixedIn;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return IssueSearchBasic
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
     * @return IssueSearchBasic
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
     * Set externalStatus
     *
     * @param SearchMultiSelectField $externalStatus
     * @return IssueSearchBasic
     */
    public function setExternalStatus(SearchMultiSelectField $externalStatus) {
        $this->externalStatus = $externalStatus;
        return $this;
    }

    /**
     * Get externalStatus
     *
     * @return SearchMultiSelectField
     */
    public function getExternalStatus() {
        return $this->externalStatus;
    }


    /**
     * Set fixed
     *
     * @param SearchDateField $fixed
     * @return IssueSearchBasic
     */
    public function setFixed(SearchDateField $fixed) {
        $this->fixed = $fixed;
        return $this;
    }

    /**
     * Get fixed
     *
     * @return SearchDateField
     */
    public function getFixed() {
        return $this->fixed;
    }


    /**
     * Set fixedBy
     *
     * @param SearchMultiSelectField $fixedBy
     * @return IssueSearchBasic
     */
    public function setFixedBy(SearchMultiSelectField $fixedBy) {
        $this->fixedBy = $fixedBy;
        return $this;
    }

    /**
     * Get fixedBy
     *
     * @return SearchMultiSelectField
     */
    public function getFixedBy() {
        return $this->fixedBy;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return IssueSearchBasic
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
     * @return IssueSearchBasic
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
     * Set isOwner
     *
     * @param SearchBooleanField $isOwner
     * @return IssueSearchBasic
     */
    public function setIsOwner(SearchBooleanField $isOwner) {
        $this->isOwner = $isOwner;
        return $this;
    }

    /**
     * Get isOwner
     *
     * @return SearchBooleanField
     */
    public function getIsOwner() {
        return $this->isOwner;
    }


    /**
     * Set isReviewed
     *
     * @param SearchBooleanField $isReviewed
     * @return IssueSearchBasic
     */
    public function setIsReviewed(SearchBooleanField $isReviewed) {
        $this->isReviewed = $isReviewed;
        return $this;
    }

    /**
     * Get isReviewed
     *
     * @return SearchBooleanField
     */
    public function getIsReviewed() {
        return $this->isReviewed;
    }


    /**
     * Set isShowStopper
     *
     * @param SearchBooleanField $isShowStopper
     * @return IssueSearchBasic
     */
    public function setIsShowStopper(SearchBooleanField $isShowStopper) {
        $this->isShowStopper = $isShowStopper;
        return $this;
    }

    /**
     * Get isShowStopper
     *
     * @return SearchBooleanField
     */
    public function getIsShowStopper() {
        return $this->isShowStopper;
    }


    /**
     * Set issueAbstract
     *
     * @param SearchStringField $issueAbstract
     * @return IssueSearchBasic
     */
    public function setIssueAbstract(SearchStringField $issueAbstract) {
        $this->issueAbstract = $issueAbstract;
        return $this;
    }

    /**
     * Get issueAbstract
     *
     * @return SearchStringField
     */
    public function getIssueAbstract() {
        return $this->issueAbstract;
    }


    /**
     * Set issueNumber
     *
     * @param SearchStringField $issueNumber
     * @return IssueSearchBasic
     */
    public function setIssueNumber(SearchStringField $issueNumber) {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * Get issueNumber
     *
     * @return SearchStringField
     */
    public function getIssueNumber() {
        return $this->issueNumber;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return IssueSearchBasic
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
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return IssueSearchBasic
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
     * Set module
     *
     * @param SearchMultiSelectField $module
     * @return IssueSearchBasic
     */
    public function setModule(SearchMultiSelectField $module) {
        $this->module = $module;
        return $this;
    }

    /**
     * Get module
     *
     * @return SearchMultiSelectField
     */
    public function getModule() {
        return $this->module;
    }


    /**
     * Set number
     *
     * @param SearchLongField $number
     * @return IssueSearchBasic
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
     * Set originalFixedIn
     *
     * @param SearchStringField $originalFixedIn
     * @return IssueSearchBasic
     */
    public function setOriginalFixedIn(SearchStringField $originalFixedIn) {
        $this->originalFixedIn = $originalFixedIn;
        return $this;
    }

    /**
     * Get originalFixedIn
     *
     * @return SearchStringField
     */
    public function getOriginalFixedIn() {
        return $this->originalFixedIn;
    }


    /**
     * Set priority
     *
     * @param SearchMultiSelectField $priority
     * @return IssueSearchBasic
     */
    public function setPriority(SearchMultiSelectField $priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get priority
     *
     * @return SearchMultiSelectField
     */
    public function getPriority() {
        return $this->priority;
    }


    /**
     * Set product
     *
     * @param SearchMultiSelectField $product
     * @return IssueSearchBasic
     */
    public function setProduct(SearchMultiSelectField $product) {
        $this->product = $product;
        return $this;
    }

    /**
     * Get product
     *
     * @return SearchMultiSelectField
     */
    public function getProduct() {
        return $this->product;
    }


    /**
     * Set productTeam
     *
     * @param SearchMultiSelectField $productTeam
     * @return IssueSearchBasic
     */
    public function setProductTeam(SearchMultiSelectField $productTeam) {
        $this->productTeam = $productTeam;
        return $this;
    }

    /**
     * Get productTeam
     *
     * @return SearchMultiSelectField
     */
    public function getProductTeam() {
        return $this->productTeam;
    }


    /**
     * Set relatedIssue
     *
     * @param SearchMultiSelectField $relatedIssue
     * @return IssueSearchBasic
     */
    public function setRelatedIssue(SearchMultiSelectField $relatedIssue) {
        $this->relatedIssue = $relatedIssue;
        return $this;
    }

    /**
     * Get relatedIssue
     *
     * @return SearchMultiSelectField
     */
    public function getRelatedIssue() {
        return $this->relatedIssue;
    }


    /**
     * Set relationship
     *
     * @param SearchEnumMultiSelectField $relationship
     * @return IssueSearchBasic
     */
    public function setRelationship(SearchEnumMultiSelectField $relationship) {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Get relationship
     *
     * @return SearchEnumMultiSelectField
     */
    public function getRelationship() {
        return $this->relationship;
    }


    /**
     * Set relationshipComment
     *
     * @param SearchStringField $relationshipComment
     * @return IssueSearchBasic
     */
    public function setRelationshipComment(SearchStringField $relationshipComment) {
        $this->relationshipComment = $relationshipComment;
        return $this;
    }

    /**
     * Get relationshipComment
     *
     * @return SearchStringField
     */
    public function getRelationshipComment() {
        return $this->relationshipComment;
    }


    /**
     * Set reportedBy
     *
     * @param SearchMultiSelectField $reportedBy
     * @return IssueSearchBasic
     */
    public function setReportedBy(SearchMultiSelectField $reportedBy) {
        $this->reportedBy = $reportedBy;
        return $this;
    }

    /**
     * Get reportedBy
     *
     * @return SearchMultiSelectField
     */
    public function getReportedBy() {
        return $this->reportedBy;
    }


    /**
     * Set reproduce
     *
     * @param SearchMultiSelectField $reproduce
     * @return IssueSearchBasic
     */
    public function setReproduce(SearchMultiSelectField $reproduce) {
        $this->reproduce = $reproduce;
        return $this;
    }

    /**
     * Get reproduce
     *
     * @return SearchMultiSelectField
     */
    public function getReproduce() {
        return $this->reproduce;
    }


    /**
     * Set resolved
     *
     * @param SearchDateField $resolved
     * @return IssueSearchBasic
     */
    public function setResolved(SearchDateField $resolved) {
        $this->resolved = $resolved;
        return $this;
    }

    /**
     * Get resolved
     *
     * @return SearchDateField
     */
    public function getResolved() {
        return $this->resolved;
    }


    /**
     * Set resolvedBy
     *
     * @param SearchMultiSelectField $resolvedBy
     * @return IssueSearchBasic
     */
    public function setResolvedBy(SearchMultiSelectField $resolvedBy) {
        $this->resolvedBy = $resolvedBy;
        return $this;
    }

    /**
     * Get resolvedBy
     *
     * @return SearchMultiSelectField
     */
    public function getResolvedBy() {
        return $this->resolvedBy;
    }


    /**
     * Set reviewer
     *
     * @param SearchMultiSelectField $reviewer
     * @return IssueSearchBasic
     */
    public function setReviewer(SearchMultiSelectField $reviewer) {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Get reviewer
     *
     * @return SearchMultiSelectField
     */
    public function getReviewer() {
        return $this->reviewer;
    }


    /**
     * Set severity
     *
     * @param SearchMultiSelectField $severity
     * @return IssueSearchBasic
     */
    public function setSeverity(SearchMultiSelectField $severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Get severity
     *
     * @return SearchMultiSelectField
     */
    public function getSeverity() {
        return $this->severity;
    }


    /**
     * Set source
     *
     * @param SearchEnumMultiSelectField $source
     * @return IssueSearchBasic
     */
    public function setSource(SearchEnumMultiSelectField $source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSource() {
        return $this->source;
    }


    /**
     * Set status
     *
     * @param SearchMultiSelectField $status
     * @return IssueSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set tags
     *
     * @param SearchMultiSelectField $tags
     * @return IssueSearchBasic
     */
    public function setTags(SearchMultiSelectField $tags) {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Get tags
     *
     * @return SearchMultiSelectField
     */
    public function getTags() {
        return $this->tags;
    }


    /**
     * Set tracking
     *
     * @param SearchBooleanField $tracking
     * @return IssueSearchBasic
     */
    public function setTracking(SearchBooleanField $tracking) {
        $this->tracking = $tracking;
        return $this;
    }

    /**
     * Get tracking
     *
     * @return SearchBooleanField
     */
    public function getTracking() {
        return $this->tracking;
    }


    /**
     * Set type
     *
     * @param SearchMultiSelectField $type
     * @return IssueSearchBasic
     */
    public function setType(SearchMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set userType
     *
     * @param SearchMultiSelectField $userType
     * @return IssueSearchBasic
     */
    public function setUserType(SearchMultiSelectField $userType) {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Get userType
     *
     * @return SearchMultiSelectField
     */
    public function getUserType() {
        return $this->userType;
    }


    /**
     * Set versionBroken
     *
     * @param SearchMultiSelectField $versionBroken
     * @return IssueSearchBasic
     */
    public function setVersionBroken(SearchMultiSelectField $versionBroken) {
        $this->versionBroken = $versionBroken;
        return $this;
    }

    /**
     * Get versionBroken
     *
     * @return SearchMultiSelectField
     */
    public function getVersionBroken() {
        return $this->versionBroken;
    }


    /**
     * Set versionFixed
     *
     * @param SearchMultiSelectField $versionFixed
     * @return IssueSearchBasic
     */
    public function setVersionFixed(SearchMultiSelectField $versionFixed) {
        $this->versionFixed = $versionFixed;
        return $this;
    }

    /**
     * Get versionFixed
     *
     * @return SearchMultiSelectField
     */
    public function getVersionFixed() {
        return $this->versionFixed;
    }


    /**
     * Set versionTarget
     *
     * @param SearchMultiSelectField $versionTarget
     * @return IssueSearchBasic
     */
    public function setVersionTarget(SearchMultiSelectField $versionTarget) {
        $this->versionTarget = $versionTarget;
        return $this;
    }

    /**
     * Get versionTarget
     *
     * @return SearchMultiSelectField
     */
    public function getVersionTarget() {
        return $this->versionTarget;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return IssueSearchBasic
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