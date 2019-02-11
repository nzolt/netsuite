<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * VendorPricingSchedule
 */
class VendorPricingSchedule {

    /**
     * @access public
     * @var string
     */
    protected $scheduleName;

    /**
     * @access public
     * @var float
     */
    protected $scheduleDiscount;

    static $paramtypesmap = array(
    	"scheduleName" => "string",
    	"scheduleDiscount" => "float",
    );

    /**
     * Set scheduleName
     *
     * @param string $scheduleName
     * @return VendorPricingSchedule
     */
    public function setScheduleName($scheduleName) {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * Get scheduleName
     *
     * @return string
     */
    public function getScheduleName() {
        return $this->scheduleName;
    }


    /**
     * Set scheduleDiscount
     *
     * @param float $scheduleDiscount
     * @return VendorPricingSchedule
     */
    public function setScheduleDiscount($scheduleDiscount) {
        $this->scheduleDiscount = $scheduleDiscount;
        return $this;
    }

    /**
     * Get scheduleDiscount
     *
     * @return float
     */
    public function getScheduleDiscount() {
        return $this->scheduleDiscount;
    }

}