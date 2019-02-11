<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * RevRecTemplateRecurrenceList
 */
class RevRecTemplateRecurrenceList {

    /**
     * @access public
     * @var RevRecTemplateRecurrence[]
     */
    public $revRecTemplateRecurrence;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"revRecTemplateRecurrence" => "RevRecTemplateRecurrence[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return RevRecTemplateRecurrenceList
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