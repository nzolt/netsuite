<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DoubleCustomFieldRef
 */
class DoubleCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var float
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "float",
    );

    /**
     * Set value
     *
     * @param float $value
     * @return DoubleCustomFieldRef
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue() {
        return $this->value;
    }

}