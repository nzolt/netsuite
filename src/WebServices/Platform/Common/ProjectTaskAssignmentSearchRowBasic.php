<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * ProjectTaskAssignmentSearchRowBasic
 */
class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualWork;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $cost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costBase;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWork;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $grossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $grossProfitBase;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $price;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $priceBase;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $resource;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $resourceName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serviceItem;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serviceItemDesc;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitCostBase;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitPriceBase;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $units;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $workCalendar;

    static $paramtypesmap = array(
    	"actualWork" => "SearchColumnDoubleField[]",
    	"cost" => "SearchColumnDoubleField[]",
    	"costBase" => "SearchColumnDoubleField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"estimatedWork" => "SearchColumnDoubleField[]",
    	"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
    	"grossProfit" => "SearchColumnDoubleField[]",
    	"grossProfitBase" => "SearchColumnDoubleField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"price" => "SearchColumnDoubleField[]",
    	"priceBase" => "SearchColumnDoubleField[]",
    	"resource" => "SearchColumnSelectField[]",
    	"resourceName" => "SearchColumnStringField[]",
    	"serviceItem" => "SearchColumnStringField[]",
    	"serviceItemDesc" => "SearchColumnStringField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"unitCost" => "SearchColumnDoubleField[]",
    	"unitCostBase" => "SearchColumnDoubleField[]",
    	"unitPrice" => "SearchColumnDoubleField[]",
    	"unitPriceBase" => "SearchColumnDoubleField[]",
    	"units" => "SearchColumnDoubleField[]",
    	"workCalendar" => "SearchColumnSelectField[]",
    );
}