<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchEnumMultiSelectFieldOperator;

/**
 * SearchEnumMultiSelectField
 */
class SearchEnumMultiSelectField {

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
     * @return SearchEnumMultiSelectField
     */
    public function setOperator($operator) {
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
