<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerStatusSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * CustomerStatusSearch
 */
class CustomerStatusSearch extends SearchRecord {

    /**
     * @access public
     * @var CustomerStatusSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "CustomerStatusSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param CustomerStatusSearchBasic $basic
     * @return CustomerStatusSearch
     */
    public function setBasic(CustomerStatusSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CustomerStatusSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return CustomerStatusSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }

}