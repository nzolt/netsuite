<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * PaymentMethodSearchBasic
 */
class PaymentMethodSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $creditCard;

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
    protected $isDebitCard;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"creditCard" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDebitCard" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return PaymentMethodSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return SearchMultiSelectField
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set creditCard
     *
     * @param SearchBooleanField $creditCard
     * @return PaymentMethodSearchBasic
     */
    public function setCreditCard(SearchBooleanField $creditCard) {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Get creditCard
     *
     * @return SearchBooleanField
     */
    public function getCreditCard() {
        return $this->creditCard;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return PaymentMethodSearchBasic
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
     * @return PaymentMethodSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return PaymentMethodSearchBasic
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
     * @return PaymentMethodSearchBasic
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
     * Set isDebitCard
     *
     * @param SearchBooleanField $isDebitCard
     * @return PaymentMethodSearchBasic
     */
    public function setIsDebitCard(SearchBooleanField $isDebitCard) {
        $this->isDebitCard = $isDebitCard;
        return $this;
    }

    /**
     * Get isDebitCard
     *
     * @return SearchBooleanField
     */
    public function getIsDebitCard() {
        return $this->isDebitCard;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return PaymentMethodSearchBasic
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
     * Set name
     *
     * @param SearchStringField $name
     * @return PaymentMethodSearchBasic
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

}