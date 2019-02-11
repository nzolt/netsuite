<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * Message
 */
class Message extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $author;

    /**
     * @access public
     * @var RecordRef
     */
    public $recipient;

    /**
     * @access public
     * @var string
     */
    protected $cc;

    /**
     * @access public
     * @var string
     */
    protected $bcc;

    /**
     * @access public
     * @var dateTime
     */
    protected $messageDate;

    /**
     * @access public
     * @var string
     */
    protected $recordName;

    /**
     * @access public
     * @var string
     */
    protected $recordTypeName;

    /**
     * @access public
     * @var string
     */
    protected $subject;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var boolean
     */
    protected $emailed;

    /**
     * @access public
     * @var RecordRef
     */
    public $activity;

    /**
     * @access public
     * @var boolean
     */
    protected $compressAttachments;

    /**
     * @access public
     * @var boolean
     */
    protected $incoming;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    /**
     * @access public
     * @var MessageMediaItemList
     */
    protected $mediaItemList;

    /**
     * @access public
     * @var string
     */
    protected $dateTime;

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
    	"author" => "RecordRef",
    	"recipient" => "RecordRef",
    	"cc" => "string",
    	"bcc" => "string",
    	"messageDate" => "dateTime",
    	"recordName" => "string",
    	"recordTypeName" => "string",
    	"subject" => "string",
    	"message" => "string",
    	"emailed" => "boolean",
    	"activity" => "RecordRef",
    	"compressAttachments" => "boolean",
    	"incoming" => "boolean",
    	"lastModifiedDate" => "dateTime",
    	"transaction" => "RecordRef",
    	"mediaItemList" => "MessageMediaItemList",
    	"dateTime" => "string",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set cc
     *
     * @param string $cc
     * @return Message
     */
    public function setCc($cc) {
        $this->cc = $cc;
        return $this;
    }

    /**
     * Get cc
     *
     * @return string
     */
    public function getCc() {
        return $this->cc;
    }


    /**
     * Set bcc
     *
     * @param string $bcc
     * @return Message
     */
    public function setBcc($bcc) {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * Get bcc
     *
     * @return string
     */
    public function getBcc() {
        return $this->bcc;
    }


    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     * @return Message
     */
    public function setMessageDate(\DateTime $messageDate) {
        $this->messageDate = $messageDate->format('c');
        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate() {
        return new \DateTime($this->messageDate);
    }


    /**
     * Set recordName
     *
     * @param string $recordName
     * @return Message
     */
    public function setRecordName($recordName) {
        $this->recordName = $recordName;
        return $this;
    }

    /**
     * Get recordName
     *
     * @return string
     */
    public function getRecordName() {
        return $this->recordName;
    }


    /**
     * Set recordTypeName
     *
     * @param string $recordTypeName
     * @return Message
     */
    public function setRecordTypeName($recordTypeName) {
        $this->recordTypeName = $recordTypeName;
        return $this;
    }

    /**
     * Get recordTypeName
     *
     * @return string
     */
    public function getRecordTypeName() {
        return $this->recordTypeName;
    }


    /**
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject() {
        return $this->subject;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Message
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
     * Set emailed
     *
     * @param boolean $emailed
     * @return Message
     */
    public function setEmailed($emailed) {
        $this->emailed = $emailed;
        return $this;
    }

    /**
     * Get emailed
     *
     * @return boolean
     */
    public function getEmailed() {
        return $this->emailed;
    }


    /**
     * Set compressAttachments
     *
     * @param boolean $compressAttachments
     * @return Message
     */
    public function setCompressAttachments($compressAttachments) {
        $this->compressAttachments = $compressAttachments;
        return $this;
    }

    /**
     * Get compressAttachments
     *
     * @return boolean
     */
    public function getCompressAttachments() {
        return $this->compressAttachments;
    }


    /**
     * Set incoming
     *
     * @param boolean $incoming
     * @return Message
     */
    public function setIncoming($incoming) {
        $this->incoming = $incoming;
        return $this;
    }

    /**
     * Get incoming
     *
     * @return boolean
     */
    public function getIncoming() {
        return $this->incoming;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Message
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
     * Set mediaItemList
     *
     * @param MessageMediaItemList $mediaItemList
     * @return Message
     */
    public function setMediaItemList(MessageMediaItemList $mediaItemList) {
        $this->mediaItemList = $mediaItemList;
        return $this;
    }

    /**
     * Get mediaItemList
     *
     * @return MessageMediaItemList
     */
    public function getMediaItemList() {
        return $this->mediaItemList;
    }


    /**
     * Set dateTime
     *
     * @param string $dateTime
     * @return Message
     */
    public function setDateTime($dateTime) {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return string
     */
    public function getDateTime() {
        return $this->dateTime;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Message
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
     * @return Message
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