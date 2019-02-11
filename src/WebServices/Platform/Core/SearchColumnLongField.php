<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnLongField
 */
class SearchColumnLongField extends SearchColumnField {

    /**
     * @access public
     * @var integer
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "integer",
    );

    /**
     * Set searchValue
     *
     * @param integer $searchValue
     * @return SearchColumnLongField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return integer
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

}