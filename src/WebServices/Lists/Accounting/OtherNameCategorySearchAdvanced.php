<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * OtherNameCategorySearchAdvanced
 */
class OtherNameCategorySearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var OtherNameCategorySearch
     */
    protected $criteria;

    /**
     * @access public
     * @var OtherNameCategorySearchRow
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
    	"criteria" => "OtherNameCategorySearch",
    	"columns" => "OtherNameCategorySearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param OtherNameCategorySearch $criteria
     * @return OtherNameCategorySearchAdvanced
     */
    public function setCriteria(OtherNameCategorySearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return OtherNameCategorySearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param OtherNameCategorySearchRow $columns
     * @return OtherNameCategorySearchAdvanced
     */
    public function setColumns(OtherNameCategorySearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return OtherNameCategorySearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return OtherNameCategorySearchAdvanced
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
     * @return OtherNameCategorySearchAdvanced
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