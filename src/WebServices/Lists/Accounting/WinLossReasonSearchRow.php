<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\WinLossReasonSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * WinLossReasonSearchRow
 */
class WinLossReasonSearchRow extends SearchRow {

    /**
     * @access public
     * @var WinLossReasonSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "WinLossReasonSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param WinLossReasonSearchRowBasic $basic
     * @return WinLossReasonSearchRow
     */
    public function setBasic(WinLossReasonSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return WinLossReasonSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return WinLossReasonSearchRow
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