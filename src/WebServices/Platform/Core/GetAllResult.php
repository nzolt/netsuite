<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetAllResult
 */
class GetAllResult {

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
     * @var RecordList
     */
    protected $recordList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"recordList" => "RecordList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetAllResult
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
     * @return GetAllResult
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
     * Set recordList
     *
     * @param RecordList $recordList
     * @return GetAllResult
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

}