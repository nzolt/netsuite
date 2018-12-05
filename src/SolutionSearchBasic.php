<?php

namespace Nzolt\NetSuite;

class SolutionSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $abstract
     */
    protected $abstract = null;

    /**
     * @var SearchMultiSelectField $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchLongField $caseCount
     */
    protected $caseCount = null;

    /**
     * @var SearchStringField $code
     */
    protected $code = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchStringField $find
     */
    protected $find = null;

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
     * @var SearchBooleanField $isOnline
     */
    protected $isOnline = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchMultiSelectField $topic
     */
    protected $topic = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getAbstract()
    {
      return $this->abstract;
    }

    /**
     * @param SearchStringField $abstract
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setAbstract($abstract)
    {
      $this->abstract = $abstract;
      return $this;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getCaseCount()
    {
      return $this->caseCount;
    }

    /**
     * @param SearchLongField $caseCount
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setCaseCount($caseCount)
    {
      $this->caseCount = $caseCount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param SearchStringField $code
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFind()
    {
      return $this->find;
    }

    /**
     * @param SearchStringField $find
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setFind($find)
    {
      $this->find = $find;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param SearchBooleanField $isOnline
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTopic()
    {
      return $this->topic;
    }

    /**
     * @param SearchMultiSelectField $topic
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setTopic($topic)
    {
      $this->topic = $topic;
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
     * @return \Nzolt\NetSuite\SolutionSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
