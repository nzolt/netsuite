<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummaryField;
use Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummaryFilter;

/**
 * GetPostingTransactionSummaryRequest
 */
class GetPostingTransactionSummaryRequest {

    /**
     * @access public
     * @var PostingTransactionSummaryField
     */
    protected $fields;

    /**
     * @access public
     * @var PostingTransactionSummaryFilter
     */
    protected $filters;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"fields" => "PostingTransactionSummaryField",
    	"filters" => "PostingTransactionSummaryFilter",
    	"pageIndex" => "integer",
    );

    /**
     * Set fields
     *
     * @param PostingTransactionSummaryField $fields
     * @return GetPostingTransactionSummaryRequest
     */
    public function setFields(PostingTransactionSummaryField $fields) {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Get fields
     *
     * @return PostingTransactionSummaryField
     */
    public function getFields() {
        return $this->fields;
    }


    /**
     * Set filters
     *
     * @param PostingTransactionSummaryFilter $filters
     * @return GetPostingTransactionSummaryRequest
     */
    public function setFilters(PostingTransactionSummaryFilter $filters) {
        $this->filters = $filters;
        return $this;
    }

    /**
     * Get filters
     *
     * @return PostingTransactionSummaryFilter
     */
    public function getFilters() {
        return $this->filters;
    }


    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return GetPostingTransactionSummaryRequest
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