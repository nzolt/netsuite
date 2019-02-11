<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemAccountMappingSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic;

/**
 * ItemAccountMappingSearchRow
 */
class ItemAccountMappingSearchRow extends SearchRow {

    /**
     * @access public
     * @var ItemAccountMappingSearchRowBasic
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
    	"basic" => "ItemAccountMappingSearchRowBasic",
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
     * @param ItemAccountMappingSearchRowBasic $basic
     * @return ItemAccountMappingSearchRow
     */
    public function setBasic(ItemAccountMappingSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemAccountMappingSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchRowBasic $classJoin
     * @return ItemAccountMappingSearchRow
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
     * @return ItemAccountMappingSearchRow
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
     * @return ItemAccountMappingSearchRow
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
     * @return ItemAccountMappingSearchRow
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
     * @return ItemAccountMappingSearchRow
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
     * @return ItemAccountMappingSearchRow
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