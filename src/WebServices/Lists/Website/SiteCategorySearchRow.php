<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Website;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * SiteCategorySearchRow
 */
class SiteCategorySearchRow extends SearchRow {

    /**
     * @access public
     * @var SiteCategorySearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $shopperJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "SiteCategorySearchRowBasic",
    	"shopperJoin" => "CustomerSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param SiteCategorySearchRowBasic $basic
     * @return SiteCategorySearchRow
     */
    public function setBasic(SiteCategorySearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SiteCategorySearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchRowBasic $shopperJoin
     * @return SiteCategorySearchRow
     */
    public function setShopperJoin(CustomerSearchRowBasic $shopperJoin) {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * Get shopperJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin() {
        return $this->shopperJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return SiteCategorySearchRow
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