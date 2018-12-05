<?php

namespace Nzolt\NetSuite;

class SolutionSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchColumnLongField[] $caseCount
     */
    protected $caseCount = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnBooleanField[] $displayOnline
     */
    protected $displayOnline = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnStringField[] $previewref
     */
    protected $previewref = null;

    /**
     * @var SearchColumnStringField[] $solutionCode
     */
    protected $solutionCode = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setAssigned(array $assigned = null)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getCaseCount()
    {
      return $this->caseCount;
    }

    /**
     * @param SearchColumnLongField[] $caseCount
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setCaseCount(array $caseCount = null)
    {
      $this->caseCount = $caseCount;
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDisplayOnline()
    {
      return $this->displayOnline;
    }

    /**
     * @param SearchColumnBooleanField[] $displayOnline
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setDisplayOnline(array $displayOnline = null)
    {
      $this->displayOnline = $displayOnline;
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreviewref()
    {
      return $this->previewref;
    }

    /**
     * @param SearchColumnStringField[] $previewref
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setPreviewref(array $previewref = null)
    {
      $this->previewref = $previewref;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSolutionCode()
    {
      return $this->solutionCode;
    }

    /**
     * @param SearchColumnStringField[] $solutionCode
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setSolutionCode(array $solutionCode = null)
    {
      $this->solutionCode = $solutionCode;
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
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
     * @return \Nzolt\NetSuite\SolutionSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
