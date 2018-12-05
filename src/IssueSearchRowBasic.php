<?php

namespace Nzolt\NetSuite;

class IssueSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnLongField[] $ageInMonths
     */
    protected $ageInMonths = null;

    /**
     * @var SearchColumnSelectField[] $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchColumnSelectField[] $buildBroken
     */
    protected $buildBroken = null;

    /**
     * @var SearchColumnSelectField[] $buildFixed
     */
    protected $buildFixed = null;

    /**
     * @var SearchColumnSelectField[] $buildTarget
     */
    protected $buildTarget = null;

    /**
     * @var SearchColumnLongField[] $caseCount
     */
    protected $caseCount = null;

    /**
     * @var SearchColumnStringField[] $caseNumber
     */
    protected $caseNumber = null;

    /**
     * @var SearchColumnDateField[] $closedDate
     */
    protected $closedDate = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnDateField[] $dateReleased
     */
    protected $dateReleased = null;

    /**
     * @var SearchColumnSelectField[] $duplicateOf
     */
    protected $duplicateOf = null;

    /**
     * @var SearchColumnSelectField[] $employeeOrTeam
     */
    protected $employeeOrTeam = null;

    /**
     * @var SearchColumnEnumSelectField[] $eventStatus
     */
    protected $eventStatus = null;

    /**
     * @var SearchColumnStringField[] $externalAbstract
     */
    protected $externalAbstract = null;

    /**
     * @var SearchColumnStringField[] $externalDetails
     */
    protected $externalDetails = null;

    /**
     * @var SearchColumnStringField[] $externalFixedIn
     */
    protected $externalFixedIn = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $externalStatus
     */
    protected $externalStatus = null;

    /**
     * @var SearchColumnDateField[] $fixed
     */
    protected $fixed = null;

    /**
     * @var SearchColumnSelectField[] $fixedBy
     */
    protected $fixedBy = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isOwner
     */
    protected $isOwner = null;

    /**
     * @var SearchColumnBooleanField[] $isReviewed
     */
    protected $isReviewed = null;

    /**
     * @var SearchColumnBooleanField[] $isShowStopper
     */
    protected $isShowStopper = null;

    /**
     * @var SearchColumnStringField[] $issueAbstract
     */
    protected $issueAbstract = null;

    /**
     * @var SearchColumnSelectField[] $issueStatus
     */
    protected $issueStatus = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $module
     */
    protected $module = null;

    /**
     * @var SearchColumnStringField[] $number
     */
    protected $number = null;

    /**
     * @var SearchColumnStringField[] $originalFixedIn
     */
    protected $originalFixedIn = null;

    /**
     * @var SearchColumnSelectField[] $priority
     */
    protected $priority = null;

    /**
     * @var SearchColumnSelectField[] $product
     */
    protected $product = null;

    /**
     * @var SearchColumnSelectField[] $productTeam
     */
    protected $productTeam = null;

    /**
     * @var SearchColumnSelectField[] $relatedIssue
     */
    protected $relatedIssue = null;

    /**
     * @var SearchColumnEnumSelectField[] $relationship
     */
    protected $relationship = null;

    /**
     * @var SearchColumnStringField[] $relationshipComment
     */
    protected $relationshipComment = null;

    /**
     * @var SearchColumnSelectField[] $reportedBy
     */
    protected $reportedBy = null;

    /**
     * @var SearchColumnSelectField[] $reproduce
     */
    protected $reproduce = null;

    /**
     * @var SearchColumnDateField[] $resolved
     */
    protected $resolved = null;

    /**
     * @var SearchColumnSelectField[] $resolvedBy
     */
    protected $resolvedBy = null;

    /**
     * @var SearchColumnSelectField[] $reviewer
     */
    protected $reviewer = null;

    /**
     * @var SearchColumnSelectField[] $severity
     */
    protected $severity = null;

    /**
     * @var SearchColumnEnumSelectField[] $source
     */
    protected $source = null;

    /**
     * @var SearchColumnSelectField[] $tags
     */
    protected $tags = null;

    /**
     * @var SearchColumnStringField[] $type
     */
    protected $type = null;

    /**
     * @var SearchColumnSelectField[] $userType
     */
    protected $userType = null;

    /**
     * @var SearchColumnSelectField[] $versionBroken
     */
    protected $versionBroken = null;

    /**
     * @var SearchColumnSelectField[] $versionFixed
     */
    protected $versionFixed = null;

    /**
     * @var SearchColumnSelectField[] $versionTarget
     */
    protected $versionTarget = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getAgeInMonths()
    {
      return $this->ageInMonths;
    }

    /**
     * @param SearchColumnLongField[] $ageInMonths
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setAgeInMonths(array $ageInMonths = null)
    {
      $this->ageInMonths = $ageInMonths;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setAssigned(array $assigned = null)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildBroken()
    {
      return $this->buildBroken;
    }

    /**
     * @param SearchColumnSelectField[] $buildBroken
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setBuildBroken(array $buildBroken = null)
    {
      $this->buildBroken = $buildBroken;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildFixed()
    {
      return $this->buildFixed;
    }

    /**
     * @param SearchColumnSelectField[] $buildFixed
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setBuildFixed(array $buildFixed = null)
    {
      $this->buildFixed = $buildFixed;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildTarget()
    {
      return $this->buildTarget;
    }

    /**
     * @param SearchColumnSelectField[] $buildTarget
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setBuildTarget(array $buildTarget = null)
    {
      $this->buildTarget = $buildTarget;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setCaseCount(array $caseCount = null)
    {
      $this->caseCount = $caseCount;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setCaseNumber(array $caseNumber = null)
    {
      $this->caseNumber = $caseNumber;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getClosedDate()
    {
      return $this->closedDate;
    }

    /**
     * @param SearchColumnDateField[] $closedDate
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setClosedDate(array $closedDate = null)
    {
      $this->closedDate = $closedDate;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateReleased()
    {
      return $this->dateReleased;
    }

    /**
     * @param SearchColumnDateField[] $dateReleased
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setDateReleased(array $dateReleased = null)
    {
      $this->dateReleased = $dateReleased;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDuplicateOf()
    {
      return $this->duplicateOf;
    }

    /**
     * @param SearchColumnSelectField[] $duplicateOf
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setDuplicateOf(array $duplicateOf = null)
    {
      $this->duplicateOf = $duplicateOf;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeOrTeam()
    {
      return $this->employeeOrTeam;
    }

    /**
     * @param SearchColumnSelectField[] $employeeOrTeam
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setEmployeeOrTeam(array $employeeOrTeam = null)
    {
      $this->employeeOrTeam = $employeeOrTeam;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEventStatus()
    {
      return $this->eventStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $eventStatus
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setEventStatus(array $eventStatus = null)
    {
      $this->eventStatus = $eventStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalAbstract()
    {
      return $this->externalAbstract;
    }

    /**
     * @param SearchColumnStringField[] $externalAbstract
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setExternalAbstract(array $externalAbstract = null)
    {
      $this->externalAbstract = $externalAbstract;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalDetails()
    {
      return $this->externalDetails;
    }

    /**
     * @param SearchColumnStringField[] $externalDetails
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setExternalDetails(array $externalDetails = null)
    {
      $this->externalDetails = $externalDetails;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalFixedIn()
    {
      return $this->externalFixedIn;
    }

    /**
     * @param SearchColumnStringField[] $externalFixedIn
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setExternalFixedIn(array $externalFixedIn = null)
    {
      $this->externalFixedIn = $externalFixedIn;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalStatus()
    {
      return $this->externalStatus;
    }

    /**
     * @param SearchColumnSelectField[] $externalStatus
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setExternalStatus(array $externalStatus = null)
    {
      $this->externalStatus = $externalStatus;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFixed()
    {
      return $this->fixed;
    }

    /**
     * @param SearchColumnDateField[] $fixed
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setFixed(array $fixed = null)
    {
      $this->fixed = $fixed;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFixedBy()
    {
      return $this->fixedBy;
    }

    /**
     * @param SearchColumnSelectField[] $fixedBy
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setFixedBy(array $fixedBy = null)
    {
      $this->fixedBy = $fixedBy;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOwner()
    {
      return $this->isOwner;
    }

    /**
     * @param SearchColumnBooleanField[] $isOwner
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setIsOwner(array $isOwner = null)
    {
      $this->isOwner = $isOwner;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsReviewed()
    {
      return $this->isReviewed;
    }

    /**
     * @param SearchColumnBooleanField[] $isReviewed
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setIsReviewed(array $isReviewed = null)
    {
      $this->isReviewed = $isReviewed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsShowStopper()
    {
      return $this->isShowStopper;
    }

    /**
     * @param SearchColumnBooleanField[] $isShowStopper
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setIsShowStopper(array $isShowStopper = null)
    {
      $this->isShowStopper = $isShowStopper;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIssueAbstract()
    {
      return $this->issueAbstract;
    }

    /**
     * @param SearchColumnStringField[] $issueAbstract
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setIssueAbstract(array $issueAbstract = null)
    {
      $this->issueAbstract = $issueAbstract;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssueStatus()
    {
      return $this->issueStatus;
    }

    /**
     * @param SearchColumnSelectField[] $issueStatus
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setIssueStatus(array $issueStatus = null)
    {
      $this->issueStatus = $issueStatus;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param SearchColumnStringField[] $module
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setModule(array $module = null)
    {
      $this->module = $module;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchColumnStringField[] $number
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setNumber(array $number = null)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOriginalFixedIn()
    {
      return $this->originalFixedIn;
    }

    /**
     * @param SearchColumnStringField[] $originalFixedIn
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setOriginalFixedIn(array $originalFixedIn = null)
    {
      $this->originalFixedIn = $originalFixedIn;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setProduct(array $product = null)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProductTeam()
    {
      return $this->productTeam;
    }

    /**
     * @param SearchColumnSelectField[] $productTeam
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setProductTeam(array $productTeam = null)
    {
      $this->productTeam = $productTeam;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRelatedIssue()
    {
      return $this->relatedIssue;
    }

    /**
     * @param SearchColumnSelectField[] $relatedIssue
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setRelatedIssue(array $relatedIssue = null)
    {
      $this->relatedIssue = $relatedIssue;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param SearchColumnEnumSelectField[] $relationship
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setRelationship(array $relationship = null)
    {
      $this->relationship = $relationship;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRelationshipComment()
    {
      return $this->relationshipComment;
    }

    /**
     * @param SearchColumnStringField[] $relationshipComment
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setRelationshipComment(array $relationshipComment = null)
    {
      $this->relationshipComment = $relationshipComment;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReportedBy()
    {
      return $this->reportedBy;
    }

    /**
     * @param SearchColumnSelectField[] $reportedBy
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setReportedBy(array $reportedBy = null)
    {
      $this->reportedBy = $reportedBy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReproduce()
    {
      return $this->reproduce;
    }

    /**
     * @param SearchColumnSelectField[] $reproduce
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setReproduce(array $reproduce = null)
    {
      $this->reproduce = $reproduce;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getResolved()
    {
      return $this->resolved;
    }

    /**
     * @param SearchColumnDateField[] $resolved
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setResolved(array $resolved = null)
    {
      $this->resolved = $resolved;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResolvedBy()
    {
      return $this->resolvedBy;
    }

    /**
     * @param SearchColumnSelectField[] $resolvedBy
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setResolvedBy(array $resolvedBy = null)
    {
      $this->resolvedBy = $resolvedBy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReviewer()
    {
      return $this->reviewer;
    }

    /**
     * @param SearchColumnSelectField[] $reviewer
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setReviewer(array $reviewer = null)
    {
      $this->reviewer = $reviewer;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSeverity()
    {
      return $this->severity;
    }

    /**
     * @param SearchColumnSelectField[] $severity
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setSeverity(array $severity = null)
    {
      $this->severity = $severity;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param SearchColumnEnumSelectField[] $source
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setSource(array $source = null)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param SearchColumnSelectField[] $tags
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setTags(array $tags = null)
    {
      $this->tags = $tags;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchColumnStringField[] $type
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUserType()
    {
      return $this->userType;
    }

    /**
     * @param SearchColumnSelectField[] $userType
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setUserType(array $userType = null)
    {
      $this->userType = $userType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionBroken()
    {
      return $this->versionBroken;
    }

    /**
     * @param SearchColumnSelectField[] $versionBroken
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setVersionBroken(array $versionBroken = null)
    {
      $this->versionBroken = $versionBroken;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionFixed()
    {
      return $this->versionFixed;
    }

    /**
     * @param SearchColumnSelectField[] $versionFixed
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setVersionFixed(array $versionFixed = null)
    {
      $this->versionFixed = $versionFixed;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionTarget()
    {
      return $this->versionTarget;
    }

    /**
     * @param SearchColumnSelectField[] $versionTarget
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setVersionTarget(array $versionTarget = null)
    {
      $this->versionTarget = $versionTarget;
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
     * @return \Nzolt\NetSuite\IssueSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
