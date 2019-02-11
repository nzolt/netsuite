<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingRoutingSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingCostTemplateSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * ManufacturingRoutingSearch
 */
class ManufacturingRoutingSearch extends SearchRecord {

    /**
     * @access public
     * @var ManufacturingRoutingSearchBasic
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
     * @var ManufacturingCostTemplateSearchBasic
     */
    protected $manufacturingCostTemplateJoin;

    /**
     * @access public
     * @var EntityGroupSearchBasic
     */
    protected $manufacturingWorkCenterJoin;

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
    	"basic" => "ManufacturingRoutingSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchBasic",
    	"manufacturingWorkCenterJoin" => "EntityGroupSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ManufacturingRoutingSearchBasic $basic
     * @return ManufacturingRoutingSearch
     */
    public function setBasic(ManufacturingRoutingSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ManufacturingRoutingSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return ManufacturingRoutingSearch
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
     * @return ManufacturingRoutingSearch
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
     * Set manufacturingCostTemplateJoin
     *
     * @param ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin
     * @return ManufacturingRoutingSearch
     */
    public function setManufacturingCostTemplateJoin(ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin) {
        $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
        return $this;
    }

    /**
     * Get manufacturingCostTemplateJoin
     *
     * @return ManufacturingCostTemplateSearchBasic
     */
    public function getManufacturingCostTemplateJoin() {
        return $this->manufacturingCostTemplateJoin;
    }


    /**
     * Set manufacturingWorkCenterJoin
     *
     * @param EntityGroupSearchBasic $manufacturingWorkCenterJoin
     * @return ManufacturingRoutingSearch
     */
    public function setManufacturingWorkCenterJoin(EntityGroupSearchBasic $manufacturingWorkCenterJoin) {
        $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
        return $this;
    }

    /**
     * Get manufacturingWorkCenterJoin
     *
     * @return EntityGroupSearchBasic
     */
    public function getManufacturingWorkCenterJoin() {
        return $this->manufacturingWorkCenterJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ManufacturingRoutingSearch
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