<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * LandedCost
 */
class LandedCost extends Record {

    /**
     * @access public
     * @var LandedCostDataList
     */
    protected $landedCostDataList;

    static $paramtypesmap = array(
    	"landedCostDataList" => "LandedCostDataList",
    );

    /**
     * Set landedCostDataList
     *
     * @param LandedCostDataList $landedCostDataList
     * @return LandedCost
     */
    public function setLandedCostDataList(LandedCostDataList $landedCostDataList) {
        $this->landedCostDataList = $landedCostDataList;
        return $this;
    }

    /**
     * Get landedCostDataList
     *
     * @return LandedCostDataList
     */
    public function getLandedCostDataList() {
        return $this->landedCostDataList;
    }

}