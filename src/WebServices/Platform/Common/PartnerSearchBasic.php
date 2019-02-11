<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * PartnerSearchBasic
 */
class PartnerSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressee;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressLabel;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressPhone;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $assignTasks;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $attention;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAddress;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $comments;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $commissionPlan;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $country;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $county;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $eligibleForCommission;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $emailPreference;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $entityId;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $fax;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $firstName;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $giveAccess;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $group;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $hasDuplicates;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $image;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isDefaultBilling;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isDefaultShipping;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPerson;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $language;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $lastName;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $level;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $middleName;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $otherRelationships;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $partnerCode;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $permission;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phone;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phoneticName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $promoCode;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $salutation;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipAddress;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $URL;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $zipCode;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"address" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"addressLabel" => "SearchStringField",
    	"addressPhone" => "SearchStringField",
    	"assignTasks" => "SearchBooleanField",
    	"attention" => "SearchStringField",
    	"billAddress" => "SearchStringField",
    	"category" => "SearchMultiSelectField",
    	"city" => "SearchStringField",
    	"class" => "SearchMultiSelectField",
    	"comments" => "SearchStringField",
    	"commissionPlan" => "SearchMultiSelectField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"dateCreated" => "SearchDateField",
    	"department" => "SearchMultiSelectField",
    	"eligibleForCommission" => "SearchBooleanField",
    	"email" => "SearchStringField",
    	"emailPreference" => "SearchEnumMultiSelectField",
    	"entityId" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"firstName" => "SearchStringField",
    	"giveAccess" => "SearchBooleanField",
    	"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
    	"group" => "SearchMultiSelectField",
    	"hasDuplicates" => "SearchBooleanField",
    	"image" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDefaultBilling" => "SearchBooleanField",
    	"isDefaultShipping" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isPerson" => "SearchBooleanField",
    	"language" => "SearchEnumMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastName" => "SearchStringField",
    	"level" => "SearchEnumMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"middleName" => "SearchStringField",
    	"otherRelationships" => "SearchEnumMultiSelectField",
    	"parent" => "SearchMultiSelectField",
    	"partnerCode" => "SearchStringField",
    	"permission" => "SearchEnumMultiSelectField",
    	"phone" => "SearchStringField",
    	"phoneticName" => "SearchStringField",
    	"promoCode" => "SearchMultiSelectField",
    	"salutation" => "SearchStringField",
    	"shipAddress" => "SearchStringField",
    	"state" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"URL" => "SearchStringField",
    	"zipCode" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return PartnerSearchBasic
     */
    public function setAddress(SearchStringField $address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return SearchStringField
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set addressee
     *
     * @param SearchStringField $addressee
     * @return PartnerSearchBasic
     */
    public function setAddressee(SearchStringField $addressee) {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * Get addressee
     *
     * @return SearchStringField
     */
    public function getAddressee() {
        return $this->addressee;
    }


    /**
     * Set addressLabel
     *
     * @param SearchStringField $addressLabel
     * @return PartnerSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel) {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * Get addressLabel
     *
     * @return SearchStringField
     */
    public function getAddressLabel() {
        return $this->addressLabel;
    }


    /**
     * Set addressPhone
     *
     * @param SearchStringField $addressPhone
     * @return PartnerSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone) {
        $this->addressPhone = $addressPhone;
        return $this;
    }

    /**
     * Get addressPhone
     *
     * @return SearchStringField
     */
    public function getAddressPhone() {
        return $this->addressPhone;
    }


    /**
     * Set assignTasks
     *
     * @param SearchBooleanField $assignTasks
     * @return PartnerSearchBasic
     */
    public function setAssignTasks(SearchBooleanField $assignTasks) {
        $this->assignTasks = $assignTasks;
        return $this;
    }

    /**
     * Get assignTasks
     *
     * @return SearchBooleanField
     */
    public function getAssignTasks() {
        return $this->assignTasks;
    }


    /**
     * Set attention
     *
     * @param SearchStringField $attention
     * @return PartnerSearchBasic
     */
    public function setAttention(SearchStringField $attention) {
        $this->attention = $attention;
        return $this;
    }

    /**
     * Get attention
     *
     * @return SearchStringField
     */
    public function getAttention() {
        return $this->attention;
    }


    /**
     * Set billAddress
     *
     * @param SearchStringField $billAddress
     * @return PartnerSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress) {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * Get billAddress
     *
     * @return SearchStringField
     */
    public function getBillAddress() {
        return $this->billAddress;
    }


    /**
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return PartnerSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return PartnerSearchBasic
     */
    public function setCity(SearchStringField $city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return SearchStringField
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return PartnerSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set comments
     *
     * @param SearchStringField $comments
     * @return PartnerSearchBasic
     */
    public function setComments(SearchStringField $comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return SearchStringField
     */
    public function getComments() {
        return $this->comments;
    }


    /**
     * Set commissionPlan
     *
     * @param SearchMultiSelectField $commissionPlan
     * @return PartnerSearchBasic
     */
    public function setCommissionPlan(SearchMultiSelectField $commissionPlan) {
        $this->commissionPlan = $commissionPlan;
        return $this;
    }

    /**
     * Get commissionPlan
     *
     * @return SearchMultiSelectField
     */
    public function getCommissionPlan() {
        return $this->commissionPlan;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return PartnerSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set county
     *
     * @param SearchStringField $county
     * @return PartnerSearchBasic
     */
    public function setCounty(SearchStringField $county) {
        $this->county = $county;
        return $this;
    }

    /**
     * Get county
     *
     * @return SearchStringField
     */
    public function getCounty() {
        return $this->county;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return PartnerSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated) {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return SearchDateField
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return PartnerSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set eligibleForCommission
     *
     * @param SearchBooleanField $eligibleForCommission
     * @return PartnerSearchBasic
     */
    public function setEligibleForCommission(SearchBooleanField $eligibleForCommission) {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * Get eligibleForCommission
     *
     * @return SearchBooleanField
     */
    public function getEligibleForCommission() {
        return $this->eligibleForCommission;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return PartnerSearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set emailPreference
     *
     * @param SearchEnumMultiSelectField $emailPreference
     * @return PartnerSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference) {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * Get emailPreference
     *
     * @return SearchEnumMultiSelectField
     */
    public function getEmailPreference() {
        return $this->emailPreference;
    }


    /**
     * Set entityId
     *
     * @param SearchStringField $entityId
     * @return PartnerSearchBasic
     */
    public function setEntityId(SearchStringField $entityId) {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Get entityId
     *
     * @return SearchStringField
     */
    public function getEntityId() {
        return $this->entityId;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return PartnerSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return PartnerSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set fax
     *
     * @param SearchStringField $fax
     * @return PartnerSearchBasic
     */
    public function setFax(SearchStringField $fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return SearchStringField
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set firstName
     *
     * @param SearchStringField $firstName
     * @return PartnerSearchBasic
     */
    public function setFirstName(SearchStringField $firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return SearchStringField
     */
    public function getFirstName() {
        return $this->firstName;
    }


    /**
     * Set giveAccess
     *
     * @param SearchBooleanField $giveAccess
     * @return PartnerSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess) {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * Get giveAccess
     *
     * @return SearchBooleanField
     */
    public function getGiveAccess() {
        return $this->giveAccess;
    }


    /**
     * Set globalSubscriptionStatus
     *
     * @param SearchEnumMultiSelectField $globalSubscriptionStatus
     * @return PartnerSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus) {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * Get globalSubscriptionStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGlobalSubscriptionStatus() {
        return $this->globalSubscriptionStatus;
    }


    /**
     * Set group
     *
     * @param SearchMultiSelectField $group
     * @return PartnerSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return SearchMultiSelectField
     */
    public function getGroup() {
        return $this->group;
    }


    /**
     * Set hasDuplicates
     *
     * @param SearchBooleanField $hasDuplicates
     * @return PartnerSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates) {
        $this->hasDuplicates = $hasDuplicates;
        return $this;
    }

    /**
     * Get hasDuplicates
     *
     * @return SearchBooleanField
     */
    public function getHasDuplicates() {
        return $this->hasDuplicates;
    }


    /**
     * Set image
     *
     * @param SearchStringField $image
     * @return PartnerSearchBasic
     */
    public function setImage(SearchStringField $image) {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return SearchStringField
     */
    public function getImage() {
        return $this->image;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return PartnerSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return PartnerSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isDefaultBilling
     *
     * @param SearchBooleanField $isDefaultBilling
     * @return PartnerSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling) {
        $this->isDefaultBilling = $isDefaultBilling;
        return $this;
    }

    /**
     * Get isDefaultBilling
     *
     * @return SearchBooleanField
     */
    public function getIsDefaultBilling() {
        return $this->isDefaultBilling;
    }


    /**
     * Set isDefaultShipping
     *
     * @param SearchBooleanField $isDefaultShipping
     * @return PartnerSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping) {
        $this->isDefaultShipping = $isDefaultShipping;
        return $this;
    }

    /**
     * Get isDefaultShipping
     *
     * @return SearchBooleanField
     */
    public function getIsDefaultShipping() {
        return $this->isDefaultShipping;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return PartnerSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isPerson
     *
     * @param SearchBooleanField $isPerson
     * @return PartnerSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson) {
        $this->isPerson = $isPerson;
        return $this;
    }

    /**
     * Get isPerson
     *
     * @return SearchBooleanField
     */
    public function getIsPerson() {
        return $this->isPerson;
    }


    /**
     * Set language
     *
     * @param SearchEnumMultiSelectField $language
     * @return PartnerSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLanguage() {
        return $this->language;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return PartnerSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set lastName
     *
     * @param SearchStringField $lastName
     * @return PartnerSearchBasic
     */
    public function setLastName(SearchStringField $lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return SearchStringField
     */
    public function getLastName() {
        return $this->lastName;
    }


    /**
     * Set level
     *
     * @param SearchEnumMultiSelectField $level
     * @return PartnerSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level) {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLevel() {
        return $this->level;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return PartnerSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set middleName
     *
     * @param SearchStringField $middleName
     * @return PartnerSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName) {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Get middleName
     *
     * @return SearchStringField
     */
    public function getMiddleName() {
        return $this->middleName;
    }


    /**
     * Set otherRelationships
     *
     * @param SearchEnumMultiSelectField $otherRelationships
     * @return PartnerSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships) {
        $this->otherRelationships = $otherRelationships;
        return $this;
    }

    /**
     * Get otherRelationships
     *
     * @return SearchEnumMultiSelectField
     */
    public function getOtherRelationships() {
        return $this->otherRelationships;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return PartnerSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set partnerCode
     *
     * @param SearchStringField $partnerCode
     * @return PartnerSearchBasic
     */
    public function setPartnerCode(SearchStringField $partnerCode) {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * Get partnerCode
     *
     * @return SearchStringField
     */
    public function getPartnerCode() {
        return $this->partnerCode;
    }


    /**
     * Set permission
     *
     * @param SearchEnumMultiSelectField $permission
     * @return PartnerSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission) {
        $this->permission = $permission;
        return $this;
    }

    /**
     * Get permission
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPermission() {
        return $this->permission;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return PartnerSearchBasic
     */
    public function setPhone(SearchStringField $phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return SearchStringField
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set phoneticName
     *
     * @param SearchStringField $phoneticName
     * @return PartnerSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName) {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * Get phoneticName
     *
     * @return SearchStringField
     */
    public function getPhoneticName() {
        return $this->phoneticName;
    }


    /**
     * Set promoCode
     *
     * @param SearchMultiSelectField $promoCode
     * @return PartnerSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode) {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * Get promoCode
     *
     * @return SearchMultiSelectField
     */
    public function getPromoCode() {
        return $this->promoCode;
    }


    /**
     * Set salutation
     *
     * @param SearchStringField $salutation
     * @return PartnerSearchBasic
     */
    public function setSalutation(SearchStringField $salutation) {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * Get salutation
     *
     * @return SearchStringField
     */
    public function getSalutation() {
        return $this->salutation;
    }


    /**
     * Set shipAddress
     *
     * @param SearchStringField $shipAddress
     * @return PartnerSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress) {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * Get shipAddress
     *
     * @return SearchStringField
     */
    public function getShipAddress() {
        return $this->shipAddress;
    }


    /**
     * Set state
     *
     * @param SearchStringField $state
     * @return PartnerSearchBasic
     */
    public function setState(SearchStringField $state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return SearchStringField
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return PartnerSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return PartnerSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set URL
     *
     * @param SearchStringField $URL
     * @return PartnerSearchBasic
     */
    public function setURL(SearchStringField $URL) {
        $this->URL = $URL;
        return $this;
    }

    /**
     * Get URL
     *
     * @return SearchStringField
     */
    public function getURL() {
        return $this->URL;
    }


    /**
     * Set zipCode
     *
     * @param SearchStringField $zipCode
     * @return PartnerSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode) {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return SearchStringField
     */
    public function getZipCode() {
        return $this->zipCode;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return PartnerSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}