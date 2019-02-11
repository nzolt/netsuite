<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceDow;

/**
 * RecurrenceDowMaskList
 */
class RecurrenceDowMaskList {

    /**
     * @access public
     * @var RecurrenceDow
     */
    protected $recurrenceDowMask;

    static $paramtypesmap = array(
    	"recurrenceDowMask" => "RecurrenceDow",
    );

    /**
     * Set recurrenceDowMask
     *
     * @param RecurrenceDow $recurrenceDowMask
     * @return RecurrenceDowMaskList
     */
    public function setRecurrenceDowMask(RecurrenceDow $recurrenceDowMask) {
        $this->recurrenceDowMask = $recurrenceDowMask;
        return $this;
    }

    /**
     * Get recurrenceDowMask
     *
     * @return RecurrenceDow
     */
    public function getRecurrenceDowMask() {
        return $this->recurrenceDowMask;
    }

}