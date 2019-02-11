<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnDateField
 */
class SearchColumnDateField extends SearchColumnField {

    /**
     * @access public
     * @var dateTime
     */
    protected $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "dateTime",
    );

    /**
     * Set searchValue
     *
     * @param \DateTime $searchValue
     * @return SearchColumnDateField
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

}