<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * PhoneCallSearchRowBasic
 */
class PhoneCallSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accessLevel;

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
    public $endDate;

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
    public $owner;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phone;

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
     * @var SearchColumnDateField[]
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
    	"accessLevel" => "SearchColumnStringField[]",
    	"assigned" => "SearchColumnSelectField[]",
    	"company" => "SearchColumnSelectField[]",
    	"completedDate" => "SearchColumnDateField[]",
    	"contact" => "SearchColumnSelectField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"markdone" => "SearchColumnStringField[]",
    	"message" => "SearchColumnStringField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"priority" => "SearchColumnEnumSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"startTime" => "SearchColumnDateField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"transaction" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return PhoneCallSearchRowBasic
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