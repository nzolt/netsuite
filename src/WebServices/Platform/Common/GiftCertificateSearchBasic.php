<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * GiftCertificateSearchBasic
 */
class GiftCertificateSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amountAvailableBilled;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amountRemaining;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expirationDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertCode;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $incomeAccount;

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
    protected $isActive;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $liabilityAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $message;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $originalAmount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $purchaseDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $sender;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"amountAvailableBilled" => "SearchDoubleField",
    	"amountRemaining" => "SearchDoubleField",
    	"createdDate" => "SearchDateField",
    	"email" => "SearchStringField",
    	"expirationDate" => "SearchDateField",
    	"giftCertCode" => "SearchStringField",
    	"incomeAccount" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isActive" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"liabilityAccount" => "SearchMultiSelectField",
    	"message" => "SearchStringField",
    	"name" => "SearchStringField",
    	"originalAmount" => "SearchDoubleField",
    	"purchaseDate" => "SearchDateField",
    	"sender" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set amountAvailableBilled
     *
     * @param SearchDoubleField $amountAvailableBilled
     * @return GiftCertificateSearchBasic
     */
    public function setAmountAvailableBilled(SearchDoubleField $amountAvailableBilled) {
        $this->amountAvailableBilled = $amountAvailableBilled;
        return $this;
    }

    /**
     * Get amountAvailableBilled
     *
     * @return SearchDoubleField
     */
    public function getAmountAvailableBilled() {
        return $this->amountAvailableBilled;
    }


    /**
     * Set amountRemaining
     *
     * @param SearchDoubleField $amountRemaining
     * @return GiftCertificateSearchBasic
     */
    public function setAmountRemaining(SearchDoubleField $amountRemaining) {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * Get amountRemaining
     *
     * @return SearchDoubleField
     */
    public function getAmountRemaining() {
        return $this->amountRemaining;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return GiftCertificateSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return SearchDateField
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return GiftCertificateSearchBasic
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
     * Set expirationDate
     *
     * @param SearchDateField $expirationDate
     * @return GiftCertificateSearchBasic
     */
    public function setExpirationDate(SearchDateField $expirationDate) {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return SearchDateField
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }


    /**
     * Set giftCertCode
     *
     * @param SearchStringField $giftCertCode
     * @return GiftCertificateSearchBasic
     */
    public function setGiftCertCode(SearchStringField $giftCertCode) {
        $this->giftCertCode = $giftCertCode;
        return $this;
    }

    /**
     * Get giftCertCode
     *
     * @return SearchStringField
     */
    public function getGiftCertCode() {
        return $this->giftCertCode;
    }


    /**
     * Set incomeAccount
     *
     * @param SearchMultiSelectField $incomeAccount
     * @return GiftCertificateSearchBasic
     */
    public function setIncomeAccount(SearchMultiSelectField $incomeAccount) {
        $this->incomeAccount = $incomeAccount;
        return $this;
    }

    /**
     * Get incomeAccount
     *
     * @return SearchMultiSelectField
     */
    public function getIncomeAccount() {
        return $this->incomeAccount;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return GiftCertificateSearchBasic
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
     * @return GiftCertificateSearchBasic
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
     * Set isActive
     *
     * @param SearchBooleanField $isActive
     * @return GiftCertificateSearchBasic
     */
    public function setIsActive(SearchBooleanField $isActive) {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Get isActive
     *
     * @return SearchBooleanField
     */
    public function getIsActive() {
        return $this->isActive;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return GiftCertificateSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set liabilityAccount
     *
     * @param SearchMultiSelectField $liabilityAccount
     * @return GiftCertificateSearchBasic
     */
    public function setLiabilityAccount(SearchMultiSelectField $liabilityAccount) {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * Get liabilityAccount
     *
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount() {
        return $this->liabilityAccount;
    }


    /**
     * Set message
     *
     * @param SearchStringField $message
     * @return GiftCertificateSearchBasic
     */
    public function setMessage(SearchStringField $message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return SearchStringField
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return GiftCertificateSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set originalAmount
     *
     * @param SearchDoubleField $originalAmount
     * @return GiftCertificateSearchBasic
     */
    public function setOriginalAmount(SearchDoubleField $originalAmount) {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * Get originalAmount
     *
     * @return SearchDoubleField
     */
    public function getOriginalAmount() {
        return $this->originalAmount;
    }


    /**
     * Set purchaseDate
     *
     * @param SearchDateField $purchaseDate
     * @return GiftCertificateSearchBasic
     */
    public function setPurchaseDate(SearchDateField $purchaseDate) {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return SearchDateField
     */
    public function getPurchaseDate() {
        return $this->purchaseDate;
    }


    /**
     * Set sender
     *
     * @param SearchStringField $sender
     * @return GiftCertificateSearchBasic
     */
    public function setSender(SearchStringField $sender) {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Get sender
     *
     * @return SearchStringField
     */
    public function getSender() {
        return $this->sender;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return GiftCertificateSearchBasic
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