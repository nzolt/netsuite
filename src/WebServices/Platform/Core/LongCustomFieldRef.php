<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * LongCustomFieldRef
 */
class LongCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var integer
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "integer",
    );

    /**
     * Set value
     *
     * @param integer $value
     * @return LongCustomFieldRef
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue() {
        return $this->value;
    }

}