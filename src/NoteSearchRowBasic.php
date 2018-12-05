<?php

namespace Nzolt\NetSuite;

class NoteSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $author
     */
    protected $author = null;

    /**
     * @var SearchColumnStringField[] $direction
     */
    protected $direction = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $note
     */
    protected $note = null;

    /**
     * @var SearchColumnDateField[] $noteDate
     */
    protected $noteDate = null;

    /**
     * @var SearchColumnStringField[] $noteType
     */
    protected $noteType = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param SearchColumnSelectField[] $author
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setAuthor(array $author = null)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param SearchColumnStringField[] $direction
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setDirection(array $direction = null)
    {
      $this->direction = $direction;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param SearchColumnStringField[] $note
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setNote(array $note = null)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNoteDate()
    {
      return $this->noteDate;
    }

    /**
     * @param SearchColumnDateField[] $noteDate
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setNoteDate(array $noteDate = null)
    {
      $this->noteDate = $noteDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNoteType()
    {
      return $this->noteType;
    }

    /**
     * @param SearchColumnStringField[] $noteType
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setNoteType(array $noteType = null)
    {
      $this->noteType = $noteType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\NoteSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
