<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

/**
 * StatisticalJournalEntryLineList
 */
class StatisticalJournalEntryLineList {

    /**
     * @access public
     * @var StatisticalJournalEntryLine[]
     */
    public $statisticalJournalEntryLine;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"statisticalJournalEntryLine" => "StatisticalJournalEntryLine[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return StatisticalJournalEntryLineList
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