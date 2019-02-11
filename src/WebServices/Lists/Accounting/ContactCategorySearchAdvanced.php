<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;

/**
 * ContactCategorySearchAdvanced
 */
class ContactCategorySearchAdvanced extends SearchRecord {

    /**
     * @access public
     * @var ContactCategorySearch
     */
    protected $criteria;

    /**
     * @access public
     * @var ContactCategorySearchRow
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
    	"criteria" => "ContactCategorySearch",
    	"columns" => "ContactCategorySearchRow",
    	"savedSearchId" => "string",
    	"savedSearchScriptId" => "string",
    );

    /**
     * Set criteria
     *
     * @param ContactCategorySearch $criteria
     * @return ContactCategorySearchAdvanced
     */
    public function setCriteria(ContactCategorySearch $criteria) {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Get criteria
     *
     * @return ContactCategorySearch
     */
    public function getCriteria() {
        return $this->criteria;
    }


    /**
     * Set columns
     *
     * @param ContactCategorySearchRow $columns
     * @return ContactCategorySearchAdvanced
     */
    public function setColumns(ContactCategorySearchRow $columns) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Get columns
     *
     * @return ContactCategorySearchRow
     */
    public function getColumns() {
        return $this->columns;
    }


    /**
     * Set savedSearchId
     *
     * @param string $savedSearchId
     * @return ContactCategorySearchAdvanced
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
     * @return ContactCategorySearchAdvanced
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