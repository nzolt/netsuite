<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDate;
use Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDateFieldOperator;

/**
 * SearchDateField
 */
class SearchDateField {

    /**
     * @access public
     * @var SearchDate
     */
    protected $predefinedSearchValue;

    /**
     * @access public
     * @var dateTime
     */
    protected $searchValue;

    /**
     * @access public
     * @var dateTime
     */
    protected $searchValue2;

    /**
     * @access public
     * @var SearchDateFieldOperator
     */
    protected $operator;

    static $paramtypesmap = array(
    	"predefinedSearchValue" => "SearchDate",
    	"searchValue" => "dateTime",
    	"searchValue2" => "dateTime",
    	"operator" => "SearchDateFieldOperator",
    );

    /**
     * Set predefinedSearchValue
     *
     * @param SearchDate $predefinedSearchValue
     * @return SearchDateField
     */
    public function setPredefinedSearchValue(SearchDate $predefinedSearchValue) {
        $this->predefinedSearchValue = $predefinedSearchValue;
        return $this;
    }

    /**
     * Get predefinedSearchValue
     *
     * @return SearchDate
     */
    public function getPredefinedSearchValue() {
        return $this->predefinedSearchValue;
    }


    /**
     * Set searchValue
     *
     * @param \DateTime $searchValue
     * @return SearchDateField
     */
    public function setSearchValue(\DateTime $searchValue) {
        $this->searchValue = $searchValue->format('c');
        return $this;
    }

    /**
     * Get searchValue
     *
     * @return \DateTime
     */
    public function getSearchValue() {
        return new \DateTime($this->searchValue);
    }


    /**
     * Set searchValue2
     *
     * @param \DateTime $searchValue2
     * @return SearchDateField
     */
    public function setSearchValue2(\DateTime $searchValue2) {
        $this->searchValue2 = $searchValue2->format('c');
        return $this;
    }

    /**
     * Get searchValue2
     *
     * @return \DateTime
     */
    public function getSearchValue2() {
        return new \DateTime($this->searchValue2);
    }


    /**
     * Set operator
     *
     * @param SearchDateFieldOperator $operator
     * @return SearchDateField
     */
    public function setOperator(SearchDateFieldOperator $operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Get operator
     *
     * @return SearchDateFieldOperator
     */
    public function getOperator() {
        return $this->operator;
    }

}