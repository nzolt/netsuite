<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Financial;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\BudgetSearchRowBasic;

/**
 * BudgetSearchRow
 */
class BudgetSearchRow extends SearchRow {

    /**
     * @access public
     * @var BudgetSearchRowBasic
     */
    protected $basic;

    static $paramtypesmap = array(
    	"basic" => "BudgetSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param BudgetSearchRowBasic $basic
     * @return BudgetSearchRow
     */
    public function setBasic(BudgetSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return BudgetSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}