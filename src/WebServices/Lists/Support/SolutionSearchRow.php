<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * SolutionSearchRow
 */
class SolutionSearchRow extends SearchRow {

    /**
     * @access public
     * @var SolutionSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var SolutionSearchRowBasic
     */
    protected $relatedSolutionJoin;

    /**
     * @access public
     * @var TopicSearchRowBasic
     */
    protected $topicJoin;

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
    	"basic" => "SolutionSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"relatedSolutionJoin" => "SolutionSearchRowBasic",
    	"topicJoin" => "TopicSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param SolutionSearchRowBasic $basic
     * @return SolutionSearchRow
     */
    public function setBasic(SolutionSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SolutionSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return SolutionSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set relatedSolutionJoin
     *
     * @param SolutionSearchRowBasic $relatedSolutionJoin
     * @return SolutionSearchRow
     */
    public function setRelatedSolutionJoin(SolutionSearchRowBasic $relatedSolutionJoin) {
        $this->relatedSolutionJoin = $relatedSolutionJoin;
        return $this;
    }

    /**
     * Get relatedSolutionJoin
     *
     * @return SolutionSearchRowBasic
     */
    public function getRelatedSolutionJoin() {
        return $this->relatedSolutionJoin;
    }


    /**
     * Set topicJoin
     *
     * @param TopicSearchRowBasic $topicJoin
     * @return SolutionSearchRow
     */
    public function setTopicJoin(TopicSearchRowBasic $topicJoin) {
        $this->topicJoin = $topicJoin;
        return $this;
    }

    /**
     * Get topicJoin
     *
     * @return TopicSearchRowBasic
     */
    public function getTopicJoin() {
        return $this->topicJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return SolutionSearchRow
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
     * @return SolutionSearchRow
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