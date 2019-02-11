<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * SupportCase
 */
class SupportCase extends Record {

    /**
     * @access public
     * @var string
     */
    protected $escalationMessage;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastReopenedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var string
     */
    protected $incomingMessage;

    /**
     * @access public
     * @var RecordRef
     */
    public $insertSolution;

    /**
     * @access public
     * @var string
     */
    protected $outgoingMessage;

    /**
     * @access public
     * @var string
     */
    protected $searchSolution;

    /**
     * @access public
     * @var boolean
     */
    protected $emailForm;

    /**
     * @access public
     * @var string
     */
    protected $newSolutionFromMsg;

    /**
     * @access public
     * @var boolean
     */
    protected $internalOnly;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var string
     */
    protected $caseNumber;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

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
     * @var dateTime
     */
    protected $lastMessageDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $profile;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var string
     */
    protected $phone;

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
    public $serialNumber;

    /**
     * @access public
     * @var string
     */
    protected $inboundEmail;

    /**
     * @access public
     * @var RecordRef
     */
    public $issue;

    /**
     * @access public
     * @var RecordRef
     */
    public $status;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRef
     */
    public $priority;

    /**
     * @access public
     * @var RecordRef
     */
    public $origin;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var RecordRef
     */
    public $assigned;

    /**
     * @access public
     * @var boolean
     */
    protected $helpDesk;

    /**
     * @access public
     * @var EmailEmployeesList
     */
    protected $emailEmployeesList;

    /**
     * @access public
     * @var SupportCaseEscalateToList
     */
    protected $escalateToList;

    /**
     * @access public
     * @var SupportCaseTimeItemList
     */
    protected $timeItemList;

    /**
     * @access public
     * @var SupportCaseSolutionsList
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
    	"escalationMessage" => "string",
    	"lastReopenedDate" => "dateTime",
    	"endDate" => "dateTime",
    	"incomingMessage" => "string",
    	"insertSolution" => "RecordRef",
    	"outgoingMessage" => "string",
    	"searchSolution" => "string",
    	"emailForm" => "boolean",
    	"newSolutionFromMsg" => "string",
    	"internalOnly" => "boolean",
    	"customForm" => "RecordRef",
    	"title" => "string",
    	"caseNumber" => "string",
    	"startDate" => "dateTime",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"lastMessageDate" => "dateTime",
    	"company" => "RecordRef",
    	"profile" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"contact" => "RecordRef",
    	"email" => "string",
    	"phone" => "string",
    	"product" => "RecordRef",
    	"module" => "RecordRef",
    	"item" => "RecordRef",
    	"serialNumber" => "RecordRef",
    	"inboundEmail" => "string",
    	"issue" => "RecordRef",
    	"status" => "RecordRef",
    	"isInactive" => "boolean",
    	"priority" => "RecordRef",
    	"origin" => "RecordRef",
    	"category" => "RecordRef",
    	"assigned" => "RecordRef",
    	"helpDesk" => "boolean",
    	"emailEmployeesList" => "EmailEmployeesList",
    	"escalateToList" => "SupportCaseEscalateToList",
    	"timeItemList" => "SupportCaseTimeItemList",
    	"solutionsList" => "SupportCaseSolutionsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set escalationMessage
     *
     * @param string $escalationMessage
     * @return SupportCase
     */
    public function setEscalationMessage($escalationMessage) {
        $this->escalationMessage = $escalationMessage;
        return $this;
    }

    /**
     * Get escalationMessage
     *
     * @return string
     */
    public function getEscalationMessage() {
        return $this->escalationMessage;
    }


    /**
     * Set lastReopenedDate
     *
     * @param \DateTime $lastReopenedDate
     * @return SupportCase
     */
    public function setLastReopenedDate(\DateTime $lastReopenedDate) {
        $this->lastReopenedDate = $lastReopenedDate->format('c');
        return $this;
    }

