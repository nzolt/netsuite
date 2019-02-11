<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * ItemDemandPlanSearchAdvanced
 */
class ItemDemandPlanSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var ItemDemandPlanSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var ItemDemandPlanSearchRow
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
    	"criteria" => "ItemDemandPlanSearch",
    	"columns" => "ItemDemandPlanSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param ItemDemandPlanSearch $criteria
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setCriteria(ItemDemandPlanSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return ItemDemandPlanSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param ItemDemandPlanSearchRow $columns
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setColumns(ItemDemandPlanSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return ItemDemandPlanSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return ItemDemandPlanSearchAdvanced
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
     * @return ItemDemandPlanSearchAdvanced
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