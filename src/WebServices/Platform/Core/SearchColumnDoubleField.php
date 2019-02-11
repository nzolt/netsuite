<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnDoubleField
 */
class SearchColumnDoubleField extends SearchColumnField {

    /**
     * @access public
     * @var float
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "float",
    );

    /**
     * Set searchValue
     *
     * @param float $searchValue
     * @return SearchColumnDoubleField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return float
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

}