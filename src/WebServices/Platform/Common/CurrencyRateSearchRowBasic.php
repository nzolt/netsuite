<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * CurrencyRateSearchRowBasic
 */
class CurrencyRateSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $baseCurrency;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $transactionCurrency;

    static $paramtypesmap = array(
    	"baseCurrency" => "SearchColumnSelectField[]",
    	"effectiveDate" => "SearchColumnDateField[]",
    	"exchangeRate" => "SearchColumnDoubleField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"transactionCurrency" => "SearchColumnSelectField[]",
    );
}