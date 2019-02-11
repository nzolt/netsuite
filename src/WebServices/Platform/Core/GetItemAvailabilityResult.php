<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetItemAvailabilityResult
 */
class GetItemAvailabilityResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var ItemAvailabilityList
     */
    protected $itemAvailabilityList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"itemAvailabilityList" => "ItemAvailabilityList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetItemAvailabilityResult
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set itemAvailabilityList
     *
     * @param ItemAvailabilityList $itemAvailabilityList
     * @return GetItemAvailabilityResult
     */
    public function setItemAvailabilityList(ItemAvailabilityList $itemAvailabilityList) {
        $this->itemAvailabilityList = $itemAvailabilityList;
        return $this;
    }

    /**
     * Get itemAvailabilityList
     *
     * @return ItemAvailabilityList
     */
    public function getItemAvailabilityList() {
        return $this->itemAvailabilityList;
    }

}