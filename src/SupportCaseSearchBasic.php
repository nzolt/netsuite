<?php

namespace Nzolt\NetSuite;

class SupportCaseSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchBooleanField $awaitingReply
     */
    protected $awaitingReply = null;

    /**
     * @var SearchStringField $caseNumber
     */
    protected $caseNumber = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchDateField $closedDate
     */
    protected $closedDate = null;

    /**
     * @var SearchStringField $company
     */
    protected $company = null;

    /**
     * @var SearchStringField $contact
     */
    protected $contact = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchMultiSelectField $escalateTo
     */
    protected $escalateTo = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchBooleanField $helpDesk
     */
    protected $helpDesk = null;

    /**
     * @var SearchStringField $inboundEmail
     */
    protected $inboundEmail = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchMultiSelectField $issue
     */
    protected $issue = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchBooleanField $lastMessage
     */
    protected $lastMessage = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchDateField $lastReopenedDate
     */
    protected $lastReopenedDate = null;

    /**
     * @var SearchBooleanField $locked
     */
    protected $locked = null;

    /**
     * @var SearchStringField $message
     */
    protected $message = null;

    /**
     * @var SearchMultiSelectField $messageAuthor
     */
    protected $messageAuthor = null;

    /**
     * @var SearchDateField $messageDate
     */
    protected $messageDate = null;

    /**
     * @var SearchBooleanField $messageType
     */
    protected $messageType = null;

    /**
     * @var SearchMultiSelectField $module
     */
    protected $module = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchMultiSelectField $origin
     */
    protected $origin = null;

    /**
     * @var SearchMultiSelectField $priority
     */
    protected $priority = null;

    /**
     * @var SearchMultiSelectField $product
     */
    protected $product = null;

    /**
     * @var SearchMultiSelectField $profile
     */
    protected $profile = null;

    /**
     * @var SearchStringField $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchEnumMultiSelectField $stage
     */
    protected $stage = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param SearchMultiSelectField $assigned
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAwaitingReply()
    {
      return $this->awaitingReply;
    }

    /**
     * @param SearchBooleanField $awaitingReply
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setAwaitingReply($awaitingReply)
    {
      $this->awaitingReply = $awaitingReply;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCaseNumber()
    {
      return $this->caseNumber;
    }

    /**
     * @param SearchStringField $caseNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setCaseNumber($caseNumber)
    {
      $this->caseNumber = $caseNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getClosedDate()
    {
      return $this->closedDate;
    }

    /**
     * @param SearchDateField $closedDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setClosedDate($closedDate)
    {
      $this->closedDate = $closedDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchStringField $company
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchStringField $contact
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchStringField $email
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEscalateTo()
    {
      return $this->escalateTo;
    }

    /**
     * @param SearchMultiSelectField $escalateTo
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setEscalateTo($escalateTo)
    {
      $this->escalateTo = $escalateTo;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHelpDesk()
    {
      return $this->helpDesk;
    }

    /**
     * @param SearchBooleanField $helpDesk
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setHelpDesk($helpDesk)
    {
      $this->helpDesk = $helpDesk;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getInboundEmail()
    {
      return $this->inboundEmail;
    }

    /**
     * @param SearchStringField $inboundEmail
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setInboundEmail($inboundEmail)
    {
      $this->inboundEmail = $inboundEmail;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIssue()
    {
      return $this->issue;
    }

    /**
     * @param SearchMultiSelectField $issue
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setIssue($issue)
    {
      $this->issue = $issue;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLastMessage()
    {
      return $this->lastMessage;
    }

    /**
     * @param SearchBooleanField $lastMessage
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setLastMessage($lastMessage)
    {
      $this->lastMessage = $lastMessage;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastReopenedDate()
    {
      return $this->lastReopenedDate;
    }

    /**
     * @param SearchDateField $lastReopenedDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setLastReopenedDate($lastReopenedDate)
    {
      $this->lastReopenedDate = $lastReopenedDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocked()
    {
      return $this->locked;
    }

    /**
     * @param SearchBooleanField $locked
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setLocked($locked)
    {
      $this->locked = $locked;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchStringField $message
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMessageAuthor()
    {
      return $this->messageAuthor;
    }

    /**
     * @param SearchMultiSelectField $messageAuthor
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setMessageAuthor($messageAuthor)
    {
      $this->messageAuthor = $messageAuthor;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getMessageDate()
    {
      return $this->messageDate;
    }

    /**
     * @param SearchDateField $messageDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setMessageDate($messageDate)
    {
      $this->messageDate = $messageDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMessageType()
    {
      return $this->messageType;
    }

    /**
     * @param SearchBooleanField $messageType
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param SearchMultiSelectField $module
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setModule($module)
    {
      $this->module = $module;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchLongField $number
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param SearchMultiSelectField $origin
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchMultiSelectField $priority
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param SearchMultiSelectField $product
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProfile()
    {
      return $this->profile;
    }

    /**
     * @param SearchMultiSelectField $profile
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param SearchStringField $serialNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchEnumMultiSelectField $stage
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\SupportCaseSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
