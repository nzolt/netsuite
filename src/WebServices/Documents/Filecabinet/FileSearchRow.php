<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * FileSearchRow
 */
class FileSearchRow extends SearchRow {

    /**
     * @access public
     * @var FileSearchRowBasic
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
    	"basic" => "FileSearchRowBasic",
    	"shopperJoin" => "CustomerSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param FileSearchRowBasic $basic
     * @return FileSearchRow
     */
    public function setBasic(FileSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return FileSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set shopperJoin
     *
     * @param CustomerSearchRowBasic $shopperJoin
     * @return FileSearchRow
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
     * @return FileSearchRow
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