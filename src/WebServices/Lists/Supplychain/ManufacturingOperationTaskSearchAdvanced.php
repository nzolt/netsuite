<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * ManufacturingOperationTaskSearchAdvanced
 */
class ManufacturingOperationTaskSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var ManufacturingOperationTaskSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchRow
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
    	"criteria" => "ManufacturingOperationTaskSearch",
    	"columns" => "ManufacturingOperationTaskSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param ManufacturingOperationTaskSearch $criteria
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setCriteria(ManufacturingOperationTaskSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return ManufacturingOperationTaskSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param ManufacturingOperationTaskSearchRow $columns
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setColumns(ManufacturingOperationTaskSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return ManufacturingOperationTaskSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return ManufacturingOperationTaskSearchAdvanced
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
     * @return ManufacturingOperationTaskSearchAdvanced
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