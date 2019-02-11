<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemAccountMappingSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic;

/**
 * ItemAccountMappingSearch
 */
class ItemAccountMappingSearch extends SearchRecord {

    /**
     * @access public
     * @var ItemAccountMappingSearchBasic
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
    	"basic" => "ItemAccountMappingSearchBasic",
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
     * @param ItemAccountMappingSearchBasic $basic
     * @return ItemAccountMappingSearch
     */
    public function setBasic(ItemAccountMappingSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemAccountMappingSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchBasic $classJoin
     * @return ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
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