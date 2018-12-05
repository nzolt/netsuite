<?php

namespace Nzolt\NetSuite;

class PhoneCallSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var SearchColumnSelectField[] $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchColumnSelectField[] $company
     */
    protected $company = null;

    /**
     * @var SearchColumnDateField[] $completedDate
     */
    protected $completedDate = null;

    /**
     * @var SearchColumnSelectField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $markdone
     */
    protected $markdone = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnEnumSelectField[] $priority
     */
    protected $priority = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnDateField[] $startTime
     */
    protected $startTime = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnSelectField[] $transaction
     */
    protected $transaction = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param SearchColumnStringField[] $accessLevel
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setAccessLevel(array $accessLevel = null)
    {
      $this->accessLevel = $accessLevel;
      return $this;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setAssigned(array $assigned = null)
    {
      $this->assigned = $assigned;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setCompany(array $company = null)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCompletedDate()
    {
      return $this->completedDate;
    }

    /**
     * @param SearchColumnDateField[] $completedDate
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setCompletedDate(array $completedDate = null)
    {
      $this->completedDate = $completedDate;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMarkdone()
    {
      return $this->markdone;
    }

    /**
     * @param SearchColumnStringField[] $markdone
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setMarkdone(array $markdone = null)
    {
      $this->markdone = $markdone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setPhone(array $phone = null)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchColumnEnumSelectField[] $priority
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setPriority(array $priority = null)
    {
      $this->priority = $priority;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param SearchColumnDateField[] $startTime
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setStartTime(array $startTime = null)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param SearchColumnSelectField[] $transaction
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setTransaction(array $transaction = null)
    {
      $this->transaction = $transaction;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
