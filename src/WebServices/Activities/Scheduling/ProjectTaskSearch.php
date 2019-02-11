<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * ProjectTaskSearch
 */
class ProjectTaskSearch extends SearchRecord {

    /**
     * @access public
     * @var ProjectTaskSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var ProjectTaskSearchBasic
     */
    protected $predecessorJoin;

    /**
     * @access public
     * @var ProjectTaskAssignmentSearchBasic
     */
    protected $projectTaskAssignmentJoin;

    /**
     * @access public
     * @var ProjectTaskSearchBasic
     */
    protected $successorJoin;

    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ProjectTaskSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"predecessorJoin" => "ProjectTaskSearchBasic",
    	"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
    	"successorJoin" => "ProjectTaskSearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ProjectTaskSearchBasic $basic
     * @return ProjectTaskSearch
     */
    public function setBasic(ProjectTaskSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ProjectTaskSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return ProjectTaskSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set predecessorJoin
     *
     * @param ProjectTaskSearchBasic $predecessorJoin
     * @return ProjectTaskSearch
     */
    public function setPredecessorJoin(ProjectTaskSearchBasic $predecessorJoin) {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * Get predecessorJoin
     *
     * @return ProjectTaskSearchBasic
     */
    public function getPredecessorJoin() {
        return $this->predecessorJoin;
    }


    /**
     * Set projectTaskAssignmentJoin
     *
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return ProjectTaskSearch
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin) {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * Get projectTaskAssignmentJoin
     *
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function getProjectTaskAssignmentJoin() {
        return $this->projectTaskAssignmentJoin;
    }


    /**
     * Set successorJoin
     *
     * @param ProjectTaskSearchBasic $successorJoin
     * @return ProjectTaskSearch
     */
    public function setSuccessorJoin(ProjectTaskSearchBasic $successorJoin) {
        $this->successorJoin = $successorJoin;
        return $this;
    }

    /**
     * Get successorJoin
     *
     * @return ProjectTaskSearchBasic
     */
    public function getSuccessorJoin() {
        return $this->successorJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return ProjectTaskSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ProjectTaskSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return ProjectTaskSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }

}