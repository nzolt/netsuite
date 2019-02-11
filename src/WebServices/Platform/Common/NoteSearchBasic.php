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
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * NoteSearchBasic
 */
class NoteSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $author;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $direction;

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
     * @var SearchStringField
     */
    protected $note;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $noteDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $noteType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"author" => "SearchMultiSelectField",
    	"direction" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"note" => "SearchStringField",
    	"noteDate" => "SearchDateField",
    	"noteType" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set author
     *
     * @param SearchMultiSelectField $author
     * @return NoteSearchBasic
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
     * Set direction
     *
     * @param SearchBooleanField $direction
     * @return NoteSearchBasic
     */
    public function setDirection(SearchBooleanField $direction) {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Get direction
     *
     * @return SearchBooleanField
     */
    public function getDirection() {
        return $this->direction;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return NoteSearchBasic
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
     * @return NoteSearchBasic
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
     * @return NoteSearchBasic
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
     * @return NoteSearchBasic
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
     * Set note
     *
     * @param SearchStringField $note
     * @return NoteSearchBasic
     */
    public function setNote(SearchStringField $note) {
        $this->note = $note;
        return $this;
    }

    /**
     * Get note
     *
     * @return SearchStringField
     */
    public function getNote() {
        return $this->note;
    }


    /**
     * Set noteDate
     *
     * @param SearchDateField $noteDate
     * @return NoteSearchBasic
     */
    public function setNoteDate(SearchDateField $noteDate) {
        $this->noteDate = $noteDate;
        return $this;
    }

    /**
     * Get noteDate
     *
     * @return SearchDateField
     */
    public function getNoteDate() {
        return $this->noteDate;
    }


    /**
     * Set noteType
     *
     * @param SearchMultiSelectField $noteType
     * @return NoteSearchBasic
     */
    public function setNoteType(SearchMultiSelectField $noteType) {
        $this->noteType = $noteType;
        return $this;
    }

    /**
     * Get noteType
     *
     * @return SearchMultiSelectField
     */
    public function getNoteType() {
        return $this->noteType;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return NoteSearchBasic
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
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return NoteSearchBasic
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