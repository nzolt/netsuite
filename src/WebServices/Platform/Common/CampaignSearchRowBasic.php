<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * CampaignSearchRowBasic
 */
class CampaignSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $audience;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $baseCost;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $campaignId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $category;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $channel;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $cost;

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
     * @var SearchColumnStringField[]
     */
    public $event;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $executedDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $expectedRevenue;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $family;

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
    public $isSalesCampaign;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $keyword;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $managerRole;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $offer;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $promoCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $recipient;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $response;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $responseCategory;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $responseCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $responseDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $responseNotes;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $revenue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $roi;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $scheduledDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $searchEngine;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subscription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $url;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $vertical;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"audience" => "SearchColumnSelectField[]",
    	"baseCost" => "SearchColumnDoubleField[]",
    	"campaignId" => "SearchColumnStringField[]",
    	"category" => "SearchColumnSelectField[]",
    	"channel" => "SearchColumnSelectField[]",
    	"cost" => "SearchColumnDoubleField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"event" => "SearchColumnStringField[]",
    	"executedDate" => "SearchColumnDateField[]",
    	"expectedRevenue" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"family" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isSalesCampaign" => "SearchColumnBooleanField[]",
    	"item" => "SearchColumnSelectField[]",
    	"keyword" => "SearchColumnStringField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"managerRole" => "SearchColumnSelectField[]",
    	"message" => "SearchColumnStringField[]",
    	"offer" => "SearchColumnSelectField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"promoCode" => "SearchColumnStringField[]",
    	"recipient" => "SearchColumnSelectField[]",
    	"response" => "SearchColumnEnumSelectField[]",
    	"responseCategory" => "SearchColumnEnumSelectField[]",
    	"responseCode" => "SearchColumnLongField[]",
    	"responseDate" => "SearchColumnDateField[]",
    	"responseNotes" => "SearchColumnStringField[]",
    	"revenue" => "SearchColumnDoubleField[]",
    	"roi" => "SearchColumnDoubleField[]",
    	"scheduledDate" => "SearchColumnDateField[]",
    	"searchEngine" => "SearchColumnSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"subscription" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"url" => "SearchColumnStringField[]",
    	"vertical" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CampaignSearchRowBasic
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