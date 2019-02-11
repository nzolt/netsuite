<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ProjectTaskSearchRowBasic
 */
class ProjectTaskSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualWork;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $company;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $constraintType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $contact;

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
     * @var SearchColumnDoubleField[]
     */
    public $costBaseBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costBaseVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costVariancePercent;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $createdDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDateBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $endDateVariance;

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
    public $estimatedWorkVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkVariancePercent;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $finishByDate;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $id;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isMilestone;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSummaryTask;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $nonBillableTask;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentWorkComplete;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $predecessor;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $predecessorLagDays;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $predecessors;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $predecessorType;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $priority;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $remainingWork;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDateBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $startDateVariance;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $successor;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $successorType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"actualWork" => "SearchColumnDoubleField[]",
    	"company" => "SearchColumnSelectField[]",
    	"constraintType" => "SearchColumnEnumSelectField[]",
    	"contact" => "SearchColumnSelectField[]",
    	"cost" => "SearchColumnDoubleField[]",
    	"costBase" => "SearchColumnDoubleField[]",
    	"costBaseBaseline" => "SearchColumnDoubleField[]",
    	"costBaseline" => "SearchColumnDoubleField[]",
    	"costBaseVariance" => "SearchColumnDoubleField[]",
    	"costVariance" => "SearchColumnDoubleField[]",
    	"costVariancePercent" => "SearchColumnDoubleField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"endDateBaseline" => "SearchColumnDateField[]",
    	"endDateVariance" => "SearchColumnDoubleField[]",
    	"estimatedWork" => "SearchColumnDoubleField[]",
    	"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
    	"estimatedWorkVariance" => "SearchColumnDoubleField[]",
    	"estimatedWorkVariancePercent" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"finishByDate" => "SearchColumnDateField[]",
    	"id" => "SearchColumnLongField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isMilestone" => "SearchColumnBooleanField[]",
    	"isSummaryTask" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"message" => "SearchColumnStringField[]",
    	"nonBillableTask" => "SearchColumnBooleanField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"percentWorkComplete" => "SearchColumnDoubleField[]",
    	"predecessor" => "SearchColumnSelectField[]",
    	"predecessorLagDays" => "SearchColumnDoubleField[]",
    	"predecessors" => "SearchColumnStringField[]",
    	"predecessorType" => "SearchColumnStringField[]",
    	"priority" => "SearchColumnEnumSelectField[]",
    	"remainingWork" => "SearchColumnDoubleField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"startDateBaseline" => "SearchColumnDateField[]",
    	"startDateVariance" => "SearchColumnDoubleField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"successor" => "SearchColumnSelectField[]",
    	"successorType" => "SearchColumnStringField[]",
    	"title" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ProjectTaskSearchRowBasic
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