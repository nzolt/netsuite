<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * LocationSearchRowBasic
 */
class LocationSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;

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
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isOffice;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $makeInventoryAvailable;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $makeInventoryAvailableStore;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $nameNoHierarchy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $state;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $tranPrefix;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $zip;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"address1" => "SearchColumnStringField[]",
    	"address2" => "SearchColumnStringField[]",
    	"address3" => "SearchColumnStringField[]",
    	"city" => "SearchColumnStringField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isOffice" => "SearchColumnBooleanField[]",
    	"makeInventoryAvailable" => "SearchColumnBooleanField[]",
    	"makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
    	"name" => "SearchColumnStringField[]",
    	"nameNoHierarchy" => "SearchColumnStringField[]",
    	"phone" => "SearchColumnStringField[]",
    	"state" => "SearchColumnStringField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"tranPrefix" => "SearchColumnStringField[]",
    	"zip" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return LocationSearchRowBasic
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