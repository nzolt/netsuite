<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnSelectCustomField
 */
class SearchColumnSelectCustomField extends SearchColumnCustomField {

    /**
     * @access public
     * @var ListOrRecordRef
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "ListOrRecordRef",
    );

    /**
     * Set searchValue
     *
     * @param ListOrRecordRef $searchValue
     * @return SearchColumnSelectCustomField
     */
    public function setSearchValue(ListOrRecordRef $searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return ListOrRecordRef
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

}