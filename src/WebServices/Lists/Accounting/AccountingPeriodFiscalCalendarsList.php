<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * AccountingPeriodFiscalCalendarsList
 */
class AccountingPeriodFiscalCalendarsList {

    /**
     * @access public
     * @var AccountingPeriodFiscalCalendars[]
     */
    public $accountingPeriodFiscalCalendars;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"accountingPeriodFiscalCalendars" => "AccountingPeriodFiscalCalendars[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return AccountingPeriodFiscalCalendarsList
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