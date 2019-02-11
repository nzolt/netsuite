<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * GiftCertificate
 */
class GiftCertificate extends Record {

    /**
     * @access public
     * @var string
     */
    protected $giftCertCode;

    /**
     * @access public
     * @var string
     */
    protected $sender;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var float
     */
    protected $originalAmount;

    /**
     * @access public
     * @var float
     */
    protected $amountRemaining;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"giftCertCode" => "string",
    	"sender" => "string",
    	"name" => "string",
    	"email" => "string",
    	"message" => "string",
    	"expirationDate" => "dateTime",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"originalAmount" => "float",
    	"amountRemaining" => "float",
    	"internalId" => "string",
    );

    /**
     * Set giftCertCode
     *
     * @param string $giftCertCode
     * @return GiftCertificate
     */
    public function setGiftCertCode($giftCertCode) {
        $this->giftCertCode = $giftCertCode;
        return $this;
    }

    /**
     * Get giftCertCode
     *
     * @return string
     */
    public function getGiftCertCode() {
        return $this->giftCertCode;
    }


    /**
     * Set sender
     *
     * @param string $sender
     * @return GiftCertificate
     */
    public function setSender($sender) {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender() {
        return $this->sender;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return GiftCertificate
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
     * Set email
     *
     * @param string $email
     * @return GiftCertificate
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return GiftCertificate
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return GiftCertificate
     */
    public function setExpirationDate(\DateTime $expirationDate) {
        $this->expirationDate = $expirationDate->format('c');
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return new \DateTime($this->expirationDate);
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return GiftCertificate
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return GiftCertificate
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set originalAmount
     *
     * @param float $originalAmount
     * @return GiftCertificate
     */
    public function setOriginalAmount($originalAmount) {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * Get originalAmount
     *
     * @return float
     */
    public function getOriginalAmount() {
        return $this->originalAmount;
    }


    /**
     * Set amountRemaining
     *
     * @param float $amountRemaining
     * @return GiftCertificate
     */
    public function setAmountRemaining($amountRemaining) {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * Get amountRemaining
     *
     * @return float
     */
    public function getAmountRemaining() {
        return $this->amountRemaining;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return GiftCertificate
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

}