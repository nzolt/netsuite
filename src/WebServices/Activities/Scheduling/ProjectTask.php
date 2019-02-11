<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskConstraintType;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ProjectTask
 */
class ProjectTask extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $eventId;

    /**
     * @access public
     * @var float
     */
    protected $percentTimeComplete;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var RecordRef
     */
    public $order;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var RecordRef
     */
    public $priority;

    /**
     * @access public
     * @var float
     */
    protected $estimatedWork;

    /**
     * @access public
     * @var float
     */
    protected $estimatedWorkBaseline;

    /**
     * @access public
     * @var ProjectTaskConstraintType
     */
    protected $constraintType;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDateBaseline;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $finishByDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDateBaseline;

    /**
     * @access public
     * @var float
     */
    protected $actualWork;

    /**
     * @access public
     * @var float
     */
    protected $remainingWork;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var boolean
     */
    protected $isMilestone;

    /**
     * @access public
     * @var string
     */
    protected $isOnCriticalPath;

    /**
     * @access public
     * @var float
     */
    protected $slackMinutes;

    /**
     * @access public
     * @var dateTime
     */
    protected $lateEnd;

    /**
     * @access public
     * @var dateTime
     */
    protected $lateStart;

    /**
     * @access public
     * @var ProjectTaskStatus
     */
    protected $status;

    /**
     * @access public
     * @var boolean
     */
    protected $nonBillableTask;

    /**
     * @access public
     * @var ProjectTaskAssigneeList
     */
    protected $assigneeList;

    /**
     * @access public
     * @var ProjectTaskPredecessorList
     */
    protected $predecessorList;

    /**
     * @access public
     * @var ProjectTaskTimeItemList
     */
    protected $timeItemList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"customForm" => "RecordRef",
    	"eventId" => "RecordRef",
    	"percentTimeComplete" => "float",
    	"title" => "string",
    	"company" => "RecordRef",
    	"contact" => "RecordRef",
    	"order" => "RecordRef",
    	"owner" => "RecordRef",
    	"parent" => "RecordRef",
    	"priority" => "RecordRef",
    	"estimatedWork" => "float",
    	"estimatedWorkBaseline" => "float",
    	"constraintType" => "ProjectTaskConstraintType",
    	"startDate" => "dateTime",
    	"startDateBaseline" => "dateTime",
    	"endDate" => "dateTime",
    	"finishByDate" => "dateTime",
    	"endDateBaseline" => "dateTime",
    	"actualWork" => "float",
    	"remainingWork" => "float",
    	"message" => "string",
    	"isMilestone" => "boolean",
    	"isOnCriticalPath" => "string",
    	"slackMinutes" => "float",
    	"lateEnd" => "dateTime",
    	"lateStart" => "dateTime",
    	"status" => "ProjectTaskStatus",
    	"nonBillableTask" => "boolean",
    	"assigneeList" => "ProjectTaskAssigneeList",
    	"predecessorList" => "ProjectTaskPredecessorList",
    	"timeItemList" => "ProjectTaskTimeItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set percentTimeComplete
     *
     * @param float $percentTimeComplete
     * @return ProjectTask
     */
    public function setPercentTimeComplete($percentTimeComplete) {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * Get percentTimeComplete
     *
     * @return float
     */
    public function getPercentTimeComplete() {
        return $this->percentTimeComplete;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return ProjectTask
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set estimatedWork
     *
     * @param float $estimatedWork
     * @return ProjectTask
     */
    public function setEstimatedWork($estimatedWork) {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * Get estimatedWork
     *
     * @return float
     */
    public function getEstimatedWork() {
        return $this->estimatedWork;
    }


    /**
     * Set estimatedWorkBaseline
     *
     * @param float $estimatedWorkBaseline
     * @return ProjectTask
     */
    public function setEstimatedWorkBaseline($estimatedWorkBaseline) {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * Get estimatedWorkBaseline
     *
     * @return float
     */
    public function getEstimatedWorkBaseline() {
        return $this->estimatedWorkBaseline;
    }


    /**
     * Set constraintType
     *
     * @param ProjectTaskConstraintType $constraintType
     * @return ProjectTask
     */
    public function setConstraintType(ProjectTaskConstraintType $constraintType) {
        $this->constraintType = $constraintType;
        return $this;
    }

    /**
     * Get constraintType
     *
     * @return ProjectTaskConstraintType
     */
    public function getConstraintType() {
        return $this->constraintType;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ProjectTask
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set startDateBaseline
     *
     * @param \DateTime $startDateBaseline
     * @return ProjectTask
     */
    public function setStartDateBaseline(\DateTime $startDateBaseline) {
        $this->startDateBaseline = $startDateBaseline->format('c');
        return $this;
    }

    /**
     * Get startDateBaseline
     *
     * @return \DateTime
     */
    public function getStartDateBaseline() {
        return new \DateTime($this->startDateBaseline);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ProjectTask
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set finishByDate
     *
     * @param \DateTime $finishByDate
     * @return ProjectTask
     */
    public function setFinishByDate(\DateTime $finishByDate) {
        $this->finishByDate = $finishByDate->format('c');
        return $this;
    }

    /**
     * Get finishByDate
     *
     * @return \DateTime
     */
    public function getFinishByDate() {
        return new \DateTime($this->finishByDate);
    }


    /**
     * Set endDateBaseline
     *
     * @param \DateTime $endDateBaseline
     * @return ProjectTask
     */
    public function setEndDateBaseline(\DateTime $endDateBaseline) {
        $this->endDateBaseline = $endDateBaseline->format('c');
        return $this;
    }

    /**
     * Get endDateBaseline
     *
     * @return \DateTime
     */
    public function getEndDateBaseline() {
        return new \DateTime($this->endDateBaseline);
    }


    /**
     * Set actualWork
     *
     * @param float $actualWork
     * @return ProjectTask
     */
    public function setActualWork($actualWork) {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * Get actualWork
     *
     * @return float
     */
    public function getActualWork() {
        return $this->actualWork;
    }


    /**
     * Set remainingWork
     *
     * @param float $remainingWork
     * @return ProjectTask
     */
    public function setRemainingWork($remainingWork) {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * Get remainingWork
     *
     * @return float
     */
    public function getRemainingWork() {
        return $this->remainingWork;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return ProjectTask
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set isMilestone
     *
     * @param boolean $isMilestone
     * @return ProjectTask
     */
    public function setIsMilestone($isMilestone) {
        $this->isMilestone = $isMilestone;
        return $this;
    }

    /**
     * Get isMilestone
     *
     * @return boolean
     */
    public function getIsMilestone() {
        return $this->isMilestone;
    }


    /**
     * Set isOnCriticalPath
     *
     * @param string $isOnCriticalPath
     * @return ProjectTask
     */
    public function setIsOnCriticalPath($isOnCriticalPath) {
        $this->isOnCriticalPath = $isOnCriticalPath;
        return $this;
    }

    /**
     * Get isOnCriticalPath
     *
     * @return string
     */
    public function getIsOnCriticalPath() {
        return $this->isOnCriticalPath;
    }


    /**
     * Set slackMinutes
     *
     * @param float $slackMinutes
     * @return ProjectTask
     */
    public function setSlackMinutes($slackMinutes) {
        $this->slackMinutes = $slackMinutes;
        return $this;
    }

    /**
     * Get slackMinutes
     *
     * @return float
     */
    public function getSlackMinutes() {
        return $this->slackMinutes;
    }


    /**
     * Set lateEnd
     *
     * @param \DateTime $lateEnd
     * @return ProjectTask
     */
    public function setLateEnd(\DateTime $lateEnd) {
        $this->lateEnd = $lateEnd->format('c');
        return $this;
    }

    /**
     * Get lateEnd
     *
     * @return \DateTime
     */
    public function getLateEnd() {
        return new \DateTime($this->lateEnd);
    }


    /**
     * Set lateStart
     *
     * @param \DateTime $lateStart
     * @return ProjectTask
     */
    public function setLateStart(\DateTime $lateStart) {
        $this->lateStart = $lateStart->format('c');
        return $this;
    }

    /**
     * Get lateStart
     *
     * @return \DateTime
     */
    public function getLateStart() {
        return new \DateTime($this->lateStart);
    }


    /**
     * Set status
     *
     * @param ProjectTaskStatus $status
     * @return ProjectTask
     */
    public function setStatus(ProjectTaskStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return ProjectTaskStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set nonBillableTask
     *
     * @param boolean $nonBillableTask
     * @return ProjectTask
     */
    public function setNonBillableTask($nonBillableTask) {
        $this->nonBillableTask = $nonBillableTask;
        return $this;
    }

    /**
     * Get nonBillableTask
     *
     * @return boolean
     */
    public function getNonBillableTask() {
        return $this->nonBillableTask;
    }


    /**
     * Set assigneeList
     *
     * @param ProjectTaskAssigneeList $assigneeList
     * @return ProjectTask
     */
    public function setAssigneeList(ProjectTaskAssigneeList $assigneeList) {
        $this->assigneeList = $assigneeList;
        return $this;
    }

    /**
     * Get assigneeList
     *
     * @return ProjectTaskAssigneeList
     */
    public function getAssigneeList() {
        return $this->assigneeList;
    }


    /**
     * Set predecessorList
     *
     * @param ProjectTaskPredecessorList $predecessorList
     * @return ProjectTask
     */
    public function setPredecessorList(ProjectTaskPredecessorList $predecessorList) {
        $this->predecessorList = $predecessorList;
        return $this;
    }

    /**
     * Get predecessorList
     *
     * @return ProjectTaskPredecessorList
     */
    public function getPredecessorList() {
        return $this->predecessorList;
    }


    /**
     * Set timeItemList
     *
     * @param ProjectTaskTimeItemList $timeItemList
     * @return ProjectTask
     */
    public function setTimeItemList(ProjectTaskTimeItemList $timeItemList) {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * Get timeItemList
     *
     * @return ProjectTaskTimeItemList
     */
    public function getTimeItemList() {
        return $this->timeItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ProjectTask
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ProjectTask
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ProjectTask
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}