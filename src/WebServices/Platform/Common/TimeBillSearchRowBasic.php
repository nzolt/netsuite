<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * TimeBillSearchRowBasic
 */
class TimeBillSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $break;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $customer;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $date;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $durationDecimal;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $employee;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endTime;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $hours;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isBillable;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isExempt;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isProductive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isUtilized;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModified;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memo;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $paidExternally;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $payItem;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $payrollDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startTime;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $supervisorApproval;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $temporaryLocalJurisdiction;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $temporaryStateJurisdiction;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"break" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"customer" => "SearchColumnSelectField[]",
    	"date" => "SearchColumnDateField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"department" => "SearchColumnSelectField[]",
    	"durationDecimal" => "SearchColumnDoubleField[]",
    	"employee" => "SearchColumnSelectField[]",
    	"endTime" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"hours" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isBillable" => "SearchColumnBooleanField[]",
    	"isExempt" => "SearchColumnBooleanField[]",
    	"isProductive" => "SearchColumnBooleanField[]",
    	"isUtilized" => "SearchColumnBooleanField[]",
    	"item" => "SearchColumnStringField[]",
    	"lastModified" => "SearchColumnDateField[]",
    	"location" => "SearchColumnSelectField[]",
    	"memo" => "SearchColumnStringField[]",
    	"paidExternally" => "SearchColumnBooleanField[]",
    	"payItem" => "SearchColumnSelectField[]",
    	"payrollDate" => "SearchColumnDateField[]",
    	"rate" => "SearchColumnDoubleField[]",
    	"startTime" => "SearchColumnDateField[]",
    	"status" => "SearchColumnStringField[]",
    	"subsidiary" => "SearchColumnStringField[]",
    	"supervisorApproval" => "SearchColumnBooleanField[]",
    	"temporaryLocalJurisdiction" => "SearchColumnStringField[]",
    	"temporaryStateJurisdiction" => "SearchColumnStringField[]",
    	"type" => "SearchColumnEnumSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TimeBillSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}