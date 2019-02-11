<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * FileSearch
 */
class FileSearch extends SearchRecord {

    /**
     * @access public
     * @var FileSearchBasic
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
    	"basic" => "FileSearchBasic",
    	"shopperJoin" => "CustomerSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param FileSearchBasic $basic
     * @return FileSearch
     */
    public function setBasic(FileSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return FileSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchBasic $shopperJoin
     * @return FileSearch
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
     * @return FileSearch
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