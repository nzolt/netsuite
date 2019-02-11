<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ResourceAllocationSearchRowBasic
 */
class ResourceAllocationSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $allocationType;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $allocationUnit;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $approvalStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $project;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $customer;

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
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $nextApprover;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $notes;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $numberHours;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentOfTime;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $requestedBy;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $resource;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"allocationType" => "SearchColumnSelectField[]",
    	"allocationUnit" => "SearchColumnEnumSelectField[]",
    	"approvalStatus" => "SearchColumnEnumSelectField[]",
    	"project" => "SearchColumnSelectField[]",
    	"customer" => "SearchColumnSelectField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"nextApprover" => "SearchColumnSelectField[]",
    	"notes" => "SearchColumnStringField[]",
    	"numberHours" => "SearchColumnDoubleField[]",
    	"percentOfTime" => "SearchColumnDoubleField[]",
    	"requestedBy" => "SearchColumnSelectField[]",
    	"resource" => "SearchColumnSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ResourceAllocationSearchRowBasic
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