<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchBasic;

/**
 * PayrollItemSearch
 */
class PayrollItemSearch extends SearchRecord {

    /**
     * @access public
     * @var PayrollItemSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "PayrollItemSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param PayrollItemSearchBasic $basic
     * @return PayrollItemSearch
     */
    public function setBasic(PayrollItemSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PayrollItemSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}