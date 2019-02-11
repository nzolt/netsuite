<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * TaskSearchRowBasic
 */
class TaskSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accessLevel;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualTime;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $assigned;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $company;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $completedDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $contact;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $createdDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dueDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;

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
    public $isJobSummaryTask;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isJobTask;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $markdone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $milestone;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $order;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentComplete;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentTimeComplete;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $priority;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $startTime;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $timeRemaining;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $transaction;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accessLevel" => "SearchColumnStringField[]",
    	"actualTime" => "SearchColumnDoubleField[]",
    	"assigned" => "SearchColumnSelectField[]",
    	"company" => "SearchColumnSelectField[]",
    	"completedDate" => "SearchColumnDateField[]",
    	"contact" => "SearchColumnSelectField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"dueDate" => "SearchColumnDateField[]",
    	"estimatedTime" => "SearchColumnDoubleField[]",
    	"estimatedTimeOverride" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isJobSummaryTask" => "SearchColumnBooleanField[]",
    	"isJobTask" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"markdone" => "SearchColumnStringField[]",
    	"message" => "SearchColumnStringField[]",
    	"milestone" => "SearchColumnSelectField[]",
    	"order" => "SearchColumnLongField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"percentComplete" => "SearchColumnDoubleField[]",
    	"percentTimeComplete" => "SearchColumnDoubleField[]",
    	"priority" => "SearchColumnEnumSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"startTime" => "SearchColumnStringField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"timeRemaining" => "SearchColumnDoubleField[]",
    	"title" => "SearchColumnStringField[]",
    	"transaction" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TaskSearchRowBasic
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