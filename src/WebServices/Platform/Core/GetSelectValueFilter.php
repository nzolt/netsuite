<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\GetSelectValueFilterOperator;

/**
 * GetSelectValueFilter
 */
class GetSelectValueFilter {

    /**
     * @access public
     * @var string
     */
    protected $filterValue;

    /**
     * @access public
     * @var GetSelectValueFilterOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"filterValue" => "string",
    	"operator" => "GetSelectValueFilterOperator",
    );

    /**
     * Set filterValue
     *
     * @param string $filterValue
     * @return GetSelectValueFilter
     */
    public function setFilterValue($filterValue) {
        $this->filterValue = $filterValue;
        return $this;
    }

    /**
     * Get filterValue
     *
     * @return string
     */
    public function getFilterValue() {
        return $this->filterValue;
    }


    /**
     * Set operator
     *
     * @param GetSelectValueFilterOperator $operator
     * @return GetSelectValueFilter
     */
    public function setOperator(GetSelectValueFilterOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return GetSelectValueFilterOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}