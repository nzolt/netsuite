<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;

/**
 * AccountingPeriodSearchRowBasic
 */
class AccountingPeriodSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allLocked;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allowNonGLChanges;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $apLocked;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $arLocked;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $closed;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $closedOnDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isAdjust;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isQuarter;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isYear;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $payrollLocked;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $periodName;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    static $paramtypesmap = array(
    	"allLocked" => "SearchColumnBooleanField[]",
    	"allowNonGLChanges" => "SearchColumnBooleanField[]",
    	"apLocked" => "SearchColumnBooleanField[]",
    	"arLocked" => "SearchColumnBooleanField[]",
    	"closed" => "SearchColumnBooleanField[]",
    	"closedOnDate" => "SearchColumnDateField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isAdjust" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isQuarter" => "SearchColumnBooleanField[]",
    	"isYear" => "SearchColumnBooleanField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"payrollLocked" => "SearchColumnBooleanField[]",
    	"periodName" => "SearchColumnStringField[]",
    	"startDate" => "SearchColumnDateField[]",
    );
}