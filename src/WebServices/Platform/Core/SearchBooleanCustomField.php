<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchBooleanCustomField
 */
class SearchBooleanCustomField extends SearchCustomField {

    /**
     * @access public
     * @var boolean
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "boolean",
    );

    /**
     * Set searchValue
     *
     * @param boolean $searchValue
     * @return SearchBooleanCustomField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return boolean
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

}