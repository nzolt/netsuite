<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetDeletedResult
 */
class GetDeletedResult {

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
    protected $pageSize;

    /**
     * @access public
     * @var integer
     */
    protected $totalPages;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    /**
     * @access public
     * @var DeletedRecordList
     */
    protected $deletedRecordList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"pageSize" => "integer",
    	"totalPages" => "integer",
    	"pageIndex" => "integer",
    	"deletedRecordList" => "DeletedRecordList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetDeletedResult
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
     * @return GetDeletedResult
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
     * Set pageSize
     *
     * @param integer $pageSize
     * @return GetDeletedResult
     */
    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * Get pageSize
     *
     * @return integer
     */
    public function getPageSize() {
        return $this->pageSize;
    }


    /**
     * Set totalPages
     *
     * @param integer $totalPages
     * @return GetDeletedResult
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
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return GetDeletedResult
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


    /**
     * Set deletedRecordList
     *
     * @param DeletedRecordList $deletedRecordList
     * @return GetDeletedResult
     */
    public function setDeletedRecordList(DeletedRecordList $deletedRecordList) {
        $this->deletedRecordList = $deletedRecordList;
        return $this;
    }

    /**
     * Get deletedRecordList
     *
     * @return DeletedRecordList
     */
    public function getDeletedRecordList() {
        return $this->deletedRecordList;
    }

}