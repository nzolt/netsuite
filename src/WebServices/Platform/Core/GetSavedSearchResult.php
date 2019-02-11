<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetSavedSearchResult
 */
class GetSavedSearchResult {

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
     * @var RecordRefList
     */
    protected $recordRefList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"recordRefList" => "RecordRefList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetSavedSearchResult
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
     * @return GetSavedSearchResult
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
     * Set recordRefList
     *
     * @param RecordRefList $recordRefList
     * @return GetSavedSearchResult
     */
    public function setRecordRefList(RecordRefList $recordRefList) {
        $this->recordRefList = $recordRefList;
        return $this;
    }

    /**
     * Get recordRefList
     *
     * @return RecordRefList
     */
    public function getRecordRefList() {
        return $this->recordRefList;
    }

}