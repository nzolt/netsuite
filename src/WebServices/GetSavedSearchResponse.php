<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetSavedSearchResult;

/**
 * GetSavedSearchResponse
 */
class GetSavedSearchResponse {

    /**
     * @access public
     * @var GetSavedSearchResult
     */
    protected $getSavedSearchResult;

    static $paramtypesmap = array(
    	"getSavedSearchResult" => "GetSavedSearchResult",
    );

    /**
     * Set getSavedSearchResult
     *
     * @param GetSavedSearchResult $getSavedSearchResult
     * @return GetSavedSearchResponse
     */
    public function setGetSavedSearchResult(GetSavedSearchResult $getSavedSearchResult) {
        $this->getSavedSearchResult = $getSavedSearchResult;
        return $this;
    }

    /**
     * Get getSavedSearchResult
     *
     * @return GetSavedSearchResult
     */
    public function getGetSavedSearchResult() {
        return $this->getSavedSearchResult;
    }

}