    /**
     * Get lastReopenedDate
     *
     * @return \DateTime
     */
    public function getLastReopenedDate() {
        return new \DateTime($this->lastReopenedDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return SupportCase
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
     * Set incomingMessage
     *
     * @param string $incomingMessage
     * @return SupportCase
     */
    public function setIncomingMessage($incomingMessage) {
        $this->incomingMessage = $incomingMessage;
        return $this;
    }

    /**
     * Get incomingMessage
     *
     * @return string
     */
    public function getIncomingMessage() {
        return $this->incomingMessage;
    }


    /**
     * Set outgoingMessage
     *
     * @param string $outgoingMessage
     * @return SupportCase
     */
    public function setOutgoingMessage($outgoingMessage) {
        $this->outgoingMessage = $outgoingMessage;
        return $this;
    }

    /**
     * Get outgoingMessage
     *
     * @return string
     */
    public function getOutgoingMessage() {
        return $this->outgoingMessage;
    }


    /**
     * Set searchSolution
     *
     * @param string $searchSolution
     * @return SupportCase
     */
    public function setSearchSolution($searchSolution) {
        $this->searchSolution = $searchSolution;
        return $this;
    }

    /**
     * Get searchSolution
     *
     * @return string
     */
    public function getSearchSolution() {
        return $this->searchSolution;
    }


    /**
     * Set emailForm
     *
     * @param boolean $emailForm
     * @return SupportCase
     */
    public function setEmailForm($emailForm) {
        $this->emailForm = $emailForm;
        return $this;
    }

    /**
     * Get emailForm
     *
     * @return boolean
     */
    public function getEmailForm() {
        return $this->emailForm;
    }


    /**
     * Set newSolutionFromMsg
     *
     * @param string $newSolutionFromMsg
     * @return SupportCase
     */
    public function setNewSolutionFromMsg($newSolutionFromMsg) {
        $this->newSolutionFromMsg = $newSolutionFromMsg;
        return $this;
    }

    /**
     * Get newSolutionFromMsg
     *
     * @return string
     */
    public function getNewSolutionFromMsg() {
        return $this->newSolutionFromMsg;
    }


    /**
     * Set internalOnly
     *
     * @param boolean $internalOnly
     * @return SupportCase
     */
    public function setInternalOnly($internalOnly) {
        $this->internalOnly = $internalOnly;
        return $this;
    }

    /**
     * Get internalOnly
     *
     * @return boolean
     */
    public function getInternalOnly() {
        return $this->internalOnly;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return SupportCase
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
     * Set caseNumber
     *
     * @param string $caseNumber
     * @return SupportCase
     */
    public function setCaseNumber($caseNumber) {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * Get caseNumber
     *
     * @return string
     */
    public function getCaseNumber() {
        return $this->caseNumber;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return SupportCase
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return SupportCase
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
     * @return SupportCase
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
     * Set lastMessageDate
     *
     * @param \DateTime $lastMessageDate
     * @return SupportCase
     */
    public function setLastMessageDate(\DateTime $lastMessageDate) {
        $this->lastMessageDate = $lastMessageDate->format('c');
        return $this;
    }

    /**
     * Get lastMessageDate
     *
     * @return \DateTime
     */
    public function getLastMessageDate() {
        return new \DateTime($this->lastMessageDate);
    }


    /**
     * Set email
     *
     * @param string $email
     * @return SupportCase
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * @return SupportCase
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set inboundEmail
     *
     * @param string $inboundEmail
     * @return SupportCase
     */
    public function setInboundEmail($inboundEmail) {
        $this->inboundEmail = $inboundEmail;
        return $this;
    }

    /**
     * Get inboundEmail
     *
     * @return string
     */
    public function getInboundEmail() {
        return $this->inboundEmail;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SupportCase
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
     * Set helpDesk
     *
     * @param boolean $helpDesk
     * @return SupportCase
     */
    public function setHelpDesk($helpDesk) {
        $this->helpDesk = $helpDesk;
        return $this;
    }

    /**
     * Get helpDesk
     *
     * @return boolean
     */
    public function getHelpDesk() {
        return $this->helpDesk;
    }


    /**
     * Set emailEmployeesList
     *
     * @param EmailEmployeesList $emailEmployeesList
     * @return SupportCase
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
     * Set escalateToList
     *
     * @param SupportCaseEscalateToList $escalateToList
     * @return SupportCase
     */
    public function setEscalateToList(SupportCaseEscalateToList $escalateToList) {
        $this->escalateToList = $escalateToList;
        return $this;
    }

    /**
     * Get escalateToList
     *
     * @return SupportCaseEscalateToList
     */
    public function getEscalateToList() {
        return $this->escalateToList;
    }


    /**
     * Set timeItemList
     *
     * @param SupportCaseTimeItemList $timeItemList
     * @return SupportCase
     */
    public function setTimeItemList(SupportCaseTimeItemList $timeItemList) {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * Get timeItemList
     *
     * @return SupportCaseTimeItemList
     */
    public function getTimeItemList() {
        return $this->timeItemList;
    }


    /**
     * Set solutionsList
     *
     * @param SupportCaseSolutionsList $solutionsList
     * @return SupportCase
     */
    public function setSolutionsList(SupportCaseSolutionsList $solutionsList) {
        $this->solutionsList = $solutionsList;
        return $this;
    }

    /**
     * Get solutionsList
     *
     * @return SupportCaseSolutionsList
     */
    public function getSolutionsList() {
        return $this->solutionsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return SupportCase
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
     * @return SupportCase
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
     * @return SupportCase
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