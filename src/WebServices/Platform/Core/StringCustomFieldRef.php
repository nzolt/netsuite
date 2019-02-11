<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * StringCustomFieldRef
 */
class StringCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var string
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "string",
    );

    /**
     * Set value
     *
     * @param string $value
     * @return StringCustomFieldRef
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

}