<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * TaskTimeItemList
 */
class TaskTimeItemList {

    /**
     * @access public
     * @var TimeItem[]
     */
    public $timeItem;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"timeItem" => "TimeItem[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return TaskTimeItemList
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