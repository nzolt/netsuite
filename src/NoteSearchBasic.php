<?php

namespace Nzolt\NetSuite;

class NoteSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $author
     */
    protected $author = null;

    /**
     * @var SearchBooleanField $direction
     */
    protected $direction = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchStringField $note
     */
    protected $note = null;

    /**
     * @var SearchDateField $noteDate
     */
    protected $noteDate = null;

    /**
     * @var SearchMultiSelectField $noteType
     */
    protected $noteType = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param SearchMultiSelectField $author
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param SearchBooleanField $direction
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param SearchStringField $note
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNoteDate()
    {
      return $this->noteDate;
    }

    /**
     * @param SearchDateField $noteDate
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setNoteDate($noteDate)
    {
      $this->noteDate = $noteDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNoteType()
    {
      return $this->noteType;
    }

    /**
     * @param SearchMultiSelectField $noteType
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setNoteType($noteType)
    {
      $this->noteType = $noteType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\NoteSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
