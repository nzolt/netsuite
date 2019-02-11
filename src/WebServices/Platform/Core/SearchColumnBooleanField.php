<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnBooleanField
 */
class SearchColumnBooleanField extends SearchColumnField {

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
     * @return SearchColumnBooleanField
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