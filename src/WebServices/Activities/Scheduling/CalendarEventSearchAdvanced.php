<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * CalendarEventSearchAdvanced
 */
class CalendarEventSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var CalendarEventSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var CalendarEventSearchRow
     */
    protected $columns;

    /**
     * @access public
     * @var string
     */
    protected $savedSearchId;

    /**
     * @access public
     * @var string
     */
    protected $savedSearchScriptId;

    static $paramtypesmap = array(
    	"criteria" => "CalendarEventSearch",
    	"columns" => "CalendarEventSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param CalendarEventSearch $criteria
     * @return CalendarEventSearchAdvanced
     */
    public function setCriteria(CalendarEventSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return CalendarEventSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param CalendarEventSearchRow $columns
     * @return CalendarEventSearchAdvanced
     */
    public function setColumns(CalendarEventSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return CalendarEventSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return CalendarEventSearchAdvanced
     */
    public function setSavedSearchId($savedSearchId) {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * Get savedSearchId
     *
     * @return string
     */
    public function getSavedSearchId() {
        return $this->savedSearchId;
    }


    /**
     * Set savedSearchScriptId
     *
     * @param string $savedSearchScriptId
     * @return CalendarEventSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId) {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * Get savedSearchScriptId
     *
     * @return string
     */
    public function getSavedSearchScriptId() {
        return $this->savedSearchScriptId;
    }

}