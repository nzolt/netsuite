<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DayOfTheWeek;

/**
 * PeriodDemandPlan
 */
class PeriodDemandPlan {

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var DayOfTheWeek
     */
    protected $dayOfTheWeek;

    static $paramtypesmap = array(
    	"quantity" => "float",
    	"dayOfTheWeek" => "DayOfTheWeek",
    );

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return PeriodDemandPlan
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set dayOfTheWeek
     *
     * @param DayOfTheWeek $dayOfTheWeek
     * @return PeriodDemandPlan
     */
    public function setDayOfTheWeek(DayOfTheWeek $dayOfTheWeek) {
        $this->dayOfTheWeek = $dayOfTheWeek;
        return $this;
    }

    /**
     * Get dayOfTheWeek
     *
     * @return DayOfTheWeek
     */
    public function getDayOfTheWeek() {
        return $this->dayOfTheWeek;
    }

}