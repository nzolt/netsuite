<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * SolutionSearchRowBasic
 */
class SolutionSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $assigned;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $caseCount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $createdDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $displayOnline;

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
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

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
     * @var SearchColumnStringField[]
     */
    public $previewref;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $solutionCode;

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
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"assigned" => "SearchColumnSelectField[]",
    	"caseCount" => "SearchColumnLongField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"description" => "SearchColumnStringField[]",
    	"displayOnline" => "SearchColumnBooleanField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"message" => "SearchColumnStringField[]",
    	"previewref" => "SearchColumnStringField[]",
    	"solutionCode" => "SearchColumnStringField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return SolutionSearchRowBasic
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