<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * SupportCaseSearchBasic
 */
class SupportCaseSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $assigned;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $awaitingReply;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $caseNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $closedDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $company;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $contact;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $escalateTo;

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
     * @var SearchBooleanField
     */
    protected $helpDesk;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $inboundEmail;

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
     * @var SearchMultiSelectField
     */
    protected $issue;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $lastMessage;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastReopenedDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $locked;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $message;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $messageAuthor;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $messageDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $messageType;

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
     * @var SearchMultiSelectField
     */
    protected $origin;

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
    protected $profile;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serialNumber;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $stage;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"assigned" => "SearchMultiSelectField",
    	"awaitingReply" => "SearchBooleanField",
    	"caseNumber" => "SearchStringField",
    	"category" => "SearchMultiSelectField",
    	"closedDate" => "SearchDateField",
    	"company" => "SearchStringField",
    	"contact" => "SearchStringField",
    	"createdDate" => "SearchDateField",
    	"email" => "SearchStringField",
    	"escalateTo" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"helpDesk" => "SearchBooleanField",
    	"inboundEmail" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"issue" => "SearchMultiSelectField",
    	"item" => "SearchMultiSelectField",
    	"lastMessage" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastReopenedDate" => "SearchDateField",
    	"locked" => "SearchBooleanField",
    	"message" => "SearchStringField",
    	"messageAuthor" => "SearchMultiSelectField",
    	"messageDate" => "SearchDateField",
    	"messageType" => "SearchBooleanField",
    	"module" => "SearchMultiSelectField",
    	"number" => "SearchLongField",
    	"origin" => "SearchMultiSelectField",
    	"priority" => "SearchMultiSelectField",
    	"product" => "SearchMultiSelectField",
    	"profile" => "SearchMultiSelectField",
    	"serialNumber" => "SearchStringField",
    	"stage" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set assigned
     *
     * @param SearchMultiSelectField $assigned
     * @return SupportCaseSearchBasic
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
     * Set awaitingReply
     *
     * @param SearchBooleanField $awaitingReply
     * @return SupportCaseSearchBasic
     */
    public function setAwaitingReply(SearchBooleanField $awaitingReply) {
        $this->awaitingReply = $awaitingReply;
        return $this;
    }

    /**
     * Get awaitingReply
     *
     * @return SearchBooleanField
     */
    public function getAwaitingReply() {
        return $this->awaitingReply;
    }


    /**
     * Set caseNumber
     *
     * @param SearchStringField $caseNumber
     * @return SupportCaseSearchBasic
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
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return SupportCaseSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set closedDate
     *
     * @param SearchDateField $closedDate
     * @return SupportCaseSearchBasic
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
     * Set company
     *
     * @param SearchStringField $company
     * @return SupportCaseSearchBasic
     */
    public function setCompany(SearchStringField $company) {
        $this->company = $company;
        return $this;
    }

    /**
     * Get company
     *
     * @return SearchStringField
     */
    public function getCompany() {
        return $this->company;
    }


    /**
     * Set contact
     *
     * @param SearchStringField $contact
     * @return SupportCaseSearchBasic
     */
    public function setContact(SearchStringField $contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return SearchStringField
     */
    public function getContact() {
        return $this->contact;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return SupportCaseSearchBasic
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
     * Set email
     *
     * @param SearchStringField $email
     * @return SupportCaseSearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set escalateTo
     *
     * @param SearchMultiSelectField $escalateTo
     * @return SupportCaseSearchBasic
     */
    public function setEscalateTo(SearchMultiSelectField $escalateTo) {
        $this->escalateTo = $escalateTo;
        return $this;
    }

    /**
     * Get escalateTo
     *
     * @return SearchMultiSelectField
     */
    public function getEscalateTo() {
        return $this->escalateTo;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
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
     * Set helpDesk
     *
     * @param SearchBooleanField $helpDesk
     * @return SupportCaseSearchBasic
     */
    public function setHelpDesk(SearchBooleanField $helpDesk) {
        $this->helpDesk = $helpDesk;
        return $this;
    }

    /**
     * Get helpDesk
     *
     * @return SearchBooleanField
     */
    public function getHelpDesk() {
        return $this->helpDesk;
    }


    /**
     * Set inboundEmail
     *
     * @param SearchStringField $inboundEmail
     * @return SupportCaseSearchBasic
     */
    public function setInboundEmail(SearchStringField $inboundEmail) {
        $this->inboundEmail = $inboundEmail;
        return $this;
    }

    /**
     * Get inboundEmail
     *
     * @return SearchStringField
     */
    public function getInboundEmail() {
        return $this->inboundEmail;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
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
     * Set issue
     *
     * @param SearchMultiSelectField $issue
     * @return SupportCaseSearchBasic
     */
    public function setIssue(SearchMultiSelectField $issue) {
        $this->issue = $issue;
        return $this;
    }

    /**
     * Get issue
     *
     * @return SearchMultiSelectField
     */
    public function getIssue() {
        return $this->issue;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return SupportCaseSearchBasic
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
     * Set lastMessage
     *
     * @param SearchBooleanField $lastMessage
     * @return SupportCaseSearchBasic
     */
    public function setLastMessage(SearchBooleanField $lastMessage) {
        $this->lastMessage = $lastMessage;
        return $this;
    }

    /**
     * Get lastMessage
     *
     * @return SearchBooleanField
     */
    public function getLastMessage() {
        return $this->lastMessage;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return SupportCaseSearchBasic
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
     * Set lastReopenedDate
     *
     * @param SearchDateField $lastReopenedDate
     * @return SupportCaseSearchBasic
     */
    public function setLastReopenedDate(SearchDateField $lastReopenedDate) {
        $this->lastReopenedDate = $lastReopenedDate;
        return $this;
    }

    /**
     * Get lastReopenedDate
     *
     * @return SearchDateField
     */
    public function getLastReopenedDate() {
        return $this->lastReopenedDate;
    }


    /**
     * Set locked
     *
     * @param SearchBooleanField $locked
     * @return SupportCaseSearchBasic
     */
    public function setLocked(SearchBooleanField $locked) {
        $this->locked = $locked;
        return $this;
    }

    /**
     * Get locked
     *
     * @return SearchBooleanField
     */
    public function getLocked() {
        return $this->locked;
    }


    /**
     * Set message
     *
     * @param SearchStringField $message
     * @return SupportCaseSearchBasic
     */
    public function setMessage(SearchStringField $message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return SearchStringField
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set messageAuthor
     *
     * @param SearchMultiSelectField $messageAuthor
     * @return SupportCaseSearchBasic
     */
    public function setMessageAuthor(SearchMultiSelectField $messageAuthor) {
        $this->messageAuthor = $messageAuthor;
        return $this;
    }

    /**
     * Get messageAuthor
     *
     * @return SearchMultiSelectField
     */
    public function getMessageAuthor() {
        return $this->messageAuthor;
    }


    /**
     * Set messageDate
     *
     * @param SearchDateField $messageDate
     * @return SupportCaseSearchBasic
     */
    public function setMessageDate(SearchDateField $messageDate) {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * Get messageDate
     *
     * @return SearchDateField
     */
    public function getMessageDate() {
        return $this->messageDate;
    }


    /**
     * Set messageType
     *
     * @param SearchBooleanField $messageType
     * @return SupportCaseSearchBasic
     */
    public function setMessageType(SearchBooleanField $messageType) {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Get messageType
     *
     * @return SearchBooleanField
     */
    public function getMessageType() {
        return $this->messageType;
    }


    /**
     * Set module
     *
     * @param SearchMultiSelectField $module
     * @return SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
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
     * Set origin
     *
     * @param SearchMultiSelectField $origin
     * @return SupportCaseSearchBasic
     */
    public function setOrigin(SearchMultiSelectField $origin) {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Get origin
     *
     * @return SearchMultiSelectField
     */
    public function getOrigin() {
        return $this->origin;
    }


    /**
     * Set priority
     *
     * @param SearchMultiSelectField $priority
     * @return SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
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
     * Set profile
     *
     * @param SearchMultiSelectField $profile
     * @return SupportCaseSearchBasic
     */
    public function setProfile(SearchMultiSelectField $profile) {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Get profile
     *
     * @return SearchMultiSelectField
     */
    public function getProfile() {
        return $this->profile;
    }


    /**
     * Set serialNumber
     *
     * @param SearchStringField $serialNumber
     * @return SupportCaseSearchBasic
     */
    public function setSerialNumber(SearchStringField $serialNumber) {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return SearchStringField
     */
    public function getSerialNumber() {
        return $this->serialNumber;
    }


    /**
     * Set stage
     *
     * @param SearchEnumMultiSelectField $stage
     * @return SupportCaseSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return SupportCaseSearchBasic
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
     * Set status
     *
     * @param SearchMultiSelectField $status
     * @return SupportCaseSearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return SupportCaseSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return SupportCaseSearchBasic
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
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return SupportCaseSearchBasic
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