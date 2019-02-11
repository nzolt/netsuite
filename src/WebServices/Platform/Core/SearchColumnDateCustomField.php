<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnDateCustomField
 */
class SearchColumnDateCustomField extends SearchColumnCustomField {

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
     * @return SearchColumnDateCustomField
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