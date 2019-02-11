<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * CalendarEventSearchRowBasic
 */
class CalendarEventSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $attendee;

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
     * @var SearchColumnStringField[]
     */
    public $endTime;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $instanceEnd;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $instanceStart;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $location;

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
    public $organizer;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $recurrence;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $resource;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $response;

    /**
     * @access public
     * @var SearchColumnStringField[]
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
    	"attendee" => "SearchColumnSelectField[]",
    	"company" => "SearchColumnSelectField[]",
    	"completedDate" => "SearchColumnDateField[]",
    	"contact" => "SearchColumnSelectField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"endTime" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"instanceEnd" => "SearchColumnDateField[]",
    	"instanceStart" => "SearchColumnDateField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"location" => "SearchColumnStringField[]",
    	"markdone" => "SearchColumnStringField[]",
    	"message" => "SearchColumnStringField[]",
    	"organizer" => "SearchColumnSelectField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"recurrence" => "SearchColumnStringField[]",
    	"resource" => "SearchColumnSelectField[]",
    	"response" => "SearchColumnEnumSelectField[]",
    	"startDate" => "SearchColumnStringField[]",
    	"startTime" => "SearchColumnStringField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"transaction" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CalendarEventSearchRowBasic
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