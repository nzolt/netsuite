<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * BillingScheduleSearchRowBasic
 */
class BillingScheduleSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $applyToSubtotal;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $frequency;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $inArrears;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $initialAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $initialTerms;

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
     * @var SearchColumnBooleanField[]
     */
    public $isPublic;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $recurrenceCount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $recurrenceTerms;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $repeatEvery;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    static $paramtypesmap = array(
    	"applyToSubtotal" => "SearchColumnBooleanField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"frequency" => "SearchColumnEnumSelectField[]",
    	"inArrears" => "SearchColumnBooleanField[]",
    	"initialAmount" => "SearchColumnStringField[]",
    	"initialTerms" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isPublic" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    	"recurrenceCount" => "SearchColumnLongField[]",
    	"recurrenceTerms" => "SearchColumnStringField[]",
    	"repeatEvery" => "SearchColumnLongField[]",
    	"type" => "SearchColumnEnumSelectField[]",
    );
}