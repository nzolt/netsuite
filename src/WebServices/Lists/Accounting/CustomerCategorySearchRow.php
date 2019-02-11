<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerCategorySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * CustomerCategorySearchRow
 */
class CustomerCategorySearchRow extends SearchRow {

    /**
     * @access public
     * @var CustomerCategorySearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "CustomerCategorySearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param CustomerCategorySearchRowBasic $basic
     * @return CustomerCategorySearchRow
     */
    public function setBasic(CustomerCategorySearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CustomerCategorySearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return CustomerCategorySearchRow
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