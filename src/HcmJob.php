<?php

namespace Nzolt\NetSuite;

class HcmJob extends Record
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $employmentCategory
     */
    protected $employmentCategory = null;

    /**
     * @var string $jobId
     */
    protected $jobId = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmploymentCategory()
    {
      return $this->employmentCategory;
    }

    /**
     * @param RecordRef $employmentCategory
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setEmploymentCategory($employmentCategory)
    {
      $this->employmentCategory = $employmentCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobId()
    {
      return $this->jobId;
    }

    /**
     * @param string $jobId
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setJobId($jobId)
    {
      $this->jobId = $jobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\HcmJob
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
