<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * CustomRecordSearchRowBasic
 */
class CustomRecordSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var RecordRef
     */
    public $recType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altName;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $created;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

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
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModified;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $lastModifiedBy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $owner;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"recType" => "RecordRef",
    	"altName" => "SearchColumnStringField[]",
    	"availableOffline" => "SearchColumnBooleanField[]",
    	"created" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"id" => "SearchColumnLongField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"lastModified" => "SearchColumnDateField[]",
    	"lastModifiedBy" => "SearchColumnSelectField[]",
    	"name" => "SearchColumnStringField[]",
    	"owner" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CustomRecordSearchRowBasic
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