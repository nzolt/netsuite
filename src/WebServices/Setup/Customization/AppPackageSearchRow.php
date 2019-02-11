<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;

/**
 * AppPackageSearchRow
 */
class AppPackageSearchRow extends SearchRow {

    /**
     * @access public
     * @var AppPackageSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AppDefinitionSearchRowBasic
     */
    protected $appDefinitionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $creatorJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $packageFileJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "AppPackageSearchRowBasic",
    	"appDefinitionJoin" => "AppDefinitionSearchRowBasic",
    	"creatorJoin" => "EmployeeSearchRowBasic",
    	"packageFileJoin" => "FileSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param AppPackageSearchRowBasic $basic
     * @return AppPackageSearchRow
     */
    public function setBasic(AppPackageSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AppPackageSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set appDefinitionJoin
     *
     * @param AppDefinitionSearchRowBasic $appDefinitionJoin
     * @return AppPackageSearchRow
     */
    public function setAppDefinitionJoin(AppDefinitionSearchRowBasic $appDefinitionJoin) {
        $this->appDefinitionJoin = $appDefinitionJoin;
        return $this;
    }

    /**
     * Get appDefinitionJoin
     *
     * @return AppDefinitionSearchRowBasic
     */
    public function getAppDefinitionJoin() {
        return $this->appDefinitionJoin;
    }


    /**
     * Set creatorJoin
     *
     * @param EmployeeSearchRowBasic $creatorJoin
     * @return AppPackageSearchRow
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
     * Set packageFileJoin
     *
     * @param FileSearchRowBasic $packageFileJoin
     * @return AppPackageSearchRow
     */
    public function setPackageFileJoin(FileSearchRowBasic $packageFileJoin) {
        $this->packageFileJoin = $packageFileJoin;
        return $this;
    }

    /**
     * Get packageFileJoin
     *
     * @return FileSearchRowBasic
     */
    public function getPackageFileJoin() {
        return $this->packageFileJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return AppPackageSearchRow
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