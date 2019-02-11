<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Support\Types\SolutionStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Solution
 */
class Solution extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $solutionCode;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var SolutionStatus
     */
    protected $status;

    /**
     * @access public
     * @var boolean
     */
    protected $displayOnline;

    /**
     * @access public
     * @var RecordRef
     */
    public $assigned;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $longDescription;

    /**
     * @access public
     * @var SolutionTopicsList
     */
    protected $topicsList;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SolutionsList
     */
    protected $solutionsList;

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
    	"solutionCode" => "string",
    	"title" => "string",
    	"message" => "string",
    	"status" => "SolutionStatus",
    	"displayOnline" => "boolean",
    	"assigned" => "RecordRef",
    	"isInactive" => "boolean",
    	"longDescription" => "string",
    	"topicsList" => "SolutionTopicsList",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"solutionsList" => "SolutionsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set solutionCode
     *
     * @param string $solutionCode
     * @return Solution
     */
    public function setSolutionCode($solutionCode) {
        $this->solutionCode = $solutionCode;
        return $this;
    }

    /**
     * Get solutionCode
     *
     * @return string
     */
    public function getSolutionCode() {
        return $this->solutionCode;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Solution
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Solution
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set status
     *
     * @param SolutionStatus $status
     * @return Solution
     */
    public function setStatus(SolutionStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SolutionStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set displayOnline
     *
     * @param boolean $displayOnline
     * @return Solution
     */
    public function setDisplayOnline($displayOnline) {
        $this->displayOnline = $displayOnline;
        return $this;
    }

    /**
     * Get displayOnline
     *
     * @return boolean
     */
    public function getDisplayOnline() {
        return $this->displayOnline;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Solution
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
     * Set longDescription
     *
     * @param string $longDescription
     * @return Solution
     */
    public function setLongDescription($longDescription) {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription() {
        return $this->longDescription;
    }


    /**
     * Set topicsList
     *
     * @param SolutionTopicsList $topicsList
     * @return Solution
     */
    public function setTopicsList(SolutionTopicsList $topicsList) {
        $this->topicsList = $topicsList;
        return $this;
    }

    /**
     * Get topicsList
     *
     * @return SolutionTopicsList
     */
    public function getTopicsList() {
        return $this->topicsList;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Solution
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Solution
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
     * Set solutionsList
     *
     * @param SolutionsList $solutionsList
     * @return Solution
     */
    public function setSolutionsList(SolutionsList $solutionsList) {
        $this->solutionsList = $solutionsList;
        return $this;
    }

    /**
     * Get solutionsList
     *
     * @return SolutionsList
     */
    public function getSolutionsList() {
        return $this->solutionsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Solution
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
     * @return Solution
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
     * @return Solution
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