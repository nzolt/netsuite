<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * SearchRequest
 */
class SearchRequest {

    /**
     * @access public
     * @var SearchRecord
     */
    protected $searchRecord;

    static $paramtypesmap = array(
    	"searchRecord" => "SearchRecord",
    );

    /**
     * Set searchRecord
     *
     * @param SearchRecord $searchRecord
     * @return SearchRequest
     */
    public function setSearchRecord(SearchRecord $searchRecord) {
        $this->searchRecord = $searchRecord;
        return $this;
    }

    /**
     * Get searchRecord
     *
     * @return SearchRecord
     */
    public function getSearchRecord() {
        return $this->searchRecord;
    }

}