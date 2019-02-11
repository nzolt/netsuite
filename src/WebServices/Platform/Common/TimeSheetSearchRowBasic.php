<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * TimeSheetSearchRowBasic
 */
class TimeSheetSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $approvalStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $employee;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $id;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $totalHours;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"approvalStatus" => "SearchColumnSelectField[]",
    	"employee" => "SearchColumnSelectField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"id" => "SearchColumnLongField[]",
    	"internalId" => "SearchColumnLongField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"totalHours" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TimeSheetSearchRowBasic
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