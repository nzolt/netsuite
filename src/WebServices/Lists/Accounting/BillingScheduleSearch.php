<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchBasic;

/**
 * BillingScheduleSearch
 */
class BillingScheduleSearch extends SearchRecord {

    /**
     * @access public
     * @var BillingScheduleSearchBasic
     */
    protected $basic;

    static $paramtypesmap = array(
    	"basic" => "BillingScheduleSearchBasic",
    );

    /**
     * Set basic
     *
     * @param BillingScheduleSearchBasic $basic
     * @return BillingScheduleSearch
     */
    public function setBasic(BillingScheduleSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return BillingScheduleSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}