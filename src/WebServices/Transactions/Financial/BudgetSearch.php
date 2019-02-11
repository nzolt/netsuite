<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Financial;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\BudgetSearchBasic;

/**
 * BudgetSearch
 */
class BudgetSearch extends SearchRecord {

    /**
     * @access public
     * @var BudgetSearchBasic
     */
    protected $basic;

    static $paramtypesmap = array(
    	"basic" => "BudgetSearchBasic",
    );

    /**
     * Set basic
     *
     * @param BudgetSearchBasic $basic
     * @return BudgetSearch
     */
    public function setBasic(BudgetSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return BudgetSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}