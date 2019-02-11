<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\CouponCodeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * CouponCodeSearch
 */
class CouponCodeSearch extends SearchRecord {

    /**
     * @access public
     * @var CouponCodeSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "CouponCodeSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param CouponCodeSearchBasic $basic
     * @return CouponCodeSearch
     */
    public function setBasic(CouponCodeSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CouponCodeSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return CouponCodeSearch
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