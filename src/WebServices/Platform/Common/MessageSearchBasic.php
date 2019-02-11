<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;

/**
 * MessageSearchBasic
 */
class MessageSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $author;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $authorEmail;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $bcc;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $cc;

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
     * @var SearchBooleanField
     */
    protected $hasAttachment;

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
    protected $internalOnly;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $message;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $messageDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $messageType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $recipient;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $recipientEmail;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $subject;

    static $paramtypesmap = array(
    	"author" => "SearchMultiSelectField",
    	"authorEmail" => "SearchStringField",
    	"bcc" => "SearchStringField",
    	"cc" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"hasAttachment" => "SearchBooleanField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"internalOnly" => "SearchBooleanField",
    	"message" => "SearchStringField",
    	"messageDate" => "SearchDateField",
    	"messageType" => "SearchEnumMultiSelectField",
    	"recipient" => "SearchMultiSelectField",
    	"recipientEmail" => "SearchStringField",
    	"subject" => "SearchStringField",
    );

    /**
     * Set author
     *
     * @param SearchMultiSelectField $author
     * @return MessageSearchBasic
     */
    public function setAuthor(SearchMultiSelectField $author) {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return SearchMultiSelectField
     */
    public function getAuthor() {
        return $this->author;
    }


    /**
     * Set authorEmail
     *
     * @param SearchStringField $authorEmail
     * @return MessageSearchBasic
     */
    public function setAuthorEmail(SearchStringField $authorEmail) {
        $this->authorEmail = $authorEmail;
        return $this;
    }

    /**
     * Get authorEmail
     *
     * @return SearchStringField
     */
    public function getAuthorEmail() {
        return $this->authorEmail;
    }


    /**
     * Set bcc
     *
     * @param SearchStringField $bcc
     * @return MessageSearchBasic
     */
    public function setBcc(SearchStringField $bcc) {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * Get bcc
     *
     * @return SearchStringField
     */
    public function getBcc() {
        return $this->bcc;
    }


    /**
     * Set cc
     *
     * @param SearchStringField $cc
     * @return MessageSearchBasic
     */
    public function setCc(SearchStringField $cc) {
        $this->cc = $cc;
        return $this;
    }

    /**
     * Get cc
     *
     * @return SearchStringField
     */
    public function getCc() {
        return $this->cc;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return MessageSearchBasic
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
     * @return MessageSearchBasic
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
     * Set hasAttachment
     *
     * @param SearchBooleanField $hasAttachment
     * @return MessageSearchBasic
     */
    public function setHasAttachment(SearchBooleanField $hasAttachment) {
        $this->hasAttachment = $hasAttachment;
        return $this;
    }

    /**
     * Get hasAttachment
     *
     * @return SearchBooleanField
     */
    public function getHasAttachment() {
        return $this->hasAttachment;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return MessageSearchBasic
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
     * @return MessageSearchBasic
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
     * Set internalOnly
     *
     * @param SearchBooleanField $internalOnly
     * @return MessageSearchBasic
     */
    public function setInternalOnly(SearchBooleanField $internalOnly) {
        $this->internalOnly = $internalOnly;
        return $this;
    }

    /**
     * Get internalOnly
     *
     * @return SearchBooleanField
     */
    public function getInternalOnly() {
        return $this->internalOnly;
    }


    /**
     * Set message
     *
     * @param SearchStringField $message
     * @return MessageSearchBasic
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
     * Set messageDate
     *
     * @param SearchDateField $messageDate
     * @return MessageSearchBasic
     */
    public function setMessageDate(SearchDateField $messageDate) {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * Get messageDate
     *
     * @return SearchDateField
     */
    public function getMessageDate() {
        return $this->messageDate;
    }


    /**
     * Set messageType
     *
     * @param SearchEnumMultiSelectField $messageType
     * @return MessageSearchBasic
     */
    public function setMessageType(SearchEnumMultiSelectField $messageType) {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Get messageType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getMessageType() {
        return $this->messageType;
    }


    /**
     * Set recipient
     *
     * @param SearchMultiSelectField $recipient
     * @return MessageSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient) {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return SearchMultiSelectField
     */
    public function getRecipient() {
        return $this->recipient;
    }


    /**
     * Set recipientEmail
     *
     * @param SearchStringField $recipientEmail
     * @return MessageSearchBasic
     */
    public function setRecipientEmail(SearchStringField $recipientEmail) {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * Get recipientEmail
     *
     * @return SearchStringField
     */
    public function getRecipientEmail() {
        return $this->recipientEmail;
    }


    /**
     * Set subject
     *
     * @param SearchStringField $subject
     * @return MessageSearchBasic
     */
    public function setSubject(SearchStringField $subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return SearchStringField
     */
    public function getSubject() {
        return $this->subject;
    }

}