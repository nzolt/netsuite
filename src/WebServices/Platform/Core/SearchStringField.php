<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchStringField
 */
class SearchStringField {

    /**
     * @access public
     * @var string
     */
    protected $searchValue;

    /**
     * @access public
     * @var SearchStringFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "string",
    	"operator" => "SearchStringFieldOperator",
    );

    /**
     * Set searchValue
     *
     * @param string $searchValue
     * @return SearchStringField
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
     * Set operator
     *
     * @param string $operator
     * @return SearchStringField
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