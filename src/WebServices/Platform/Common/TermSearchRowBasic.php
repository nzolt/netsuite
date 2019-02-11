<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * TermSearchRowBasic
 */
class TermSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $dateDriven;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dayDiscountExpires;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dayOfMonthNetDue;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysUntilExpiry;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysUntilNetDue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountPercent;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountPercentDateDriven;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dueNextMonthIfWithinDays;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $preferred;

    static $paramtypesmap = array(
    	"dateDriven" => "SearchColumnBooleanField[]",
    	"dayDiscountExpires" => "SearchColumnLongField[]",
    	"dayOfMonthNetDue" => "SearchColumnLongField[]",
    	"daysUntilExpiry" => "SearchColumnLongField[]",
    	"daysUntilNetDue" => "SearchColumnLongField[]",
    	"discountPercent" => "SearchColumnDoubleField[]",
    	"discountPercentDateDriven" => "SearchColumnDoubleField[]",
    	"dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    	"preferred" => "SearchColumnBooleanField[]",
    );
}