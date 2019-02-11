<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * PartnerSearchRowBasic
 */
class PartnerSearchRowBasic extends SearchRowBasic {

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
     * @var SearchColumnBooleanField[]
     */
    public $assignTasks;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $attention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress;

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
    public $category;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $comments;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $companyName;

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
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $eligibleForCommission;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $emailPreference;

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
     * @var SearchColumnStringField[]
     */
    public $firstName;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $giveAccess;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $hasDuplicates;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $homePhone;

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
     * @var SearchColumnBooleanField[]
     */
    public $isPerson;

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
     * @var SearchColumnStringField[]
     */
    public $lastName;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $level;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $middleName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $mobilePhone;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $partnerCode;

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
    public $promoCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $salutation;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress;

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
    	"assignTasks" => "SearchColumnBooleanField[]",
    	"attention" => "SearchColumnStringField[]",
    	"billAddress" => "SearchColumnStringField[]",
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
    	"category" => "SearchColumnStringField[]",
    	"city" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"comments" => "SearchColumnStringField[]",
    	"companyName" => "SearchColumnStringField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"countryCode" => "SearchColumnStringField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"department" => "SearchColumnSelectField[]",
    	"eligibleForCommission" => "SearchColumnBooleanField[]",
    	"email" => "SearchColumnStringField[]",
    	"emailPreference" => "SearchColumnEnumSelectField[]",
    	"entityId" => "SearchColumnStringField[]",
    	"entityNumber" => "SearchColumnLongField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"fax" => "SearchColumnStringField[]",
    	"firstName" => "SearchColumnStringField[]",
    	"giveAccess" => "SearchColumnBooleanField[]",
    	"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
    	"hasDuplicates" => "SearchColumnBooleanField[]",
    	"homePhone" => "SearchColumnStringField[]",
    	"image" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isDefaultBilling" => "SearchColumnBooleanField[]",
    	"isDefaultShipping" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isPerson" => "SearchColumnBooleanField[]",
    	"language" => "SearchColumnEnumSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"lastName" => "SearchColumnStringField[]",
    	"level" => "SearchColumnEnumSelectField[]",
    	"location" => "SearchColumnSelectField[]",
    	"middleName" => "SearchColumnStringField[]",
    	"mobilePhone" => "SearchColumnStringField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"partnerCode" => "SearchColumnStringField[]",
    	"permission" => "SearchColumnEnumSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"phoneticName" => "SearchColumnStringField[]",
    	"promoCode" => "SearchColumnStringField[]",
    	"salutation" => "SearchColumnStringField[]",
    	"shipAddress" => "SearchColumnStringField[]",
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
    	"title" => "SearchColumnStringField[]",
    	"url" => "SearchColumnStringField[]",
    	"zipCode" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return PartnerSearchRowBasic
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