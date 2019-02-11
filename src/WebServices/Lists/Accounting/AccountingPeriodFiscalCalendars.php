<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * AccountingPeriodFiscalCalendars
 */
class AccountingPeriodFiscalCalendars {

    /**
     * @access public
     * @var RecordRef
     */
    public $fiscalCalendar;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    static $paramtypesmap = array(
    	"fiscalCalendar" => "RecordRef",
    	"parent" => "RecordRef",
    );
}