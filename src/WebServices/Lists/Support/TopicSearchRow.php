<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * TopicSearchRow
 */
class TopicSearchRow extends SearchRow {

    /**
     * @access public
     * @var TopicSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SolutionSearchRowBasic
     */
    protected $solutionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "TopicSearchRowBasic",
    	"solutionJoin" => "SolutionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param TopicSearchRowBasic $basic
     * @return TopicSearchRow
     */
    public function setBasic(TopicSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TopicSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set solutionJoin
     *
     * @param SolutionSearchRowBasic $solutionJoin
     * @return TopicSearchRow
     */
    public function setSolutionJoin(SolutionSearchRowBasic $solutionJoin) {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * Get solutionJoin
     *
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin() {
        return $this->solutionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return TopicSearchRow
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

}