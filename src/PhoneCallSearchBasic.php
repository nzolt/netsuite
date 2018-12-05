<?php

namespace Nzolt\NetSuite;

class PhoneCallSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchMultiSelectField $company
     */
    protected $company = null;

    /**
     * @var SearchDateField $completedDate
     */
    protected $completedDate = null;

    /**
     * @var SearchMultiSelectField $contact
     */
    protected $contact = null;

    /**
     * @var SearchMultiSelectField $createdBy
     */
    protected $createdBy = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchBooleanField $owner
     */
    protected $owner = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchEnumMultiSelectField $priority
     */
    protected $priority = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchMultiSelectField $company
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCompletedDate()
    {
      return $this->completedDate;
    }

    /**
     * @param SearchDateField $completedDate
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setCompletedDate($completedDate)
    {
      $this->completedDate = $completedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchMultiSelectField $contact
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param SearchMultiSelectField $createdBy
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param SearchBooleanField $isPrivate
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchBooleanField $owner
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchStringField $phone
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchEnumMultiSelectField $priority
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
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
     * @return \Nzolt\NetSuite\PhoneCallSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
