<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchLongFieldOperator;

/**
 * SearchLongCustomField
 */
class SearchLongCustomField extends SearchCustomField {

    /**
     * @access public
     * @var integer
     */
    protected $searchValue;

    /**
     * @access public
     * @var integer
     */
    protected $searchValue2;

    /**
     * @access public
     * @var SearchLongFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"searchValue" => "integer",
    	"searchValue2" => "integer",
    	"operator" => "SearchLongFieldOperator",
    );

    /**
     * Set searchValue
     *
     * @param integer $searchValue
     * @return SearchLongCustomField
     */
    public function setSearchValue($searchValue) {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return integer
     */
    public function getSearchValue() {
        return $this->searchValue;
    }


    /**
     * Set searchValue2
     *
     * @param integer $searchValue2
     * @return SearchLongCustomField
     */
    public function setSearchValue2($searchValue2) {
        $this->searchValue2 = $searchValue2;
        return $this;
    }

    /**
     * Get searchValue2
     *
     * @return integer
     */
    public function getSearchValue2() {
        return $this->searchValue2;
    }


    /**
     * Set operator
     *
     * @param SearchLongFieldOperator $operator
     * @return SearchLongCustomField
     */
    public function setOperator(SearchLongFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchLongFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}