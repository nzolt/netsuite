<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnLongCustomField
 */
class SearchColumnLongCustomField extends SearchColumnCustomField {

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
     * @return SearchColumnLongCustomField
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