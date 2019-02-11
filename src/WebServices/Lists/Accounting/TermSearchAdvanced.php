<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * TermSearchAdvanced
 */
class TermSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var TermSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var TermSearchRow
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
    	"criteria" => "TermSearch",
    	"columns" => "TermSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param TermSearch $criteria
     * @return TermSearchAdvanced
     */
    public function setCriteria(TermSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return TermSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param TermSearchRow $columns
     * @return TermSearchAdvanced
     */
    public function setColumns(TermSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return TermSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return TermSearchAdvanced
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
     * @return TermSearchAdvanced
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