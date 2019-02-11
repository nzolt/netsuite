<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchResult;

/**
 * SearchNextResponse
 */
class SearchNextResponse {

    /**
     * @access public
     * @var SearchResult
     */
    protected $searchResult;

    static $paramtypesmap = array(
    	"searchResult" => "SearchResult",
    );

    /**
     * Set searchResult
     *
     * @param SearchResult $searchResult
     * @return SearchNextResponse
     */
    public function setSearchResult(SearchResult $searchResult) {
        $this->searchResult = $searchResult;
        return $this;
    }

    /**
     * Get searchResult
     *
     * @return SearchResult
     */
    public function getSearchResult() {
        return $this->searchResult;
    }

}