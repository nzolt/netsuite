<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * CouponCodeSearchAdvanced
 */
class CouponCodeSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var CouponCodeSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var CouponCodeSearchRow
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
    	"criteria" => "CouponCodeSearch",
    	"columns" => "CouponCodeSearchRow",
    	"savedSearchScriptId" => "string",
    	"savedSearchId" => "string",
    );

    /**
     * Set criteria
     *
     * @param CouponCodeSearch $criteria
     * @return CouponCodeSearchAdvanced
     */
    public function setCriteria(CouponCodeSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return CouponCodeSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param CouponCodeSearchRow $columns
     * @return CouponCodeSearchAdvanced
     */
    public function setColumns(CouponCodeSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return CouponCodeSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchScriptId
     *
     * @param string $savedSearchScriptId
     * @return CouponCodeSearchAdvanced
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
     * @return CouponCodeSearchAdvanced
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