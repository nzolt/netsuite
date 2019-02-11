<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingCostTemplateSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * ManufacturingCostTemplateSearch
 */
class ManufacturingCostTemplateSearch extends SearchRecord {

    /**
     * @access public
     * @var ManufacturingCostTemplateSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

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
    	"basic" => "ManufacturingCostTemplateSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ManufacturingCostTemplateSearchBasic $basic
     * @return ManufacturingCostTemplateSearch
     */
    public function setBasic(ManufacturingCostTemplateSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ManufacturingCostTemplateSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return ManufacturingCostTemplateSearch
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
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ManufacturingCostTemplateSearch
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