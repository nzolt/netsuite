<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * PartnerSearchAdvanced
 */
class PartnerSearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var PartnerSearch
     */
    protected $criteria;

    /**
     * @access public
     * @var PartnerSearchRow
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
    	"criteria" => "PartnerSearch",
    	"columns" => "PartnerSearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param PartnerSearch $criteria
     * @return PartnerSearchAdvanced
     */
    public function setCriteria(PartnerSearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return PartnerSearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param PartnerSearchRow $columns
     * @return PartnerSearchAdvanced
     */
    public function setColumns(PartnerSearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return PartnerSearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return PartnerSearchAdvanced
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
     * @return PartnerSearchAdvanced
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