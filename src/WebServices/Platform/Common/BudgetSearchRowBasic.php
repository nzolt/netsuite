<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * BudgetSearchRowBasic
 */
class BudgetSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $account;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $category;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $classnohierarchy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $customer;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $departmentnohierarchy;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $global;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $locationnohierarchy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $subsidiarynohierarchy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $year;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $year2;

    static $paramtypesmap = array(
    	"account" => "SearchColumnStringField[]",
    	"amount" => "SearchColumnDoubleField[]",
    	"category" => "SearchColumnStringField[]",
    	"class" => "SearchColumnStringField[]",
    	"classnohierarchy" => "SearchColumnStringField[]",
    	"currency" => "SearchColumnStringField[]",
    	"customer" => "SearchColumnStringField[]",
    	"department" => "SearchColumnStringField[]",
    	"departmentnohierarchy" => "SearchColumnStringField[]",
    	"global" => "SearchColumnBooleanField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"item" => "SearchColumnStringField[]",
    	"location" => "SearchColumnStringField[]",
    	"locationnohierarchy" => "SearchColumnStringField[]",
    	"subsidiary" => "SearchColumnStringField[]",
    	"subsidiarynohierarchy" => "SearchColumnStringField[]",
    	"year" => "SearchColumnStringField[]",
    	"year2" => "SearchColumnStringField[]",
    );
}