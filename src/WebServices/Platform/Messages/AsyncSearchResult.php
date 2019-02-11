<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchResult;

/**
 * AsyncSearchResult
 */
class AsyncSearchResult extends AsyncResult {

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
     * @return AsyncSearchResult
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