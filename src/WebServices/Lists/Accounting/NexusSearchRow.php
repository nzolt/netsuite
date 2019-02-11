<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\NexusSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * NexusSearchRow
 */
class NexusSearchRow extends SearchRow {

    /**
     * @access public
     * @var NexusSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "NexusSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param NexusSearchRowBasic $basic
     * @return NexusSearchRow
     */
    public function setBasic(NexusSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return NexusSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return NexusSearchRow
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