<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * SearchMoreRequest
 */
class SearchMoreRequest {

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"pageIndex" => "integer",
    );

    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return SearchMoreRequest
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