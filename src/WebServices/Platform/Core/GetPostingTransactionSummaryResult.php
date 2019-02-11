<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetPostingTransactionSummaryResult
 */
class GetPostingTransactionSummaryResult {

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
     * @var PostingTransactionSummaryList
     */
    protected $postingTransactionSummaryList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"pageSize" => "integer",
    	"totalPages" => "integer",
    	"pageIndex" => "integer",
    	"postingTransactionSummaryList" => "PostingTransactionSummaryList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
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
     * Set postingTransactionSummaryList
     *
     * @param PostingTransactionSummaryList $postingTransactionSummaryList
     * @return GetPostingTransactionSummaryResult
     */
    public function setPostingTransactionSummaryList(PostingTransactionSummaryList $postingTransactionSummaryList) {
        $this->postingTransactionSummaryList = $postingTransactionSummaryList;
        return $this;
    }

    /**
     * Get postingTransactionSummaryList
     *
     * @return PostingTransactionSummaryList
     */
    public function getPostingTransactionSummaryList() {
        return $this->postingTransactionSummaryList;
    }

}