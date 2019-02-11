<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * SupportCaseSearchRowBasic
 */
class SupportCaseSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $assigned;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $awaitingReply;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $category;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $company;

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
     * @var SearchColumnEnumSelectField[]
     */
    public $customerStage;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $escalatee;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $helpDesk;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $inboundEmail;

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
     * @var SearchColumnSelectField[]
     */
    public $issue;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $issueNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastMessageDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastReopenedDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $locked;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $module;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $origin;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $priority;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $product;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $profile;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serialNumber;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $stage;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

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
    	"assigned" => "SearchColumnSelectField[]",
    	"awaitingReply" => "SearchColumnBooleanField[]",
    	"caseNumber" => "SearchColumnStringField[]",
    	"category" => "SearchColumnSelectField[]",
    	"company" => "SearchColumnSelectField[]",
    	"contact" => "SearchColumnSelectField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"customerStage" => "SearchColumnEnumSelectField[]",
    	"email" => "SearchColumnStringField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"escalatee" => "SearchColumnSelectField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"helpDesk" => "SearchColumnBooleanField[]",
    	"inboundEmail" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"issue" => "SearchColumnSelectField[]",
    	"issueNumber" => "SearchColumnStringField[]",
    	"item" => "SearchColumnSelectField[]",
    	"lastMessageDate" => "SearchColumnDateField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"lastReopenedDate" => "SearchColumnDateField[]",
    	"locked" => "SearchColumnBooleanField[]",
    	"module" => "SearchColumnSelectField[]",
    	"origin" => "SearchColumnSelectField[]",
    	"priority" => "SearchColumnSelectField[]",
    	"product" => "SearchColumnSelectField[]",
    	"profile" => "SearchColumnSelectField[]",
    	"serialNumber" => "SearchColumnStringField[]",
    	"stage" => "SearchColumnEnumSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"status" => "SearchColumnSelectField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return SupportCaseSearchRowBasic
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