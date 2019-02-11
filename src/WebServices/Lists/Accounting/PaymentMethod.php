<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * PaymentMethod
 */
class PaymentMethod extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $creditCard;

    /**
     * @access public
     * @var boolean
     */
    protected $undepFunds;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

    /**
     * @access public
     * @var PaymentMethodVisualsList
     */
    protected $visualsList;

    /**
     * @access public
     * @var boolean
     */
    protected $isDebitCard;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $merchantAccountsList;

    /**
     * @access public
     * @var string
     */
    protected $payPalEmailAddress;

    /**
     * @access public
     * @var string
     */
    protected $expressCheckoutArrangement;

    /**
     * @access public
     * @var boolean
     */
    protected $useExpressCheckout;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"creditCard" => "boolean",
    	"undepFunds" => "boolean",
    	"account" => "RecordRef",
    	"isInactive" => "boolean",
    	"isOnline" => "boolean",
    	"visualsList" => "PaymentMethodVisualsList",
    	"isDebitCard" => "boolean",
    	"merchantAccountsList" => "RecordRefList",
    	"payPalEmailAddress" => "string",
    	"expressCheckoutArrangement" => "string",
    	"useExpressCheckout" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return PaymentMethod
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set creditCard
     *
     * @param boolean $creditCard
     * @return PaymentMethod
     */
    public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Get creditCard
     *
     * @return boolean
     */
    public function getCreditCard() {
        return $this->creditCard;
    }


    /**
     * Set undepFunds
     *
     * @param boolean $undepFunds
     * @return PaymentMethod
     */
    public function setUndepFunds($undepFunds) {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * Get undepFunds
     *
     * @return boolean
     */
    public function getUndepFunds() {
        return $this->undepFunds;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return PaymentMethod
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return PaymentMethod
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set visualsList
     *
     * @param PaymentMethodVisualsList $visualsList
     * @return PaymentMethod
     */
    public function setVisualsList(PaymentMethodVisualsList $visualsList) {
        $this->visualsList = $visualsList;
        return $this;
    }

    /**
     * Get visualsList
     *
     * @return PaymentMethodVisualsList
     */
    public function getVisualsList() {
        return $this->visualsList;
    }


    /**
     * Set isDebitCard
     *
     * @param boolean $isDebitCard
     * @return PaymentMethod
     */
    public function setIsDebitCard($isDebitCard) {
        $this->isDebitCard = $isDebitCard;
        return $this;
    }

    /**
     * Get isDebitCard
     *
     * @return boolean
     */
    public function getIsDebitCard() {
        return $this->isDebitCard;
    }


    /**
     * Set merchantAccountsList
     *
     * @param RecordRefList $merchantAccountsList
     * @return PaymentMethod
     */
    public function setMerchantAccountsList(RecordRefList $merchantAccountsList) {
        $this->merchantAccountsList = $merchantAccountsList;
        return $this;
    }

    /**
     * Get merchantAccountsList
     *
     * @return RecordRefList
     */
    public function getMerchantAccountsList() {
        return $this->merchantAccountsList;
    }


    /**
     * Set payPalEmailAddress
     *
     * @param string $payPalEmailAddress
     * @return PaymentMethod
     */
    public function setPayPalEmailAddress($payPalEmailAddress) {
        $this->payPalEmailAddress = $payPalEmailAddress;
        return $this;
    }

    /**
     * Get payPalEmailAddress
     *
     * @return string
     */
    public function getPayPalEmailAddress() {
        return $this->payPalEmailAddress;
    }


    /**
     * Set expressCheckoutArrangement
     *
     * @param string $expressCheckoutArrangement
     * @return PaymentMethod
     */
    public function setExpressCheckoutArrangement($expressCheckoutArrangement) {
        $this->expressCheckoutArrangement = $expressCheckoutArrangement;
        return $this;
    }

    /**
     * Get expressCheckoutArrangement
     *
     * @return string
     */
    public function getExpressCheckoutArrangement() {
        return $this->expressCheckoutArrangement;
    }


    /**
     * Set useExpressCheckout
     *
     * @param boolean $useExpressCheckout
     * @return PaymentMethod
     */
    public function setUseExpressCheckout($useExpressCheckout) {
        $this->useExpressCheckout = $useExpressCheckout;
        return $this;
    }

    /**
     * Get useExpressCheckout
     *
     * @return boolean
     */
    public function getUseExpressCheckout() {
        return $this->useExpressCheckout;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return PaymentMethod
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return PaymentMethod
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}