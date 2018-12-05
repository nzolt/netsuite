<?php

namespace Nzolt\NetSuite;

class SupportCaseSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchColumnBooleanField[] $awaitingReply
     */
    protected $awaitingReply = null;

    /**
     * @var SearchColumnStringField[] $caseNumber
     */
    protected $caseNumber = null;

    /**
     * @var SearchColumnSelectField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnSelectField[] $company
     */
    protected $company = null;

    /**
     * @var SearchColumnSelectField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $customerStage
     */
    protected $customerStage = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $escalatee
     */
    protected $escalatee = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $helpDesk
     */
    protected $helpDesk = null;

    /**
     * @var SearchColumnStringField[] $inboundEmail
     */
    protected $inboundEmail = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnSelectField[] $issue
     */
    protected $issue = null;

    /**
     * @var SearchColumnStringField[] $issueNumber
     */
    protected $issueNumber = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDateField[] $lastMessageDate
     */
    protected $lastMessageDate = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnDateField[] $lastReopenedDate
     */
    protected $lastReopenedDate = null;

    /**
     * @var SearchColumnBooleanField[] $locked
     */
    protected $locked = null;

    /**
     * @var SearchColumnSelectField[] $module
     */
    protected $module = null;

    /**
     * @var SearchColumnSelectField[] $origin
     */
    protected $origin = null;

    /**
     * @var SearchColumnSelectField[] $priority
     */
    protected $priority = null;

    /**
     * @var SearchColumnSelectField[] $product
     */
    protected $product = null;

    /**
     * @var SearchColumnSelectField[] $profile
     */
    protected $profile = null;

    /**
     * @var SearchColumnStringField[] $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchColumnEnumSelectField[] $stage
     */
    protected $stage = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setAssigned(array $assigned = null)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAwaitingReply()
    {
      return $this->awaitingReply;
    }

    /**
     * @param SearchColumnBooleanField[] $awaitingReply
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setAwaitingReply(array $awaitingReply = null)
    {
      $this->awaitingReply = $awaitingReply;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseNumber()
    {
      return $this->caseNumber;
    }

    /**
     * @param SearchColumnStringField[] $caseNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCaseNumber(array $caseNumber = null)
    {
      $this->caseNumber = $caseNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCompany(array $company = null)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchColumnSelectField[] $contact
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCustomerStage()
    {
      return $this->customerStage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $customerStage
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCustomerStage(array $customerStage = null)
    {
      $this->customerStage = $customerStage;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEscalatee()
    {
      return $this->escalatee;
    }

    /**
     * @param SearchColumnSelectField[] $escalatee
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setEscalatee(array $escalatee = null)
    {
      $this->escalatee = $escalatee;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHelpDesk()
    {
      return $this->helpDesk;
    }

    /**
     * @param SearchColumnBooleanField[] $helpDesk
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setHelpDesk(array $helpDesk = null)
    {
      $this->helpDesk = $helpDesk;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInboundEmail()
    {
      return $this->inboundEmail;
    }

    /**
     * @param SearchColumnStringField[] $inboundEmail
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setInboundEmail(array $inboundEmail = null)
    {
      $this->inboundEmail = $inboundEmail;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssue()
    {
      return $this->issue;
    }

    /**
     * @param SearchColumnSelectField[] $issue
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setIssue(array $issue = null)
    {
      $this->issue = $issue;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIssueNumber()
    {
      return $this->issueNumber;
    }

    /**
     * @param SearchColumnStringField[] $issueNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setIssueNumber(array $issueNumber = null)
    {
      $this->issueNumber = $issueNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastMessageDate()
    {
      return $this->lastMessageDate;
    }

    /**
     * @param SearchColumnDateField[] $lastMessageDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setLastMessageDate(array $lastMessageDate = null)
    {
      $this->lastMessageDate = $lastMessageDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastReopenedDate()
    {
      return $this->lastReopenedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastReopenedDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setLastReopenedDate(array $lastReopenedDate = null)
    {
      $this->lastReopenedDate = $lastReopenedDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocked()
    {
      return $this->locked;
    }

    /**
     * @param SearchColumnBooleanField[] $locked
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setLocked(array $locked = null)
    {
      $this->locked = $locked;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param SearchColumnSelectField[] $module
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setModule(array $module = null)
    {
      $this->module = $module;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param SearchColumnSelectField[] $origin
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setOrigin(array $origin = null)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchColumnSelectField[] $priority
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setPriority(array $priority = null)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param SearchColumnSelectField[] $product
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setProduct(array $product = null)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProfile()
    {
      return $this->profile;
    }

    /**
     * @param SearchColumnSelectField[] $profile
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setProfile(array $profile = null)
    {
      $this->profile = $profile;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param SearchColumnStringField[] $serialNumber
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setSerialNumber(array $serialNumber = null)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $stage
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setStage(array $stage = null)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $status
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\SupportCaseSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
