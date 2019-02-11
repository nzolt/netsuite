<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingRoutingSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingCostTemplateSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * ManufacturingRoutingSearchRow
 */
class ManufacturingRoutingSearchRow extends SearchRow {

    /**
     * @access public
     * @var ManufacturingRoutingSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var ManufacturingCostTemplateSearchRowBasic
     */
    protected $manufacturingCostTemplateJoin;

    /**
     * @access public
     * @var EntityGroupSearchRowBasic
     */
    protected $manufacturingWorkCenterJoin;

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
    	"basic" => "ManufacturingRoutingSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchRowBasic",
    	"manufacturingWorkCenterJoin" => "EntityGroupSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ManufacturingRoutingSearchRowBasic $basic
     * @return ManufacturingRoutingSearchRow
     */
    public function setBasic(ManufacturingRoutingSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return ManufacturingRoutingSearchRow
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
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return ManufacturingRoutingSearchRow
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
     * Set manufacturingCostTemplateJoin
     *
     * @param ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setManufacturingCostTemplateJoin(ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin) {
        $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
        return $this;
    }

    /**
     * Get manufacturingCostTemplateJoin
     *
     * @return ManufacturingCostTemplateSearchRowBasic
     */
    public function getManufacturingCostTemplateJoin() {
        return $this->manufacturingCostTemplateJoin;
    }


    /**
     * Set manufacturingWorkCenterJoin
     *
     * @param EntityGroupSearchRowBasic $manufacturingWorkCenterJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setManufacturingWorkCenterJoin(EntityGroupSearchRowBasic $manufacturingWorkCenterJoin) {
        $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
        return $this;
    }

    /**
     * Get manufacturingWorkCenterJoin
     *
     * @return EntityGroupSearchRowBasic
     */
    public function getManufacturingWorkCenterJoin() {
        return $this->manufacturingWorkCenterJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ManufacturingRoutingSearchRow
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