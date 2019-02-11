<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSupplyPlanSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * ItemSupplyPlanSearch
 */
class ItemSupplyPlanSearch extends SearchRecord {

    /**
     * @access public
     * @var ItemSupplyPlanSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

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
    	"basic" => "ItemSupplyPlanSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ItemSupplyPlanSearchBasic $basic
     * @return ItemSupplyPlanSearch
     */
    public function setBasic(ItemSupplyPlanSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemSupplyPlanSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return ItemSupplyPlanSearch
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
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return ItemSupplyPlanSearch
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
     * @return ItemSupplyPlanSearch
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