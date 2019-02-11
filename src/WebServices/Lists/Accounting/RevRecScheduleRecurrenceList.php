<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * RevRecScheduleRecurrenceList
 */
class RevRecScheduleRecurrenceList {

    /**
     * @access public
     * @var RevRecScheduleRecurrence[]
     */
    public $revRecScheduleRecurrence;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"revRecScheduleRecurrence" => "RevRecScheduleRecurrence[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return RevRecScheduleRecurrenceList
     */
    public function setReplaceAll($replaceAll) {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * Get replaceAll
     *
     * @return boolean
     */
    public function getReplaceAll() {
        return $this->replaceAll;
    }

}