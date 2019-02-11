<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\DurationUnit;

/**
 * Duration
 */
class Duration {

    /**
     * @access public
     * @var float
     */
    protected $timeSpan;

    /**
     * @access public
     * @var DurationUnit
     */
    protected $unit;

    static $paramtypesmap = array(
    	"timeSpan" => "float",
    	"unit" => "DurationUnit",
    );

    /**
     * Set timeSpan
     *
     * @param float $timeSpan
     * @return Duration
     */
    public function setTimeSpan($timeSpan) {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Get timeSpan
     *
     * @return float
     */
    public function getTimeSpan() {
        return $this->timeSpan;
    }


    /**
     * Set unit
     *
     * @param string $unit
     * @return Duration
     */
    public function setUnit($unit) {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit() {
        return $this->unit;
    }

}