<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetSelectValueResult
 */
class GetSelectValueResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var integer
     */
    protected $totalRecords;

    /**
     * @access public
     * @var integer
     */
    protected $totalPages;

    /**
     * @access public
     * @var BaseRefList
     */
    protected $baseRefList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"totalPages" => "integer",
    	"baseRefList" => "BaseRefList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetSelectValueResult
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set totalRecords
     *
     * @param integer $totalRecords
     * @return GetSelectValueResult
     */
    public function setTotalRecords($totalRecords) {
        $this->totalRecords = $totalRecords;
        return $this;
    }

    /**
     * Get totalRecords
     *
     * @return integer
     */
    public function getTotalRecords() {
        return $this->totalRecords;
    }


    /**
     * Set totalPages
     *
     * @param integer $totalPages
     * @return GetSelectValueResult
     */
    public function setTotalPages($totalPages) {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Get totalPages
     *
     * @return integer
     */
    public function getTotalPages() {
        return $this->totalPages;
    }


    /**
     * Set baseRefList
     *
     * @param BaseRefList $baseRefList
     * @return GetSelectValueResult
     */
    public function setBaseRefList(BaseRefList $baseRefList) {
        $this->baseRefList = $baseRefList;
        return $this;
    }

    /**
     * Get baseRefList
     *
     * @return BaseRefList
     */
    public function getBaseRefList() {
        return $this->baseRefList;
    }

}