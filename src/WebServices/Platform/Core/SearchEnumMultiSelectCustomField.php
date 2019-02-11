<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchEnumMultiSelectFieldOperator;

/**
 * SearchEnumMultiSelectCustomField
 */
class SearchEnumMultiSelectCustomField extends SearchCustomField {

    /**
     * @access public
     * @var string[]
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchEnumMultiSelectFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "string[]",
    	"operator" => "SearchEnumMultiSelectFieldOperator",
    );

    /**
     * Set operator
     *
     * @param SearchEnumMultiSelectFieldOperator $operator
     * @return SearchEnumMultiSelectCustomField
     */
    public function setOperator(SearchEnumMultiSelectFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchEnumMultiSelectFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}