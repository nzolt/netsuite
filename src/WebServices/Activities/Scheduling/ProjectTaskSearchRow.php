<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * ProjectTaskSearchRow
 */
class ProjectTaskSearchRow extends SearchRow {

    /**
     * @access public
     * @var ProjectTaskSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var ProjectTaskSearchRowBasic
     */
    protected $predecessorJoin;

    /**
     * @access public
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    protected $projectTaskAssignmentJoin;

    /**
     * @access public
     * @var ProjectTaskSearchRowBasic
     */
    protected $successorJoin;

    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ProjectTaskSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"predecessorJoin" => "ProjectTaskSearchRowBasic",
    	"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
    	"successorJoin" => "ProjectTaskSearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ProjectTaskSearchRowBasic $basic
     * @return ProjectTaskSearchRow
     */
    public function setBasic(ProjectTaskSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ProjectTaskSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return ProjectTaskSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set predecessorJoin
     *
     * @param ProjectTaskSearchRowBasic $predecessorJoin
     * @return ProjectTaskSearchRow
     */
    public function setPredecessorJoin(ProjectTaskSearchRowBasic $predecessorJoin) {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * Get predecessorJoin
     *
     * @return ProjectTaskSearchRowBasic
     */
    public function getPredecessorJoin() {
        return $this->predecessorJoin;
    }


    /**
     * Set projectTaskAssignmentJoin
     *
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return ProjectTaskSearchRow
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin) {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * Get projectTaskAssignmentJoin
     *
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function getProjectTaskAssignmentJoin() {
        return $this->projectTaskAssignmentJoin;
    }


    /**
     * Set successorJoin
     *
     * @param ProjectTaskSearchRowBasic $successorJoin
     * @return ProjectTaskSearchRow
     */
    public function setSuccessorJoin(ProjectTaskSearchRowBasic $successorJoin) {
        $this->successorJoin = $successorJoin;
        return $this;
    }

    /**
     * Get successorJoin
     *
     * @return ProjectTaskSearchRowBasic
     */
    public function getSuccessorJoin() {
        return $this->successorJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return ProjectTaskSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ProjectTaskSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return ProjectTaskSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }

}