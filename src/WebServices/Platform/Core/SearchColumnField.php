<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnField
 */
class SearchColumnField {

    /**
     * @access public
     * @var string
     */
    protected $customLabel;

    static $paramtypesmap = array(
    	"customLabel" => "string",
    );

    /**
     * Set customLabel
     *
     * @param string $customLabel
     * @return SearchColumnField
     */
    public function setCustomLabel($customLabel) {
        $this->customLabel = $customLabel;
        return $this;
    }

    /**
     * Get customLabel
     *
     * @return string
     */
    public function getCustomLabel() {
        return $this->customLabel;
    }

}