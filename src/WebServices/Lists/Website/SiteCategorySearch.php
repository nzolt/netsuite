<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Website;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * SiteCategorySearch
 */
class SiteCategorySearch extends SearchRecord {

    /**
     * @access public
     * @var SiteCategorySearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $shopperJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "SiteCategorySearchBasic",
    	"shopperJoin" => "CustomerSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param SiteCategorySearchBasic $basic
     * @return SiteCategorySearch
     */
    public function setBasic(SiteCategorySearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SiteCategorySearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchBasic $shopperJoin
     * @return SiteCategorySearch
     */
    public function setShopperJoin(CustomerSearchBasic $shopperJoin) {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * Get shopperJoin
     *
     * @return CustomerSearchBasic
     */
    public function getShopperJoin() {
        return $this->shopperJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return SiteCategorySearch
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