<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * PromotionCodeSearchAdvanced
 */
class PromotionCodeSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var PromotionCodeSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var PromotionCodeSearchRow
     */
    protected $columns;

    /**
     * @access public
     * @var string
     */
    protected $savedSearchScriptId;

    /**
     * @access public
     * @var string
     */
    protected $savedSearchId;

    static $paramtypesmap = array(
    	"criteria" => "PromotionCodeSearch",
    	"columns" => "PromotionCodeSearchRow",
    	"savedSearchScriptId" => "string",
    	"savedSearchId" => "string",
    );

    /**
     * Set criteria
     *
     * @param PromotionCodeSearch $criteria
     * @return PromotionCodeSearchAdvanced
     */
    public function setCriteria(PromotionCodeSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return PromotionCodeSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param PromotionCodeSearchRow $columns
     * @return PromotionCodeSearchAdvanced
     */
    public function setColumns(PromotionCodeSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return PromotionCodeSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchScriptId
     *
     * @param string $savedSearchScriptId
     * @return PromotionCodeSearchAdvanced
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


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return PromotionCodeSearchAdvanced
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

}