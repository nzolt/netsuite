<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * ManufacturingCostTemplateSearchAdvanced
 */
class ManufacturingCostTemplateSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var ManufacturingCostTemplateSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var ManufacturingCostTemplateSearchRow
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
    	"criteria" => "ManufacturingCostTemplateSearch",
    	"columns" => "ManufacturingCostTemplateSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param ManufacturingCostTemplateSearch $criteria
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setCriteria(ManufacturingCostTemplateSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return ManufacturingCostTemplateSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param ManufacturingCostTemplateSearchRow $columns
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setColumns(ManufacturingCostTemplateSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return ManufacturingCostTemplateSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return ManufacturingCostTemplateSearchAdvanced
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
     * @return ManufacturingCostTemplateSearchAdvanced
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