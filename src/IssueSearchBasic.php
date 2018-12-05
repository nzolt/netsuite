<?php

namespace Nzolt\NetSuite;

class IssueSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchLongField $ageInMonths
     */
    protected $ageInMonths = null;

    /**
     * @var SearchMultiSelectField $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchMultiSelectField $buildBroken
     */
    protected $buildBroken = null;

    /**
     * @var SearchStringField $buildBrokenName
     */
    protected $buildBrokenName = null;

    /**
     * @var SearchMultiSelectField $buildFixed
     */
    protected $buildFixed = null;

    /**
     * @var SearchStringField $buildFixedName
     */
    protected $buildFixedName = null;

    /**
     * @var SearchMultiSelectField $buildTarget
     */
    protected $buildTarget = null;

    /**
     * @var SearchStringField $buildTargetName
     */
    protected $buildTargetName = null;

    /**
     * @var SearchLongField $caseCount
     */
    protected $caseCount = null;

    /**
     * @var SearchStringField $caseNumber
     */
    protected $caseNumber = null;

    /**
     * @var SearchDateField $closedDate
     */
    protected $closedDate = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchDateField $dateReleased
     */
    protected $dateReleased = null;

    /**
     * @var SearchStringField $details
     */
    protected $details = null;

    /**
     * @var SearchMultiSelectField $duplicateOf
     */
    protected $duplicateOf = null;

    /**
     * @var SearchBooleanField $eFix
     */
    protected $eFix = null;

    /**
     * @var SearchMultiSelectField $employeeOrTeam
     */
    protected $employeeOrTeam = null;

    /**
     * @var SearchEnumMultiSelectField $eventStatus
     */
    protected $eventStatus = null;

    /**
     * @var SearchStringField $externalAbstract
     */
    protected $externalAbstract = null;

    /**
     * @var SearchStringField $externalDetails
     */
    protected $externalDetails = null;

    /**
     * @var SearchMultiSelectField $externalFixedIn
     */
    protected $externalFixedIn = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $externalStatus
     */
    protected $externalStatus = null;

    /**
     * @var SearchDateField $fixed
     */
    protected $fixed = null;

    /**
     * @var SearchMultiSelectField $fixedBy
     */
    protected $fixedBy = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isOwner
     */
    protected $isOwner = null;

    /**
     * @var SearchBooleanField $isReviewed
     */
    protected $isReviewed = null;

    /**
     * @var SearchBooleanField $isShowStopper
     */
    protected $isShowStopper = null;

    /**
     * @var SearchStringField $issueAbstract
     */
    protected $issueAbstract = null;

    /**
     * @var SearchStringField $issueNumber
     */
    protected $issueNumber = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $module
     */
    protected $module = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchStringField $originalFixedIn
     */
    protected $originalFixedIn = null;

    /**
     * @var SearchMultiSelectField $priority
     */
    protected $priority = null;

    /**
     * @var SearchMultiSelectField $product
     */
    protected $product = null;

    /**
     * @var SearchMultiSelectField $productTeam
     */
    protected $productTeam = null;

    /**
     * @var SearchMultiSelectField $relatedIssue
     */
    protected $relatedIssue = null;

    /**
     * @var SearchEnumMultiSelectField $relationship
     */
    protected $relationship = null;

    /**
     * @var SearchStringField $relationshipComment
     */
    protected $relationshipComment = null;

    /**
     * @var SearchMultiSelectField $reportedBy
     */
    protected $reportedBy = null;

    /**
     * @var SearchMultiSelectField $reproduce
     */
    protected $reproduce = null;

    /**
     * @var SearchDateField $resolved
     */
    protected $resolved = null;

    /**
     * @var SearchMultiSelectField $resolvedBy
     */
    protected $resolvedBy = null;

    /**
     * @var SearchMultiSelectField $reviewer
     */
    protected $reviewer = null;

    /**
     * @var SearchMultiSelectField $severity
     */
    protected $severity = null;

    /**
     * @var SearchEnumMultiSelectField $source
     */
    protected $source = null;

    /**
     * @var SearchMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $tags
     */
    protected $tags = null;

    /**
     * @var SearchBooleanField $tracking
     */
    protected $tracking = null;

    /**
     * @var SearchMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchMultiSelectField $userType
     */
    protected $userType = null;

    /**
     * @var SearchMultiSelectField $versionBroken
     */
    protected $versionBroken = null;

    /**
     * @var SearchMultiSelectField $versionFixed
     */
    protected $versionFixed = null;

    /**
     * @var SearchMultiSelectField $versionTarget
     */
    protected $versionTarget = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchLongField
     */
    public function getAgeInMonths()
    {
      return $this->ageInMonths;
    }

    /**
     * @param SearchLongField $ageInMonths
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setAgeInMonths($ageInMonths)
    {
      $this->ageInMonths = $ageInMonths;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildBroken()
    {
      return $this->buildBroken;
    }

    /**
     * @param SearchMultiSelectField $buildBroken
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildBroken($buildBroken)
    {
      $this->buildBroken = $buildBroken;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildBrokenName()
    {
      return $this->buildBrokenName;
    }

    /**
     * @param SearchStringField $buildBrokenName
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildBrokenName($buildBrokenName)
    {
      $this->buildBrokenName = $buildBrokenName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildFixed()
    {
      return $this->buildFixed;
    }

    /**
     * @param SearchMultiSelectField $buildFixed
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildFixed($buildFixed)
    {
      $this->buildFixed = $buildFixed;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildFixedName()
    {
      return $this->buildFixedName;
    }

    /**
     * @param SearchStringField $buildFixedName
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildFixedName($buildFixedName)
    {
      $this->buildFixedName = $buildFixedName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildTarget()
    {
      return $this->buildTarget;
    }

    /**
     * @param SearchMultiSelectField $buildTarget
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildTarget($buildTarget)
    {
      $this->buildTarget = $buildTarget;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildTargetName()
    {
      return $this->buildTargetName;
    }

    /**
     * @param SearchStringField $buildTargetName
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setBuildTargetName($buildTargetName)
    {
      $this->buildTargetName = $buildTargetName;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setCaseCount($caseCount)
    {
      $this->caseCount = $caseCount;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setCaseNumber($caseNumber)
    {
      $this->caseNumber = $caseNumber;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setClosedDate($closedDate)
    {
      $this->closedDate = $closedDate;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateReleased()
    {
      return $this->dateReleased;
    }

    /**
     * @param SearchDateField $dateReleased
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setDateReleased($dateReleased)
    {
      $this->dateReleased = $dateReleased;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param SearchStringField $details
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDuplicateOf()
    {
      return $this->duplicateOf;
    }

    /**
     * @param SearchMultiSelectField $duplicateOf
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setDuplicateOf($duplicateOf)
    {
      $this->duplicateOf = $duplicateOf;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEFix()
    {
      return $this->eFix;
    }

    /**
     * @param SearchBooleanField $eFix
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setEFix($eFix)
    {
      $this->eFix = $eFix;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeOrTeam()
    {
      return $this->employeeOrTeam;
    }

    /**
     * @param SearchMultiSelectField $employeeOrTeam
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setEmployeeOrTeam($employeeOrTeam)
    {
      $this->employeeOrTeam = $employeeOrTeam;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEventStatus()
    {
      return $this->eventStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $eventStatus
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setEventStatus($eventStatus)
    {
      $this->eventStatus = $eventStatus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalAbstract()
    {
      return $this->externalAbstract;
    }

    /**
     * @param SearchStringField $externalAbstract
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setExternalAbstract($externalAbstract)
    {
      $this->externalAbstract = $externalAbstract;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalDetails()
    {
      return $this->externalDetails;
    }

    /**
     * @param SearchStringField $externalDetails
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setExternalDetails($externalDetails)
    {
      $this->externalDetails = $externalDetails;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalFixedIn()
    {
      return $this->externalFixedIn;
    }

    /**
     * @param SearchMultiSelectField $externalFixedIn
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setExternalFixedIn($externalFixedIn)
    {
      $this->externalFixedIn = $externalFixedIn;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalStatus()
    {
      return $this->externalStatus;
    }

    /**
     * @param SearchMultiSelectField $externalStatus
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setExternalStatus($externalStatus)
    {
      $this->externalStatus = $externalStatus;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFixed()
    {
      return $this->fixed;
    }

    /**
     * @param SearchDateField $fixed
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setFixed($fixed)
    {
      $this->fixed = $fixed;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFixedBy()
    {
      return $this->fixedBy;
    }

    /**
     * @param SearchMultiSelectField $fixedBy
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setFixedBy($fixedBy)
    {
      $this->fixedBy = $fixedBy;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOwner()
    {
      return $this->isOwner;
    }

    /**
     * @param SearchBooleanField $isOwner
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setIsOwner($isOwner)
    {
      $this->isOwner = $isOwner;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReviewed()
    {
      return $this->isReviewed;
    }

    /**
     * @param SearchBooleanField $isReviewed
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setIsReviewed($isReviewed)
    {
      $this->isReviewed = $isReviewed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsShowStopper()
    {
      return $this->isShowStopper;
    }

    /**
     * @param SearchBooleanField $isShowStopper
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setIsShowStopper($isShowStopper)
    {
      $this->isShowStopper = $isShowStopper;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIssueAbstract()
    {
      return $this->issueAbstract;
    }

    /**
     * @param SearchStringField $issueAbstract
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setIssueAbstract($issueAbstract)
    {
      $this->issueAbstract = $issueAbstract;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIssueNumber()
    {
      return $this->issueNumber;
    }

    /**
     * @param SearchStringField $issueNumber
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setIssueNumber($issueNumber)
    {
      $this->issueNumber = $issueNumber;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getOriginalFixedIn()
    {
      return $this->originalFixedIn;
    }

    /**
     * @param SearchStringField $originalFixedIn
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setOriginalFixedIn($originalFixedIn)
    {
      $this->originalFixedIn = $originalFixedIn;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProductTeam()
    {
      return $this->productTeam;
    }

    /**
     * @param SearchMultiSelectField $productTeam
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setProductTeam($productTeam)
    {
      $this->productTeam = $productTeam;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRelatedIssue()
    {
      return $this->relatedIssue;
    }

    /**
     * @param SearchMultiSelectField $relatedIssue
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setRelatedIssue($relatedIssue)
    {
      $this->relatedIssue = $relatedIssue;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param SearchEnumMultiSelectField $relationship
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRelationshipComment()
    {
      return $this->relationshipComment;
    }

    /**
     * @param SearchStringField $relationshipComment
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setRelationshipComment($relationshipComment)
    {
      $this->relationshipComment = $relationshipComment;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReportedBy()
    {
      return $this->reportedBy;
    }

    /**
     * @param SearchMultiSelectField $reportedBy
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setReportedBy($reportedBy)
    {
      $this->reportedBy = $reportedBy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReproduce()
    {
      return $this->reproduce;
    }

    /**
     * @param SearchMultiSelectField $reproduce
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setReproduce($reproduce)
    {
      $this->reproduce = $reproduce;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getResolved()
    {
      return $this->resolved;
    }

    /**
     * @param SearchDateField $resolved
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setResolved($resolved)
    {
      $this->resolved = $resolved;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResolvedBy()
    {
      return $this->resolvedBy;
    }

    /**
     * @param SearchMultiSelectField $resolvedBy
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setResolvedBy($resolvedBy)
    {
      $this->resolvedBy = $resolvedBy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReviewer()
    {
      return $this->reviewer;
    }

    /**
     * @param SearchMultiSelectField $reviewer
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setReviewer($reviewer)
    {
      $this->reviewer = $reviewer;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSeverity()
    {
      return $this->severity;
    }

    /**
     * @param SearchMultiSelectField $severity
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setSeverity($severity)
    {
      $this->severity = $severity;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param SearchEnumMultiSelectField $source
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param SearchMultiSelectField $tags
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTracking()
    {
      return $this->tracking;
    }

    /**
     * @param SearchBooleanField $tracking
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setTracking($tracking)
    {
      $this->tracking = $tracking;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchMultiSelectField $type
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUserType()
    {
      return $this->userType;
    }

    /**
     * @param SearchMultiSelectField $userType
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setUserType($userType)
    {
      $this->userType = $userType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionBroken()
    {
      return $this->versionBroken;
    }

    /**
     * @param SearchMultiSelectField $versionBroken
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setVersionBroken($versionBroken)
    {
      $this->versionBroken = $versionBroken;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionFixed()
    {
      return $this->versionFixed;
    }

    /**
     * @param SearchMultiSelectField $versionFixed
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setVersionFixed($versionFixed)
    {
      $this->versionFixed = $versionFixed;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionTarget()
    {
      return $this->versionTarget;
    }

    /**
     * @param SearchMultiSelectField $versionTarget
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setVersionTarget($versionTarget)
    {
      $this->versionTarget = $versionTarget;
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
     * @return \Nzolt\NetSuite\IssueSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
