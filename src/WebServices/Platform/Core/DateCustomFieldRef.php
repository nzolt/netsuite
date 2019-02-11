<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DateCustomFieldRef
 */
class DateCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var dateTime
     */
    protected $value;

    static $paramtypesmap = array(
    	"value" => "dateTime",
    );

    /**
     * Set value
     *
     * @param \DateTime $value
     * @return DateCustomFieldRef
     */
    public function setValue(\DateTime $value) {
        $this->value = $value->format('c');
        return $this;
    }

    /**
     * Get value
     *
     * @return \DateTime
     */
    public function getValue() {
        return new \DateTime($this->value);
    }

}