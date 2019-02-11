<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\GlobalAccountMappingSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic;

/**
 * GlobalAccountMappingSearch
 */
class GlobalAccountMappingSearch extends SearchRecord {

    /**
     * @access public
     * @var GlobalAccountMappingSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ClassificationSearchBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var DepartmentSearchBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $destinationAccountJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $sourceAccountJoin;

    /**
     * @access public
     * @var SubsidiarySearchBasic
     */
    protected $subsidiaryJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "GlobalAccountMappingSearchBasic",
    	"classJoin" => "ClassificationSearchBasic",
    	"departmentJoin" => "DepartmentSearchBasic",
    	"destinationAccountJoin" => "AccountSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"sourceAccountJoin" => "AccountSearchBasic",
    	"subsidiaryJoin" => "SubsidiarySearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param GlobalAccountMappingSearchBasic $basic
     * @return GlobalAccountMappingSearch
     */
    public function setBasic(GlobalAccountMappingSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return GlobalAccountMappingSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchBasic $classJoin
     * @return GlobalAccountMappingSearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchBasic $departmentJoin
     * @return GlobalAccountMappingSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set destinationAccountJoin
     *
     * @param AccountSearchBasic $destinationAccountJoin
     * @return GlobalAccountMappingSearch
     */
    public function setDestinationAccountJoin(AccountSearchBasic $destinationAccountJoin) {
        $this->destinationAccountJoin = $destinationAccountJoin;
        return $this;
    }

    /**
     * Get destinationAccountJoin
     *
     * @return AccountSearchBasic
     */
    public function getDestinationAccountJoin() {
        return $this->destinationAccountJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return GlobalAccountMappingSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set sourceAccountJoin
     *
     * @param AccountSearchBasic $sourceAccountJoin
     * @return GlobalAccountMappingSearch
     */
    public function setSourceAccountJoin(AccountSearchBasic $sourceAccountJoin) {
        $this->sourceAccountJoin = $sourceAccountJoin;
        return $this;
    }

    /**
     * Get sourceAccountJoin
     *
     * @return AccountSearchBasic
     */
    public function getSourceAccountJoin() {
        return $this->sourceAccountJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return GlobalAccountMappingSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }

}