<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * BooleanCustomFieldRef
 */
class BooleanCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var boolean
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "boolean",
    );

    /**
     * Set value
     *
     * @param boolean $value
     * @return BooleanCustomFieldRef
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return boolean
     */
    public function getValue() {
        return $this->value;
    }

}