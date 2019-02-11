<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\ItemAvailabilityFilter;

/**
 * GetItemAvailabilityRequest
 */
class GetItemAvailabilityRequest {

    /**
     * @access public
     * @var ItemAvailabilityFilter
     */
    protected $itemAvailabilityFilter;

    static $paramtypesmap = array(
    	"itemAvailabilityFilter" => "ItemAvailabilityFilter",
    );

    /**
     * Set itemAvailabilityFilter
     *
     * @param ItemAvailabilityFilter $itemAvailabilityFilter
     * @return GetItemAvailabilityRequest
     */
    public function setItemAvailabilityFilter(ItemAvailabilityFilter $itemAvailabilityFilter) {
        $this->itemAvailabilityFilter = $itemAvailabilityFilter;
        return $this;
    }

    /**
     * Get itemAvailabilityFilter
     *
     * @return ItemAvailabilityFilter
     */
    public function getItemAvailabilityFilter() {
        return $this->itemAvailabilityFilter;
    }

}