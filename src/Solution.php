<?php

namespace Nzolt\NetSuite;

class Solution extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $solutionCode
     */
    protected $solutionCode = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var SolutionStatus $status
     */
    protected $status = null;

    /**
     * @var boolean $displayOnline
     */
    protected $displayOnline = null;

    /**
     * @var RecordRef $assigned
     */
    protected $assigned = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $longDescription
     */
    protected $longDescription = null;

    /**
     * @var SolutionTopicsList $topicsList
     */
    protected $topicsList = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SolutionsList $solutionsList
     */
    protected $solutionsList = null;

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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Solution
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getSolutionCode()
    {
      return $this->solutionCode;
    }

    /**
     * @param string $solutionCode
     * @return \Nzolt\NetSuite\Solution
     */
    public function setSolutionCode($solutionCode)
    {
      $this->solutionCode = $solutionCode;
      return $this;
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
     * @return \Nzolt\NetSuite\Solution
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\Solution
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SolutionStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SolutionStatus $status
     * @return \Nzolt\NetSuite\Solution
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayOnline()
    {
      return $this->displayOnline;
    }

    /**
     * @param boolean $displayOnline
     * @return \Nzolt\NetSuite\Solution
     */
    public function setDisplayOnline($displayOnline)
    {
      $this->displayOnline = $displayOnline;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param RecordRef $assigned
     * @return \Nzolt\NetSuite\Solution
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
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
     * @return \Nzolt\NetSuite\Solution
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return \Nzolt\NetSuite\Solution
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return SolutionTopicsList
     */
    public function getTopicsList()
    {
      return $this->topicsList;
    }

    /**
     * @param SolutionTopicsList $topicsList
     * @return \Nzolt\NetSuite\Solution
     */
    public function setTopicsList($topicsList)
    {
      $this->topicsList = $topicsList;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\Solution
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Solution
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SolutionsList
     */
    public function getSolutionsList()
    {
      return $this->solutionsList;
    }

    /**
     * @param SolutionsList $solutionsList
     * @return \Nzolt\NetSuite\Solution
     */
    public function setSolutionsList($solutionsList)
    {
      $this->solutionsList = $solutionsList;
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
     * @return \Nzolt\NetSuite\Solution
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
     * @return \Nzolt\NetSuite\Solution
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
     * @return \Nzolt\NetSuite\Solution
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
