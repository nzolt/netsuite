<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * SearchPreferences
 */
class SearchPreferences {

    /**
     * @access public
     * @var boolean
     */
    protected $bodyFieldsOnly;

    /**
     * @access public
     * @var boolean
     */
    protected $returnSearchColumns;

    /**
     * @access public
     * @var integer
     */
    protected $pageSize;

    static $paramtypesmap = array(
    	"bodyFieldsOnly" => "boolean",
    	"returnSearchColumns" => "boolean",
    	"pageSize" => "integer",
    );

    /**
     * Set bodyFieldsOnly
     *
     * @param boolean $bodyFieldsOnly
     * @return SearchPreferences
     */
    public function setBodyFieldsOnly($bodyFieldsOnly) {
        $this->bodyFieldsOnly = $bodyFieldsOnly;
        return $this;
    }

    /**
     * Get bodyFieldsOnly
     *
     * @return boolean
     */
    public function getBodyFieldsOnly() {
        return $this->bodyFieldsOnly;
    }


    /**
     * Set returnSearchColumns
     *
     * @param boolean $returnSearchColumns
     * @return SearchPreferences
     */
    public function setReturnSearchColumns($returnSearchColumns) {
        $this->returnSearchColumns = $returnSearchColumns;
        return $this;
    }

    /**
     * Get returnSearchColumns
     *
     * @return boolean
     */
    public function getReturnSearchColumns() {
        return $this->returnSearchColumns;
    }


    /**
     * Set pageSize
     *
     * @param integer $pageSize
     * @return SearchPreferences
     */
    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * Get pageSize
     *
     * @return integer
     */
    public function getPageSize() {
        return $this->pageSize;
    }

}