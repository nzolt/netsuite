<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * Record
 */
class Record {

    /**
     * @access public
     * @var NullField
     */
    protected $nullFieldList;

    static $paramtypesmap = array(
    	"nullFieldList" => "NullField",
    );

    /**
     * Set nullFieldList
     *
     * @param NullField $nullFieldList
     * @return Record
     */
    public function setNullFieldList(NullField $nullFieldList) {
        $this->nullFieldList = $nullFieldList;
        return $this;
    }

    /**
     * Get nullFieldList
     *
     * @return NullField
     */
    public function getNullFieldList() {
        return $this->nullFieldList;
    }

}