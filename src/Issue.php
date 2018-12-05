<?php

namespace Nzolt\NetSuite;

class Issue extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $issueNumber
     */
    protected $issueNumber = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var RecordRef $issueType
     */
    protected $issueType = null;

    /**
     * @var RecordRef $product
     */
    protected $product = null;

    /**
     * @var RecordRef $module
     */
    protected $module = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $productTeam
     */
    protected $productTeam = null;

    /**
     * @var RecordRef $source
     */
    protected $source = null;

    /**
     * @var RecordRef $reportedBy
     */
    protected $reportedBy = null;

    /**
     * @var RecordRef $reproduce
     */
    protected $reproduce = null;

    /**
     * @var RecordRef $versionBroken
     */
    protected $versionBroken = null;

    /**
     * @var RecordRef $buildBroken
     */
    protected $buildBroken = null;

    /**
     * @var RecordRef $versionTarget
     */
    protected $versionTarget = null;

    /**
     * @var RecordRef $buildTarget
     */
    protected $buildTarget = null;

    /**
     * @var RecordRef $versionFixed
     */
    protected $versionFixed = null;

    /**
     * @var RecordRef $buildFixed
     */
    protected $buildFixed = null;

    /**
     * @var RecordRef $severity
     */
    protected $severity = null;

    /**
     * @var RecordRef $priority
     */
    protected $priority = null;

    /**
     * @var boolean $isShowStopper
     */
    protected $isShowStopper = null;

    /**
     * @var RecordRef $assigned
     */
    protected $assigned = null;

    /**
     * @var RecordRef $reviewer
     */
    protected $reviewer = null;

    /**
     * @var boolean $isReviewed
     */
    protected $isReviewed = null;

    /**
     * @var RecordRef $issueStatus
     */
    protected $issueStatus = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRefList $issueTagsList
     */
    protected $issueTagsList = null;

    /**
     * @var string $issueAbstract
     */
    protected $issueAbstract = null;

    /**
     * @var string $newDetails
     */
    protected $newDetails = null;

    /**
     * @var boolean $isOwner
     */
    protected $isOwner = null;

    /**
     * @var IssueTrackCode $trackCode
     */
    protected $trackCode = null;

    /**
     * @var boolean $emailAssignee
     */
    protected $emailAssignee = null;

    /**
     * @var EmailEmployeesList $emailEmployeesList
     */
    protected $emailEmployeesList = null;

    /**
     * @var RecordRefList $emailCellsList
     */
    protected $emailCellsList = null;

    /**
     * @var string $externalAbstract
     */
    protected $externalAbstract = null;

    /**
     * @var string $externalDetails
     */
    protected $externalDetails = null;

    /**
     * @var IssueVersionList $brokenInVersionList
     */
    protected $brokenInVersionList = null;

    /**
     * @var IssueVersionList $targetVersionList
     */
    protected $targetVersionList = null;

    /**
     * @var IssueVersionList $fixedInVersionList
     */
    protected $fixedInVersionList = null;

    /**
     * @var IssueRelatedIssuesList $relatedIssuesList
     */
    protected $relatedIssuesList = null;

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
     * @return \Nzolt\NetSuite\Issue
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber()
    {
      return $this->issueNumber;
    }

    /**
     * @param string $issueNumber
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIssueNumber($issueNumber)
    {
      $this->issueNumber = $issueNumber;
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
     * @return \Nzolt\NetSuite\Issue
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
     * @return RecordRef
     */
    public function getIssueType()
    {
      return $this->issueType;
    }

    /**
     * @param RecordRef $issueType
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIssueType($issueType)
    {
      $this->issueType = $issueType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param RecordRef $product
     * @return \Nzolt\NetSuite\Issue
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param RecordRef $module
     * @return \Nzolt\NetSuite\Issue
     */
    public function setModule($module)
    {
      $this->module = $module;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\Issue
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProductTeam()
    {
      return $this->productTeam;
    }

    /**
     * @param RecordRef $productTeam
     * @return \Nzolt\NetSuite\Issue
     */
    public function setProductTeam($productTeam)
    {
      $this->productTeam = $productTeam;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param RecordRef $source
     * @return \Nzolt\NetSuite\Issue
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReportedBy()
    {
      return $this->reportedBy;
    }

    /**
     * @param RecordRef $reportedBy
     * @return \Nzolt\NetSuite\Issue
     */
    public function setReportedBy($reportedBy)
    {
      $this->reportedBy = $reportedBy;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReproduce()
    {
      return $this->reproduce;
    }

    /**
     * @param RecordRef $reproduce
     * @return \Nzolt\NetSuite\Issue
     */
    public function setReproduce($reproduce)
    {
      $this->reproduce = $reproduce;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionBroken()
    {
      return $this->versionBroken;
    }

    /**
     * @param RecordRef $versionBroken
     * @return \Nzolt\NetSuite\Issue
     */
    public function setVersionBroken($versionBroken)
    {
      $this->versionBroken = $versionBroken;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildBroken()
    {
      return $this->buildBroken;
    }

    /**
     * @param RecordRef $buildBroken
     * @return \Nzolt\NetSuite\Issue
     */
    public function setBuildBroken($buildBroken)
    {
      $this->buildBroken = $buildBroken;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionTarget()
    {
      return $this->versionTarget;
    }

    /**
     * @param RecordRef $versionTarget
     * @return \Nzolt\NetSuite\Issue
     */
    public function setVersionTarget($versionTarget)
    {
      $this->versionTarget = $versionTarget;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildTarget()
    {
      return $this->buildTarget;
    }

    /**
     * @param RecordRef $buildTarget
     * @return \Nzolt\NetSuite\Issue
     */
    public function setBuildTarget($buildTarget)
    {
      $this->buildTarget = $buildTarget;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionFixed()
    {
      return $this->versionFixed;
    }

    /**
     * @param RecordRef $versionFixed
     * @return \Nzolt\NetSuite\Issue
     */
    public function setVersionFixed($versionFixed)
    {
      $this->versionFixed = $versionFixed;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildFixed()
    {
      return $this->buildFixed;
    }

    /**
     * @param RecordRef $buildFixed
     * @return \Nzolt\NetSuite\Issue
     */
    public function setBuildFixed($buildFixed)
    {
      $this->buildFixed = $buildFixed;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSeverity()
    {
      return $this->severity;
    }

    /**
     * @param RecordRef $severity
     * @return \Nzolt\NetSuite\Issue
     */
    public function setSeverity($severity)
    {
      $this->severity = $severity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param RecordRef $priority
     * @return \Nzolt\NetSuite\Issue
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShowStopper()
    {
      return $this->isShowStopper;
    }

    /**
     * @param boolean $isShowStopper
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIsShowStopper($isShowStopper)
    {
      $this->isShowStopper = $isShowStopper;
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
     * @return \Nzolt\NetSuite\Issue
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReviewer()
    {
      return $this->reviewer;
    }

    /**
     * @param RecordRef $reviewer
     * @return \Nzolt\NetSuite\Issue
     */
    public function setReviewer($reviewer)
    {
      $this->reviewer = $reviewer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReviewed()
    {
      return $this->isReviewed;
    }

    /**
     * @param boolean $isReviewed
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIsReviewed($isReviewed)
    {
      $this->isReviewed = $isReviewed;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueStatus()
    {
      return $this->issueStatus;
    }

    /**
     * @param RecordRef $issueStatus
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIssueStatus($issueStatus)
    {
      $this->issueStatus = $issueStatus;
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
     * @return \Nzolt\NetSuite\Issue
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
     * @return RecordRefList
     */
    public function getIssueTagsList()
    {
      return $this->issueTagsList;
    }

    /**
     * @param RecordRefList $issueTagsList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIssueTagsList($issueTagsList)
    {
      $this->issueTagsList = $issueTagsList;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueAbstract()
    {
      return $this->issueAbstract;
    }

    /**
     * @param string $issueAbstract
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIssueAbstract($issueAbstract)
    {
      $this->issueAbstract = $issueAbstract;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewDetails()
    {
      return $this->newDetails;
    }

    /**
     * @param string $newDetails
     * @return \Nzolt\NetSuite\Issue
     */
    public function setNewDetails($newDetails)
    {
      $this->newDetails = $newDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOwner()
    {
      return $this->isOwner;
    }

    /**
     * @param boolean $isOwner
     * @return \Nzolt\NetSuite\Issue
     */
    public function setIsOwner($isOwner)
    {
      $this->isOwner = $isOwner;
      return $this;
    }

    /**
     * @return IssueTrackCode
     */
    public function getTrackCode()
    {
      return $this->trackCode;
    }

    /**
     * @param IssueTrackCode $trackCode
     * @return \Nzolt\NetSuite\Issue
     */
    public function setTrackCode($trackCode)
    {
      $this->trackCode = $trackCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailAssignee()
    {
      return $this->emailAssignee;
    }

    /**
     * @param boolean $emailAssignee
     * @return \Nzolt\NetSuite\Issue
     */
    public function setEmailAssignee($emailAssignee)
    {
      $this->emailAssignee = $emailAssignee;
      return $this;
    }

    /**
     * @return EmailEmployeesList
     */
    public function getEmailEmployeesList()
    {
      return $this->emailEmployeesList;
    }

    /**
     * @param EmailEmployeesList $emailEmployeesList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setEmailEmployeesList($emailEmployeesList)
    {
      $this->emailEmployeesList = $emailEmployeesList;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getEmailCellsList()
    {
      return $this->emailCellsList;
    }

    /**
     * @param RecordRefList $emailCellsList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setEmailCellsList($emailCellsList)
    {
      $this->emailCellsList = $emailCellsList;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalAbstract()
    {
      return $this->externalAbstract;
    }

    /**
     * @param string $externalAbstract
     * @return \Nzolt\NetSuite\Issue
     */
    public function setExternalAbstract($externalAbstract)
    {
      $this->externalAbstract = $externalAbstract;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDetails()
    {
      return $this->externalDetails;
    }

    /**
     * @param string $externalDetails
     * @return \Nzolt\NetSuite\Issue
     */
    public function setExternalDetails($externalDetails)
    {
      $this->externalDetails = $externalDetails;
      return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getBrokenInVersionList()
    {
      return $this->brokenInVersionList;
    }

    /**
     * @param IssueVersionList $brokenInVersionList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setBrokenInVersionList($brokenInVersionList)
    {
      $this->brokenInVersionList = $brokenInVersionList;
      return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getTargetVersionList()
    {
      return $this->targetVersionList;
    }

    /**
     * @param IssueVersionList $targetVersionList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setTargetVersionList($targetVersionList)
    {
      $this->targetVersionList = $targetVersionList;
      return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getFixedInVersionList()
    {
      return $this->fixedInVersionList;
    }

    /**
     * @param IssueVersionList $fixedInVersionList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setFixedInVersionList($fixedInVersionList)
    {
      $this->fixedInVersionList = $fixedInVersionList;
      return $this;
    }

    /**
     * @return IssueRelatedIssuesList
     */
    public function getRelatedIssuesList()
    {
      return $this->relatedIssuesList;
    }

    /**
     * @param IssueRelatedIssuesList $relatedIssuesList
     * @return \Nzolt\NetSuite\Issue
     */
    public function setRelatedIssuesList($relatedIssuesList)
    {
      $this->relatedIssuesList = $relatedIssuesList;
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
     * @return \Nzolt\NetSuite\Issue
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
     * @return \Nzolt\NetSuite\Issue
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
     * @return \Nzolt\NetSuite\Issue
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
