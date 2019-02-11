<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\GlobalAccountMappingSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic;

/**
 * GlobalAccountMappingSearchRow
 */
class GlobalAccountMappingSearchRow extends SearchRow {

    /**
     * @access public
     * @var GlobalAccountMappingSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ClassificationSearchRowBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $destinationAccountJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $sourceAccountJoin;

    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    protected $subsidiaryJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "GlobalAccountMappingSearchRowBasic",
    	"classJoin" => "ClassificationSearchRowBasic",
    	"departmentJoin" => "DepartmentSearchRowBasic",
    	"destinationAccountJoin" => "AccountSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"sourceAccountJoin" => "AccountSearchRowBasic",
    	"subsidiaryJoin" => "SubsidiarySearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param GlobalAccountMappingSearchRowBasic $basic
     * @return GlobalAccountMappingSearchRow
     */
    public function setBasic(GlobalAccountMappingSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return GlobalAccountMappingSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchRowBasic $classJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set destinationAccountJoin
     *
     * @param AccountSearchRowBasic $destinationAccountJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setDestinationAccountJoin(AccountSearchRowBasic $destinationAccountJoin) {
        $this->destinationAccountJoin = $destinationAccountJoin;
        return $this;
    }

    /**
     * Get destinationAccountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getDestinationAccountJoin() {
        return $this->destinationAccountJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set sourceAccountJoin
     *
     * @param AccountSearchRowBasic $sourceAccountJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setSourceAccountJoin(AccountSearchRowBasic $sourceAccountJoin) {
        $this->sourceAccountJoin = $sourceAccountJoin;
        return $this;
    }

    /**
     * Get sourceAccountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getSourceAccountJoin() {
        return $this->sourceAccountJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }

}