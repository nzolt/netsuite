<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * AsyncSearchRequest
 */
class AsyncSearchRequest {

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
     * @return AsyncSearchRequest
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