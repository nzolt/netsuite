<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * SolutionSearch
 */
class SolutionSearch extends SearchRecord {

    /**
     * @access public
     * @var SolutionSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var SolutionSearchBasic
     */
    protected $relatedSolutionJoin;

    /**
     * @access public
     * @var TopicSearchBasic
     */
    protected $topicJoin;

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
    	"basic" => "SolutionSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"relatedSolutionJoin" => "SolutionSearchBasic",
    	"topicJoin" => "TopicSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param SolutionSearchBasic $basic
     * @return SolutionSearch
     */
    public function setBasic(SolutionSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SolutionSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return SolutionSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set relatedSolutionJoin
     *
     * @param SolutionSearchBasic $relatedSolutionJoin
     * @return SolutionSearch
     */
    public function setRelatedSolutionJoin(SolutionSearchBasic $relatedSolutionJoin) {
        $this->relatedSolutionJoin = $relatedSolutionJoin;
        return $this;
    }

    /**
     * Get relatedSolutionJoin
     *
     * @return SolutionSearchBasic
     */
    public function getRelatedSolutionJoin() {
        return $this->relatedSolutionJoin;
    }


    /**
     * Set topicJoin
     *
     * @param TopicSearchBasic $topicJoin
     * @return SolutionSearch
     */
    public function setTopicJoin(TopicSearchBasic $topicJoin) {
        $this->topicJoin = $topicJoin;
        return $this;
    }

    /**
     * Get topicJoin
     *
     * @return TopicSearchBasic
     */
    public function getTopicJoin() {
        return $this->topicJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return SolutionSearch
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
     * @return SolutionSearch
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