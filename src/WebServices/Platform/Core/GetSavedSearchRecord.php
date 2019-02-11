<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchRecordType;

/**
 * GetSavedSearchRecord
 */
class GetSavedSearchRecord {

    /**
     * @access public
     * @var SearchRecordType
     */
    protected $searchType;

    static $paramtypesmap = array(
    	"searchType" => "SearchRecordType",
    );

    /**
     * Set searchType
     *
     * @param SearchRecordType $searchType
     * @return GetSavedSearchRecord
     */
    public function setSearchType(SearchRecordType $searchType) {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Get searchType
     *
     * @return SearchRecordType
     */
    public function getSearchType() {
        return $this->searchType;
    }

}