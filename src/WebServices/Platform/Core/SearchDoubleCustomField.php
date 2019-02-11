<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDoubleFieldOperator;

/**
 * SearchDoubleCustomField
 */
class SearchDoubleCustomField extends SearchCustomField {

    /**
     * @access public
     * @var float
     */
    protected $searchValue;

    /**
     * @access public
     * @var float
     */
    protected $searchValue2;

    /**
     * @access public
     * @var SearchDoubleFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "float",
    	"searchValue2" => "float",
    	"operator" => "SearchDoubleFieldOperator",
    );

    /**
     * Set searchValue
     *
     * @param float $searchValue
     * @return SearchDoubleCustomField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return float
     */
    public function getSearchValue() {
        return $this->searchValue;
    }


    /**
     * Set searchValue2
     *
     * @param float $searchValue2
     * @return SearchDoubleCustomField
     */
    public function setSearchValue2($searchValue2) {
        $this->searchValue2 = $searchValue2;
        return $this;
    }

    /**
     * Get searchValue2
     *
     * @return float
     */
    public function getSearchValue2() {
        return $this->searchValue2;
    }


    /**
     * Set operator
     *
     * @param SearchDoubleFieldOperator $operator
     * @return SearchDoubleCustomField
     */
    public function setOperator(SearchDoubleFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchDoubleFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}