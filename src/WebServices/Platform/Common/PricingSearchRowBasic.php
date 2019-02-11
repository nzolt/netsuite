<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * PricingSearchRowBasic
 */
class PricingSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $customer;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $maximumQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $minimumQuantity;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $quantityRange;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $saleUnit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice;

    static $paramtypesmap = array(
    	"currency" => "SearchColumnSelectField[]",
    	"customer" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnLongField[]",
    	"item" => "SearchColumnSelectField[]",
    	"maximumQuantity" => "SearchColumnDoubleField[]",
    	"minimumQuantity" => "SearchColumnDoubleField[]",
    	"priceLevel" => "SearchColumnSelectField[]",
    	"quantityRange" => "SearchColumnStringField[]",
    	"saleUnit" => "SearchColumnSelectField[]",
    	"unitPrice" => "SearchColumnDoubleField[]",
    );
}