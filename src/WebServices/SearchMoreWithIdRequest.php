<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * SearchMoreWithIdRequest
 */
class SearchMoreWithIdRequest {

    /**
     * @access public
     * @var string
     */
    protected $searchId;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"searchId" => "string",
    	"pageIndex" => "integer",
    );

    /**
     * Set searchId
     *
     * @param string $searchId
     * @return SearchMoreWithIdRequest
     */
    public function setSearchId($searchId) {
        $this->searchId = $searchId;
        return $this;
    }

    /**
     * Get searchId
     *
     * @return string
     */
    public function getSearchId() {
        return $this->searchId;
    }


    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return SearchMoreWithIdRequest
     */
    public function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
        return $this;
    }

    /**
     * Get pageIndex
     *
     * @return integer
     */
    public function getPageIndex() {
        return $this->pageIndex;
    }

}