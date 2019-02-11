<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchMultiSelectFieldOperator;

/**
 * SearchMultiSelectCustomField
 */
class SearchMultiSelectCustomField extends SearchCustomField {

    /**
     * @access public
     * @var ListOrRecordRef[]
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchMultiSelectFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "ListOrRecordRef[]",
    	"operator" => "SearchMultiSelectFieldOperator",
    );

    /**
     * Set operator
     *
     * @param SearchMultiSelectFieldOperator $operator
     * @return SearchMultiSelectCustomField
     */
    public function setOperator(SearchMultiSelectFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchMultiSelectFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}