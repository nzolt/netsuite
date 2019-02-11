<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Support\Types\IssueTrackCode;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Issue
 */
class Issue extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $issueNumber;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueType;

    /**
     * @access public
     * @var RecordRef
     */
    public $product;

    /**
     * @access public
     * @var RecordRef
     */
    public $module;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $productTeam;

    /**
     * @access public
     * @var RecordRef
     */
    public $source;

    /**
     * @access public
     * @var RecordRef
     */
    public $reportedBy;

    /**
     * @access public
     * @var RecordRef
     */
    public $reproduce;

    /**
     * @access public
     * @var RecordRef
     */
    public $versionBroken;

    /**
     * @access public
     * @var RecordRef
     */
    public $buildBroken;

    /**
     * @access public
     * @var RecordRef
     */
    public $versionTarget;

    /**
     * @access public
     * @var RecordRef
     */
    public $buildTarget;

    /**
     * @access public
     * @var RecordRef
     */
    public $versionFixed;

    /**
     * @access public
     * @var RecordRef
     */
    public $buildFixed;

    /**
     * @access public
     * @var RecordRef
     */
    public $severity;

    /**
     * @access public
     * @var RecordRef
     */
    public $priority;

    /**
     * @access public
     * @var boolean
     */
    protected $isShowStopper;

    /**
     * @access public
     * @var RecordRef
     */
    public $assigned;

    /**
     * @access public
     * @var RecordRef
     */
    public $reviewer;

    /**
     * @access public
     * @var boolean
     */
    protected $isReviewed;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueStatus;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $issueTagsList;

    /**
     * @access public
     * @var string
     */
    protected $issueAbstract;

    /**
     * @access public
     * @var string
     */
    protected $newDetails;

    /**
     * @access public
     * @var boolean
     */
    protected $isOwner;

    /**
     * @access public
     * @var IssueTrackCode
     */
    protected $trackCode;

    /**
     * @access public
     * @var boolean
     */
    protected $emailAssignee;

    /**
     * @access public
     * @var EmailEmployeesList
     */
    protected $emailEmployeesList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $emailCellsList;

    /**
     * @access public
     * @var string
     */
    protected $externalAbstract;

    /**
     * @access public
     * @var string
     */
    protected $externalDetails;

    /**
     * @access public
     * @var IssueVersionList
     */
    protected $brokenInVersionList;

    /**
     * @access public
     * @var IssueVersionList
     */
    protected $targetVersionList;

    /**
     * @access public
     * @var IssueVersionList
     */
    protected $fixedInVersionList;

    /**
     * @access public
     * @var IssueRelatedIssuesList
     */
    protected $relatedIssuesList;

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
    	"customForm" => "RecordRef",
    	"issueNumber" => "string",
    	"createdDate" => "dateTime",
    	"issueType" => "RecordRef",
    	"product" => "RecordRef",
    	"module" => "RecordRef",
    	"item" => "RecordRef",
    	"productTeam" => "RecordRef",
    	"source" => "RecordRef",
    	"reportedBy" => "RecordRef",
    	"reproduce" => "RecordRef",
    	"versionBroken" => "RecordRef",
    	"buildBroken" => "RecordRef",
    	"versionTarget" => "RecordRef",
    	"buildTarget" => "RecordRef",
    	"versionFixed" => "RecordRef",
    	"buildFixed" => "RecordRef",
    	"severity" => "RecordRef",
    	"priority" => "RecordRef",
    	"isShowStopper" => "boolean",
    	"assigned" => "RecordRef",
    	"reviewer" => "RecordRef",
    	"isReviewed" => "boolean",
    	"issueStatus" => "RecordRef",
    	"lastModifiedDate" => "dateTime",
    	"issueTagsList" => "RecordRefList",
    	"issueAbstract" => "string",
    	"newDetails" => "string",
    	"isOwner" => "boolean",
    	"trackCode" => "IssueTrackCode",
    	"emailAssignee" => "boolean",
    	"emailEmployeesList" => "EmailEmployeesList",
    	"emailCellsList" => "RecordRefList",
    	"externalAbstract" => "string",
    	"externalDetails" => "string",
    	"brokenInVersionList" => "IssueVersionList",
    	"targetVersionList" => "IssueVersionList",
    	"fixedInVersionList" => "IssueVersionList",
    	"relatedIssuesList" => "IssueRelatedIssuesList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set issueNumber
     *
     * @param string $issueNumber
     * @return Issue
     */
    public function setIssueNumber($issueNumber) {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * Get issueNumber
     *
     * @return string
     */
    public function getIssueNumber() {
        return $this->issueNumber;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Issue
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set isShowStopper
     *
     * @param boolean $isShowStopper
     * @return Issue
     */
    public function setIsShowStopper($isShowStopper) {
        $this->isShowStopper = $isShowStopper;
        return $this;
    }

    /**
     * Get isShowStopper
     *
     * @return boolean
     */
    public function getIsShowStopper() {
        return $this->isShowStopper;
    }


    /**
     * Set isReviewed
     *
     * @param boolean $isReviewed
     * @return Issue
     */
    public function setIsReviewed($isReviewed) {
        $this->isReviewed = $isReviewed;
        return $this;
    }

    /**
     * Get isReviewed
     *
     * @return boolean
     */
    public function getIsReviewed() {
        return $this->isReviewed;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Issue
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set issueTagsList
     *
     * @param RecordRefList $issueTagsList
     * @return Issue
     */
    public function setIssueTagsList(RecordRefList $issueTagsList) {
        $this->issueTagsList = $issueTagsList;
        return $this;
    }

    /**
     * Get issueTagsList
     *
     * @return RecordRefList
     */
    public function getIssueTagsList() {
        return $this->issueTagsList;
    }


    /**
     * Set issueAbstract
     *
     * @param string $issueAbstract
     * @return Issue
     */
    public function setIssueAbstract($issueAbstract) {
        $this->issueAbstract = $issueAbstract;
        return $this;
    }

    /**
     * Get issueAbstract
     *
     * @return string
     */
    public function getIssueAbstract() {
        return $this->issueAbstract;
    }


    /**
     * Set newDetails
     *
     * @param string $newDetails
     * @return Issue
     */
    public function setNewDetails($newDetails) {
        $this->newDetails = $newDetails;
        return $this;
    }

    /**
     * Get newDetails
     *
     * @return string
     */
    public function getNewDetails() {
        return $this->newDetails;
    }


    /**
     * Set isOwner
     *
     * @param boolean $isOwner
     * @return Issue
     */
    public function setIsOwner($isOwner) {
        $this->isOwner = $isOwner;
        return $this;
    }

    /**
     * Get isOwner
     *
     * @return boolean
     */
    public function getIsOwner() {
        return $this->isOwner;
    }


    /**
     * Set trackCode
     *
     * @param IssueTrackCode $trackCode
     * @return Issue
     */
    public function setTrackCode(IssueTrackCode $trackCode) {
        $this->trackCode = $trackCode;
        return $this;
    }

    /**
     * Get trackCode
     *
     * @return IssueTrackCode
     */
    public function getTrackCode() {
        return $this->trackCode;
    }


    /**
     * Set emailAssignee
     *
     * @param boolean $emailAssignee
     * @return Issue
     */
    public function setEmailAssignee($emailAssignee) {
        $this->emailAssignee = $emailAssignee;
        return $this;
    }

    /**
     * Get emailAssignee
     *
     * @return boolean
     */
    public function getEmailAssignee() {
        return $this->emailAssignee;
    }


    /**
     * Set emailEmployeesList
     *
     * @param EmailEmployeesList $emailEmployeesList
     * @return Issue
     */
    public function setEmailEmployeesList(EmailEmployeesList $emailEmployeesList) {
        $this->emailEmployeesList = $emailEmployeesList;
        return $this;
    }

    /**
     * Get emailEmployeesList
     *
     * @return EmailEmployeesList
     */
    public function getEmailEmployeesList() {
        return $this->emailEmployeesList;
    }


    /**
     * Set emailCellsList
     *
     * @param RecordRefList $emailCellsList
     * @return Issue
     */
    public function setEmailCellsList(RecordRefList $emailCellsList) {
        $this->emailCellsList = $emailCellsList;
        return $this;
    }

    /**
     * Get emailCellsList
     *
     * @return RecordRefList
     */
    public function getEmailCellsList() {
        return $this->emailCellsList;
    }


    /**
     * Set externalAbstract
     *
     * @param string $externalAbstract
     * @return Issue
     */
    public function setExternalAbstract($externalAbstract) {
        $this->externalAbstract = $externalAbstract;
        return $this;
    }

    /**
     * Get externalAbstract
     *
     * @return string
     */
    public function getExternalAbstract() {
        return $this->externalAbstract;
    }


    /**
     * Set externalDetails
     *
     * @param string $externalDetails
     * @return Issue
     */
    public function setExternalDetails($externalDetails) {
        $this->externalDetails = $externalDetails;
        return $this;
    }

    /**
     * Get externalDetails
     *
     * @return string
     */
    public function getExternalDetails() {
        return $this->externalDetails;
    }


    /**
     * Set brokenInVersionList
     *
     * @param IssueVersionList $brokenInVersionList
     * @return Issue
     */
    public function setBrokenInVersionList(IssueVersionList $brokenInVersionList) {
        $this->brokenInVersionList = $brokenInVersionList;
        return $this;
    }

    /**
     * Get brokenInVersionList
     *
     * @return IssueVersionList
     */
    public function getBrokenInVersionList() {
        return $this->brokenInVersionList;
    }


    /**
     * Set targetVersionList
     *
     * @param IssueVersionList $targetVersionList
     * @return Issue
     */
    public function setTargetVersionList(IssueVersionList $targetVersionList) {
        $this->targetVersionList = $targetVersionList;
        return $this;
    }

    /**
     * Get targetVersionList
     *
     * @return IssueVersionList
     */
    public function getTargetVersionList() {
        return $this->targetVersionList;
    }


    /**
     * Set fixedInVersionList
     *
     * @param IssueVersionList $fixedInVersionList
     * @return Issue
     */
    public function setFixedInVersionList(IssueVersionList $fixedInVersionList) {
        $this->fixedInVersionList = $fixedInVersionList;
        return $this;
    }

    /**
     * Get fixedInVersionList
     *
     * @return IssueVersionList
     */
    public function getFixedInVersionList() {
        return $this->fixedInVersionList;
    }


    /**
     * Set relatedIssuesList
     *
     * @param IssueRelatedIssuesList $relatedIssuesList
     * @return Issue
     */
    public function setRelatedIssuesList(IssueRelatedIssuesList $relatedIssuesList) {
        $this->relatedIssuesList = $relatedIssuesList;
        return $this;
    }

    /**
     * Get relatedIssuesList
     *
     * @return IssueRelatedIssuesList
     */
    public function getRelatedIssuesList() {
        return $this->relatedIssuesList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Issue
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
     * @return Issue
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
     * @return Issue
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