<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchRowBasic;

/**
 * BillingScheduleSearchRow
 */
class BillingScheduleSearchRow extends SearchRow {

    /**
     * @access public
     * @var BillingScheduleSearchRowBasic
     */
    protected $basic;

    static $paramtypesmap = array(
    	"basic" => "BillingScheduleSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param BillingScheduleSearchRowBasic $basic
     * @return BillingScheduleSearchRow
     */
    public function setBasic(BillingScheduleSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return BillingScheduleSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}