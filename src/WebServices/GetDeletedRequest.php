<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetDeletedFilter;

/**
 * GetDeletedRequest
 */
class GetDeletedRequest {

    /**
     * @access public
     * @var GetDeletedFilter
     */
    protected $getDeletedFilter;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"getDeletedFilter" => "GetDeletedFilter",
    	"pageIndex" => "integer",
    );

    /**
     * Set getDeletedFilter
     *
     * @param GetDeletedFilter $getDeletedFilter
     * @return GetDeletedRequest
     */
    public function setGetDeletedFilter(GetDeletedFilter $getDeletedFilter) {
        $this->getDeletedFilter = $getDeletedFilter;
        return $this;
    }

    /**
     * Get getDeletedFilter
     *
     * @return GetDeletedFilter
     */
    public function getGetDeletedFilter() {
        return $this->getDeletedFilter;
    }


    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return GetDeletedRequest
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