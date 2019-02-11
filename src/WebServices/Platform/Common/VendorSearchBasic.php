<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * VendorSearchBasic
 */
class VendorSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $accountNumber;

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
     * @var SearchStringField
     */
    protected $attention;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $balance;

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
     * @var SearchStringField
     */
    protected $comments;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $contact;

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
     * @var SearchDoubleField
     */
    protected $creditLimit;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $currentExchangeRate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

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
     * @var SearchBooleanField
     */
    protected $emailTransactions;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $entityId;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $expenseAccount;

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
     * @var SearchBooleanField
     */
    protected $faxTransactions;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $firstName;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxBalance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxUnbilledOrders;

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
    protected $is1099Eligible;

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
    protected $isJobResourceVend;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPerson;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $laborCost;

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
    protected $payablesAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pec;

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
     * @var SearchBooleanField
     */
    protected $printTransactions;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantityDiff;

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
    protected $taxIdNum;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unbilledOrders;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $url;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $vatRegNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workCalendar;

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
    	"accountNumber" => "SearchStringField",
    	"address" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"addressLabel" => "SearchStringField",
    	"addressPhone" => "SearchStringField",
    	"attention" => "SearchStringField",
    	"balance" => "SearchDoubleField",
    	"billAddress" => "SearchStringField",
    	"category" => "SearchMultiSelectField",
    	"city" => "SearchStringField",
    	"comments" => "SearchStringField",
    	"contact" => "SearchStringField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"creditLimit" => "SearchDoubleField",
    	"currency" => "SearchMultiSelectField",
    	"currentExchangeRate" => "SearchDoubleField",
    	"dateCreated" => "SearchDateField",
    	"eligibleForCommission" => "SearchBooleanField",
    	"email" => "SearchStringField",
    	"emailPreference" => "SearchEnumMultiSelectField",
    	"emailTransactions" => "SearchBooleanField",
    	"entityId" => "SearchStringField",
    	"expenseAccount" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"faxTransactions" => "SearchBooleanField",
    	"firstName" => "SearchStringField",
    	"fxBalance" => "SearchDoubleField",
    	"fxUnbilledOrders" => "SearchDoubleField",
    	"giveAccess" => "SearchBooleanField",
    	"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
    	"group" => "SearchMultiSelectField",
    	"hasDuplicates" => "SearchBooleanField",
    	"image" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"is1099Eligible" => "SearchBooleanField",
    	"isDefaultBilling" => "SearchBooleanField",
    	"isDefaultShipping" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isJobResourceVend" => "SearchBooleanField",
    	"isPerson" => "SearchBooleanField",
    	"laborCost" => "SearchDoubleField",
    	"language" => "SearchEnumMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastName" => "SearchStringField",
    	"level" => "SearchEnumMultiSelectField",
    	"middleName" => "SearchStringField",
    	"otherRelationships" => "SearchEnumMultiSelectField",
    	"payablesAccount" => "SearchMultiSelectField",
    	"pec" => "SearchStringField",
    	"permission" => "SearchEnumMultiSelectField",
    	"phone" => "SearchStringField",
    	"phoneticName" => "SearchStringField",
    	"printTransactions" => "SearchBooleanField",
    	"purchaseOrderAmount" => "SearchDoubleField",
    	"purchaseOrderQuantity" => "SearchDoubleField",
    	"purchaseOrderQuantityDiff" => "SearchDoubleField",
    	"receiptAmount" => "SearchDoubleField",
    	"receiptQuantity" => "SearchDoubleField",
    	"receiptQuantityDiff" => "SearchDoubleField",
    	"salutation" => "SearchStringField",
    	"shipAddress" => "SearchStringField",
    	"state" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"taxIdNum" => "SearchStringField",
    	"title" => "SearchStringField",
    	"unbilledOrders" => "SearchDoubleField",
    	"url" => "SearchStringField",
    	"vatRegNumber" => "SearchStringField",
    	"workCalendar" => "SearchMultiSelectField",
    	"zipCode" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set accountNumber
     *
     * @param SearchStringField $accountNumber
     * @return VendorSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber) {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return SearchStringField
     */
    public function getAccountNumber() {
        return $this->accountNumber;
    }


    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set attention
     *
     * @param SearchStringField $attention
     * @return VendorSearchBasic
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
     * Set balance
     *
     * @param SearchDoubleField $balance
     * @return VendorSearchBasic
     */
    public function setBalance(SearchDoubleField $balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return SearchDoubleField
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set billAddress
     *
     * @param SearchStringField $billAddress
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set comments
     *
     * @param SearchStringField $comments
     * @return VendorSearchBasic
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
     * Set contact
     *
     * @param SearchStringField $contact
     * @return VendorSearchBasic
     */
    public function setContact(SearchStringField $contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return SearchStringField
     */
    public function getContact() {
        return $this->contact;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set creditLimit
     *
     * @param SearchDoubleField $creditLimit
     * @return VendorSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit) {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return SearchDoubleField
     */
    public function getCreditLimit() {
        return $this->creditLimit;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return VendorSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set currentExchangeRate
     *
     * @param SearchDoubleField $currentExchangeRate
     * @return VendorSearchBasic
     */
    public function setCurrentExchangeRate(SearchDoubleField $currentExchangeRate) {
        $this->currentExchangeRate = $currentExchangeRate;
        return $this;
    }

    /**
     * Get currentExchangeRate
     *
     * @return SearchDoubleField
     */
    public function getCurrentExchangeRate() {
        return $this->currentExchangeRate;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return VendorSearchBasic
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
     * Set eligibleForCommission
     *
     * @param SearchBooleanField $eligibleForCommission
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set emailTransactions
     *
     * @param SearchBooleanField $emailTransactions
     * @return VendorSearchBasic
     */
    public function setEmailTransactions(SearchBooleanField $emailTransactions) {
        $this->emailTransactions = $emailTransactions;
        return $this;
    }

    /**
     * Get emailTransactions
     *
     * @return SearchBooleanField
     */
    public function getEmailTransactions() {
        return $this->emailTransactions;
    }


    /**
     * Set entityId
     *
     * @param SearchStringField $entityId
     * @return VendorSearchBasic
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
     * Set expenseAccount
     *
     * @param SearchMultiSelectField $expenseAccount
     * @return VendorSearchBasic
     */
    public function setExpenseAccount(SearchMultiSelectField $expenseAccount) {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * Get expenseAccount
     *
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount() {
        return $this->expenseAccount;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set faxTransactions
     *
     * @param SearchBooleanField $faxTransactions
     * @return VendorSearchBasic
     */
    public function setFaxTransactions(SearchBooleanField $faxTransactions) {
        $this->faxTransactions = $faxTransactions;
        return $this;
    }

    /**
     * Get faxTransactions
     *
     * @return SearchBooleanField
     */
    public function getFaxTransactions() {
        return $this->faxTransactions;
    }


    /**
     * Set firstName
     *
     * @param SearchStringField $firstName
     * @return VendorSearchBasic
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
     * Set fxBalance
     *
     * @param SearchDoubleField $fxBalance
     * @return VendorSearchBasic
     */
    public function setFxBalance(SearchDoubleField $fxBalance) {
        $this->fxBalance = $fxBalance;
        return $this;
    }

    /**
     * Get fxBalance
     *
     * @return SearchDoubleField
     */
    public function getFxBalance() {
        return $this->fxBalance;
    }


    /**
     * Set fxUnbilledOrders
     *
     * @param SearchDoubleField $fxUnbilledOrders
     * @return VendorSearchBasic
     */
    public function setFxUnbilledOrders(SearchDoubleField $fxUnbilledOrders) {
        $this->fxUnbilledOrders = $fxUnbilledOrders;
        return $this;
    }

    /**
     * Get fxUnbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getFxUnbilledOrders() {
        return $this->fxUnbilledOrders;
    }


    /**
     * Set giveAccess
     *
     * @param SearchBooleanField $giveAccess
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set is1099Eligible
     *
     * @param SearchBooleanField $is1099Eligible
     * @return VendorSearchBasic
     */
    public function setIs1099Eligible(SearchBooleanField $is1099Eligible) {
        $this->is1099Eligible = $is1099Eligible;
        return $this;
    }

    /**
     * Get is1099Eligible
     *
     * @return SearchBooleanField
     */
    public function getIs1099Eligible() {
        return $this->is1099Eligible;
    }


    /**
     * Set isDefaultBilling
     *
     * @param SearchBooleanField $isDefaultBilling
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set isJobResourceVend
     *
     * @param SearchBooleanField $isJobResourceVend
     * @return VendorSearchBasic
     */
    public function setIsJobResourceVend(SearchBooleanField $isJobResourceVend) {
        $this->isJobResourceVend = $isJobResourceVend;
        return $this;
    }

    /**
     * Get isJobResourceVend
     *
     * @return SearchBooleanField
     */
    public function getIsJobResourceVend() {
        return $this->isJobResourceVend;
    }


    /**
     * Set isPerson
     *
     * @param SearchBooleanField $isPerson
     * @return VendorSearchBasic
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
     * Set laborCost
     *
     * @param SearchDoubleField $laborCost
     * @return VendorSearchBasic
     */
    public function setLaborCost(SearchDoubleField $laborCost) {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * Get laborCost
     *
     * @return SearchDoubleField
     */
    public function getLaborCost() {
        return $this->laborCost;
    }


    /**
     * Set language
     *
     * @param SearchEnumMultiSelectField $language
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set middleName
     *
     * @param SearchStringField $middleName
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set payablesAccount
     *
     * @param SearchMultiSelectField $payablesAccount
     * @return VendorSearchBasic
     */
    public function setPayablesAccount(SearchMultiSelectField $payablesAccount) {
        $this->payablesAccount = $payablesAccount;
        return $this;
    }

    /**
     * Get payablesAccount
     *
     * @return SearchMultiSelectField
     */
    public function getPayablesAccount() {
        return $this->payablesAccount;
    }


    /**
     * Set pec
     *
     * @param SearchStringField $pec
     * @return VendorSearchBasic
     */
    public function setPec(SearchStringField $pec) {
        $this->pec = $pec;
        return $this;
    }

    /**
     * Get pec
     *
     * @return SearchStringField
     */
    public function getPec() {
        return $this->pec;
    }


    /**
     * Set permission
     *
     * @param SearchEnumMultiSelectField $permission
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set printTransactions
     *
     * @param SearchBooleanField $printTransactions
     * @return VendorSearchBasic
     */
    public function setPrintTransactions(SearchBooleanField $printTransactions) {
        $this->printTransactions = $printTransactions;
        return $this;
    }

    /**
     * Get printTransactions
     *
     * @return SearchBooleanField
     */
    public function getPrintTransactions() {
        return $this->printTransactions;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param SearchDoubleField $purchaseOrderAmount
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptAmount
     *
     * @param SearchDoubleField $receiptAmount
     * @return VendorSearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return SearchDoubleField
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantity
     *
     * @param SearchDoubleField $receiptQuantity
     * @return VendorSearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param SearchDoubleField $receiptQuantityDiff
     * @return VendorSearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set salutation
     *
     * @param SearchStringField $salutation
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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
     * Set taxIdNum
     *
     * @param SearchStringField $taxIdNum
     * @return VendorSearchBasic
     */
    public function setTaxIdNum(SearchStringField $taxIdNum) {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * Get taxIdNum
     *
     * @return SearchStringField
     */
    public function getTaxIdNum() {
        return $this->taxIdNum;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return VendorSearchBasic
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
     * Set unbilledOrders
     *
     * @param SearchDoubleField $unbilledOrders
     * @return VendorSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders) {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * Get unbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getUnbilledOrders() {
        return $this->unbilledOrders;
    }


    /**
     * Set url
     *
     * @param SearchStringField $url
     * @return VendorSearchBasic
     */
    public function setUrl(SearchStringField $url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return SearchStringField
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set vatRegNumber
     *
     * @param SearchStringField $vatRegNumber
     * @return VendorSearchBasic
     */
    public function setVatRegNumber(SearchStringField $vatRegNumber) {
        $this->vatRegNumber = $vatRegNumber;
        return $this;
    }

    /**
     * Get vatRegNumber
     *
     * @return SearchStringField
     */
    public function getVatRegNumber() {
        return $this->vatRegNumber;
    }


    /**
     * Set workCalendar
     *
     * @param SearchMultiSelectField $workCalendar
     * @return VendorSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar) {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * Get workCalendar
     *
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar() {
        return $this->workCalendar;
    }


    /**
     * Set zipCode
     *
     * @param SearchStringField $zipCode
     * @return VendorSearchBasic
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
     * @return VendorSearchBasic
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