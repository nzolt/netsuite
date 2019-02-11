<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchStringFieldOperator;

/**
 * SearchStringCustomField
 */
class SearchStringCustomField extends SearchCustomField {

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
     * @return SearchStringCustomField
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
     * @param SearchStringFieldOperator $operator
     * @return SearchStringCustomField
     */
    public function setOperator(SearchStringFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchStringFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}