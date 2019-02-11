<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchRowBasic;

/**
 * PayrollItemSearchRow
 */
class PayrollItemSearchRow extends SearchRow {

    /**
     * @access public
     * @var PayrollItemSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "PayrollItemSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param PayrollItemSearchRowBasic $basic
     * @return PayrollItemSearchRow
     */
    public function setBasic(PayrollItemSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PayrollItemSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}