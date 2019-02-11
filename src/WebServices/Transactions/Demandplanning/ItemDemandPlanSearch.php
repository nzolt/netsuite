<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemDemandPlanSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * ItemDemandPlanSearch
 */
class ItemDemandPlanSearch extends SearchRecord {

    /**
     * @access public
     * @var ItemDemandPlanSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $lastAlternateSourceItemJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ItemDemandPlanSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"lastAlternateSourceItemJoin" => "ItemSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ItemDemandPlanSearchBasic $basic
     * @return ItemDemandPlanSearch
     */
    public function setBasic(ItemDemandPlanSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemDemandPlanSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return ItemDemandPlanSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set lastAlternateSourceItemJoin
     *
     * @param ItemSearchBasic $lastAlternateSourceItemJoin
     * @return ItemDemandPlanSearch
     */
    public function setLastAlternateSourceItemJoin(ItemSearchBasic $lastAlternateSourceItemJoin) {
        $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
        return $this;
    }

    /**
     * Get lastAlternateSourceItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getLastAlternateSourceItemJoin() {
        return $this->lastAlternateSourceItemJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return ItemDemandPlanSearch
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
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ItemDemandPlanSearch
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