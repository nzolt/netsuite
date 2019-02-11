<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ManufacturingCostTemplateSearchRowBasic
 */
class ManufacturingCostTemplateSearchRowBasic extends SearchRowBasic {

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
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memo;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"item" => "SearchColumnSelectField[]",
    	"memo" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ManufacturingCostTemplateSearchRowBasic
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