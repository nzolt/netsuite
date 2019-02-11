<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SelectCustomFieldRef
 */
class SelectCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var ListOrRecordRef
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "ListOrRecordRef",
    );

    /**
     * Set value
     *
     * @param ListOrRecordRef $value
     * @return SelectCustomFieldRef
     */
    public function setValue(ListOrRecordRef $value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return ListOrRecordRef
     */
    public function getValue() {
        return $this->value;
    }

}