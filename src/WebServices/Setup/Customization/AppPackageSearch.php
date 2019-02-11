<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;

/**
 * AppPackageSearch
 */
class AppPackageSearch extends SearchRecord {

    /**
     * @access public
     * @var AppPackageSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AppDefinitionSearchBasic
     */
    protected $appDefinitionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $creatorJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $packageFileJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "AppPackageSearchBasic",
    	"appDefinitionJoin" => "AppDefinitionSearchBasic",
    	"creatorJoin" => "EmployeeSearchBasic",
    	"packageFileJoin" => "FileSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param AppPackageSearchBasic $basic
     * @return AppPackageSearch
     */
    public function setBasic(AppPackageSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AppPackageSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set appDefinitionJoin
     *
     * @param AppDefinitionSearchBasic $appDefinitionJoin
     * @return AppPackageSearch
     */
    public function setAppDefinitionJoin(AppDefinitionSearchBasic $appDefinitionJoin) {
        $this->appDefinitionJoin = $appDefinitionJoin;
        return $this;
    }

    /**
     * Get appDefinitionJoin
     *
     * @return AppDefinitionSearchBasic
     */
    public function getAppDefinitionJoin() {
        return $this->appDefinitionJoin;
    }


    /**
     * Set creatorJoin
     *
     * @param EmployeeSearchBasic $creatorJoin
     * @return AppPackageSearch
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
     * Set packageFileJoin
     *
     * @param FileSearchBasic $packageFileJoin
     * @return AppPackageSearch
     */
    public function setPackageFileJoin(FileSearchBasic $packageFileJoin) {
        $this->packageFileJoin = $packageFileJoin;
        return $this;
    }

    /**
     * Get packageFileJoin
     *
     * @return FileSearchBasic
     */
    public function getPackageFileJoin() {
        return $this->packageFileJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return AppPackageSearch
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