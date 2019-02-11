<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ConsolidatedExchangeRateFilter
 */
class ConsolidatedExchangeRateFilter {

    /**
     * @access public
     * @var RecordRef
     */
    public $period;

    /**
     * @access public
     * @var RecordRef
     */
    public $fromSubsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $toSubsidiary;

    static $paramtypesmap = array(
    	"period" => "RecordRef",
    	"fromSubsidiary" => "RecordRef",
    	"toSubsidiary" => "RecordRef",
    );
}