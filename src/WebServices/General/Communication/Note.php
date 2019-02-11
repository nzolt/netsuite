<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\General\Communication\Types\NoteDirection;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Note
 */
class Note extends Record {

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $noteType;

    /**
     * @access public
     * @var NoteDirection
     */
    protected $direction;

    /**
     * @access public
     * @var dateTime
     */
    protected $noteDate;

    /**
     * @access public
     * @var string
     */
    protected $note;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $activity;

    /**
     * @access public
     * @var RecordRef
     */
    public $author;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $folder;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $media;

    /**
     * @access public
     * @var RecordRef
     */
    public $record;

    /**
     * @access public
     * @var RecordRef
     */
    public $recordType;

    /**
     * @access public
     * @var RecordRef
     */
    public $topic;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

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
    	"title" => "string",
    	"noteType" => "RecordRef",
    	"direction" => "NoteDirection",
    	"noteDate" => "dateTime",
    	"note" => "string",
    	"lastModifiedDate" => "dateTime",
    	"activity" => "RecordRef",
    	"author" => "RecordRef",
    	"entity" => "RecordRef",
    	"folder" => "RecordRef",
    	"item" => "RecordRef",
    	"media" => "RecordRef",
    	"record" => "RecordRef",
    	"recordType" => "RecordRef",
    	"topic" => "RecordRef",
    	"transaction" => "RecordRef",
    	"customForm" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set title
     *
     * @param string $title
     * @return Note
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set direction
     *
     * @param NoteDirection $direction
     * @return Note
     */
    public function setDirection(NoteDirection $direction) {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Get direction
     *
     * @return NoteDirection
     */
    public function getDirection() {
        return $this->direction;
    }


    /**
     * Set noteDate
     *
     * @param \DateTime $noteDate
     * @return Note
     */
    public function setNoteDate(\DateTime $noteDate) {
        $this->noteDate = $noteDate->format('c');
        return $this;
    }

    /**
     * Get noteDate
     *
     * @return \DateTime
     */
    public function getNoteDate() {
        return new \DateTime($this->noteDate);
    }


    /**
     * Set note
     *
     * @param string $note
     * @return Note
     */
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote() {
        return $this->note;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Note
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Note
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Note
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
     * @return Note
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