<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemDemandPlanSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * ItemDemandPlanSearchRow
 */
class ItemDemandPlanSearchRow extends SearchRow {

    /**
     * @access public
     * @var ItemDemandPlanSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $lastAlternateSourceItemJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ItemDemandPlanSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"lastAlternateSourceItemJoin" => "ItemSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ItemDemandPlanSearchRowBasic $basic
     * @return ItemDemandPlanSearchRow
     */
    public function setBasic(ItemDemandPlanSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemDemandPlanSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return ItemDemandPlanSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set lastAlternateSourceItemJoin
     *
     * @param ItemSearchRowBasic $lastAlternateSourceItemJoin
     * @return ItemDemandPlanSearchRow
     */
    public function setLastAlternateSourceItemJoin(ItemSearchRowBasic $lastAlternateSourceItemJoin) {
        $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
        return $this;
    }

    /**
     * Get lastAlternateSourceItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getLastAlternateSourceItemJoin() {
        return $this->lastAlternateSourceItemJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return ItemDemandPlanSearchRow
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
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemDemandPlanSearchRow
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