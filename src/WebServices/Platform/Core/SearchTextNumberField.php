<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchTextNumberFieldOperator;

/**
 * SearchTextNumberField
 */
class SearchTextNumberField {

    /**
     * @access public
     * @var string
     */
    protected $searchValue;

    /**
     * @access public
     * @var string
     */
    protected $searchValue2;

    /**
     * @access public
     * @var SearchTextNumberFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "string",
    	"searchValue2" => "string",
    	"operator" => "SearchTextNumberFieldOperator",
    );

    /**
     * Set searchValue
     *
     * @param string $searchValue
     * @return SearchTextNumberField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return string
     */
    public function getSearchValue() {
        return $this->searchValue;
    }


    /**
     * Set searchValue2
     *
     * @param string $searchValue2
     * @return SearchTextNumberField
     */
    public function setSearchValue2($searchValue2) {
        $this->searchValue2 = $searchValue2;
        return $this;
    }

    /**
     * Get searchValue2
     *
     * @return string
     */
    public function getSearchValue2() {
        return $this->searchValue2;
    }


    /**
     * Set operator
     *
     * @param SearchTextNumberFieldOperator $operator
     * @return SearchTextNumberField
     */
    public function setOperator(SearchTextNumberFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchTextNumberFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}