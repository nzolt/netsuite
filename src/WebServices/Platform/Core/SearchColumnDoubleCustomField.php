<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnDoubleCustomField
 */
class SearchColumnDoubleCustomField extends SearchColumnCustomField {

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
     * @return SearchColumnDoubleCustomField
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