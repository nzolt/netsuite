<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * AppDefinitionSearchRow
 */
class AppDefinitionSearchRow extends SearchRow {

    /**
     * @access public
     * @var AppDefinitionSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AppPackageSearchRowBasic
     */
    protected $appPackageJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $creatorJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "AppDefinitionSearchRowBasic",
    	"appPackageJoin" => "AppPackageSearchRowBasic",
    	"creatorJoin" => "EmployeeSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param AppDefinitionSearchRowBasic $basic
     * @return AppDefinitionSearchRow
     */
    public function setBasic(AppDefinitionSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AppDefinitionSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set appPackageJoin
     *
     * @param AppPackageSearchRowBasic $appPackageJoin
     * @return AppDefinitionSearchRow
     */
    public function setAppPackageJoin(AppPackageSearchRowBasic $appPackageJoin) {
        $this->appPackageJoin = $appPackageJoin;
        return $this;
    }

    /**
     * Get appPackageJoin
     *
     * @return AppPackageSearchRowBasic
     */
    public function getAppPackageJoin() {
        return $this->appPackageJoin;
    }


    /**
     * Set creatorJoin
     *
     * @param EmployeeSearchRowBasic $creatorJoin
     * @return AppDefinitionSearchRow
     */
    public function setCreatorJoin(EmployeeSearchRowBasic $creatorJoin) {
        $this->creatorJoin = $creatorJoin;
        return $this;
    }

    /**
     * Get creatorJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getCreatorJoin() {
        return $this->creatorJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return AppDefinitionSearchRow
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