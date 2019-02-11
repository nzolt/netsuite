<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchMultiSelectField
 */
class SearchMultiSelectField {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchMultiSelectFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "RecordRef[]",
    	"operator" => "SearchMultiSelectFieldOperator",
    );

    /**
     * Set operator
     *
     * @param string $operator
     * @return SearchMultiSelectField
     */
    public function setOperator($operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator() {
        return $this->operator;
    }

}