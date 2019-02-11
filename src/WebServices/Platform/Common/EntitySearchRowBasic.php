<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * EntitySearchRowBasic
 */
class EntitySearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address;

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
    public $addressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressInternalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressLabel;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $attention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billZipCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $comments;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $countryCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $entityId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $entityNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fax;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $image;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultBilling;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultShipping;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $language;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $level;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phoneticName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipZip;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $state;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subscription;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $subscriptionDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $subscriptionStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $zipCode;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"address" => "SearchColumnStringField[]",
    	"address1" => "SearchColumnStringField[]",
    	"address2" => "SearchColumnStringField[]",
    	"address3" => "SearchColumnStringField[]",
    	"addressee" => "SearchColumnStringField[]",
    	"addressInternalId" => "SearchColumnStringField[]",
    	"addressLabel" => "SearchColumnStringField[]",
    	"addressPhone" => "SearchColumnStringField[]",
    	"altEmail" => "SearchColumnStringField[]",
    	"altName" => "SearchColumnStringField[]",
    	"altPhone" => "SearchColumnStringField[]",
    	"attention" => "SearchColumnStringField[]",
    	"billAddress1" => "SearchColumnStringField[]",
    	"billAddress2" => "SearchColumnStringField[]",
    	"billAddress3" => "SearchColumnStringField[]",
    	"billAddressee" => "SearchColumnStringField[]",
    	"billAttention" => "SearchColumnStringField[]",
    	"billCity" => "SearchColumnStringField[]",
    	"billCountry" => "SearchColumnEnumSelectField[]",
    	"billCountryCode" => "SearchColumnStringField[]",
    	"billPhone" => "SearchColumnStringField[]",
    	"billState" => "SearchColumnStringField[]",
    	"billZipCode" => "SearchColumnStringField[]",
    	"city" => "SearchColumnStringField[]",
    	"comments" => "SearchColumnStringField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"countryCode" => "SearchColumnStringField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"email" => "SearchColumnStringField[]",
    	"entityId" => "SearchColumnStringField[]",
    	"entityNumber" => "SearchColumnLongField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"fax" => "SearchColumnStringField[]",
    	"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
    	"image" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isDefaultBilling" => "SearchColumnBooleanField[]",
    	"isDefaultShipping" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"language" => "SearchColumnEnumSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"level" => "SearchColumnEnumSelectField[]",
    	"permission" => "SearchColumnEnumSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"phoneticName" => "SearchColumnStringField[]",
    	"shipAddress1" => "SearchColumnStringField[]",
    	"shipAddress2" => "SearchColumnStringField[]",
    	"shipAddress3" => "SearchColumnStringField[]",
    	"shipAddressee" => "SearchColumnStringField[]",
    	"shipAttention" => "SearchColumnStringField[]",
    	"shipCity" => "SearchColumnStringField[]",
    	"shipCountry" => "SearchColumnEnumSelectField[]",
    	"shipCountryCode" => "SearchColumnStringField[]",
    	"shipPhone" => "SearchColumnStringField[]",
    	"shipState" => "SearchColumnStringField[]",
    	"shipZip" => "SearchColumnStringField[]",
    	"state" => "SearchColumnStringField[]",
    	"subscription" => "SearchColumnSelectField[]",
    	"subscriptionDate" => "SearchColumnDateField[]",
    	"subscriptionStatus" => "SearchColumnBooleanField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"type" => "SearchColumnEnumSelectField[]",
    	"zipCode" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return EntitySearchRowBasic
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