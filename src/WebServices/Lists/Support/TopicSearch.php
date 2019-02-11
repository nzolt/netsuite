<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * TopicSearch
 */
class TopicSearch extends SearchRecord {

    /**
     * @access public
     * @var TopicSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SolutionSearchBasic
     */
    protected $solutionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "TopicSearchBasic",
    	"solutionJoin" => "SolutionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param TopicSearchBasic $basic
     * @return TopicSearch
     */
    public function setBasic(TopicSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TopicSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set solutionJoin
     *
     * @param SolutionSearchBasic $solutionJoin
     * @return TopicSearch
     */
    public function setSolutionJoin(SolutionSearchBasic $solutionJoin) {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * Get solutionJoin
     *
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin() {
        return $this->solutionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return TopicSearch
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

}