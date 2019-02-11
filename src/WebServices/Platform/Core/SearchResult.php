<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchResult
 */
class SearchResult {

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
     * @var string
     */
    protected $searchId;

    /**
     * @access public
     * @var RecordList
     */
    protected $recordList;

    /**
     * @access public
     * @var SearchRowList
     */
    protected $searchRowList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"pageSize" => "integer",
    	"totalPages" => "integer",
    	"pageIndex" => "integer",
    	"searchId" => "string",
    	"recordList" => "RecordList",
    	"searchRowList" => "SearchRowList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return SearchResult
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
     * @return SearchResult
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
     * @return SearchResult
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
     * @return SearchResult
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
     * @return SearchResult
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
     * Set searchId
     *
     * @param string $searchId
     * @return SearchResult
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
     * Set recordList
     *
     * @param RecordList $recordList
     * @return SearchResult
     */
    public function setRecordList(RecordList $recordList) {
        $this->recordList = $recordList;
        return $this;
    }

    /**
     * Get recordList
     *
     * @return RecordList
     */
    public function getRecordList() {
        return $this->recordList;
    }


    /**
     * Set searchRowList
     *
     * @param SearchRowList $searchRowList
     * @return SearchResult
     */
    public function setSearchRowList(SearchRowList $searchRowList) {
        $this->searchRowList = $searchRowList;
        return $this;
    }

    /**
     * Get searchRowList
     *
     * @return SearchRowList
     */
    public function getSearchRowList() {
        return $this->searchRowList;
    }

}