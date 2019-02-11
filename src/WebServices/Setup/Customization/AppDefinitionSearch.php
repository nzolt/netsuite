<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * AppDefinitionSearch
 */
class AppDefinitionSearch extends SearchRecord {

    /**
     * @access public
     * @var AppDefinitionSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AppPackageSearchBasic
     */
    protected $appPackageJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $creatorJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "AppDefinitionSearchBasic",
    	"appPackageJoin" => "AppPackageSearchBasic",
    	"creatorJoin" => "EmployeeSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param AppDefinitionSearchBasic $basic
     * @return AppDefinitionSearch
     */
    public function setBasic(AppDefinitionSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AppDefinitionSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set appPackageJoin
     *
     * @param AppPackageSearchBasic $appPackageJoin
     * @return AppDefinitionSearch
     */
    public function setAppPackageJoin(AppPackageSearchBasic $appPackageJoin) {
        $this->appPackageJoin = $appPackageJoin;
        return $this;
    }

    /**
     * Get appPackageJoin
     *
     * @return AppPackageSearchBasic
     */
    public function getAppPackageJoin() {
        return $this->appPackageJoin;
    }


    /**
     * Set creatorJoin
     *
     * @param EmployeeSearchBasic $creatorJoin
     * @return AppDefinitionSearch
     */
    public function setCreatorJoin(EmployeeSearchBasic $creatorJoin) {
        $this->creatorJoin = $creatorJoin;
        return $this;
    }

    /**
     * Get creatorJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getCreatorJoin() {
        return $this->creatorJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return AppDefinitionSearch
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