<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnStringField
 */
class SearchColumnStringField extends SearchColumnField {

    /**
     * @access public
     * @var string
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "string",
    );

    /**
     * Set searchValue
     *
     * @param string $searchValue
     * @return SearchColumnStringField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return string
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

}