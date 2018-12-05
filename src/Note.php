<?php

namespace Nzolt\NetSuite;

class Note extends Record
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $noteType
     */
    protected $noteType = null;

    /**
     * @var NoteDirection $direction
     */
    protected $direction = null;

    /**
     * @var \DateTime $noteDate
     */
    protected $noteDate = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $activity
     */
    protected $activity = null;

    /**
     * @var RecordRef $author
     */
    protected $author = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $folder
     */
    protected $folder = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $media
     */
    protected $media = null;

    /**
     * @var RecordRef $record
     */
    protected $record = null;

    /**
     * @var RecordRef $recordType
     */
    protected $recordType = null;

    /**
     * @var RecordRef $topic
     */
    protected $topic = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\Note
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNoteType()
    {
      return $this->noteType;
    }

    /**
     * @param RecordRef $noteType
     * @return \Nzolt\NetSuite\Note
     */
    public function setNoteType($noteType)
    {
      $this->noteType = $noteType;
      return $this;
    }

    /**
     * @return NoteDirection
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param NoteDirection $direction
     * @return \Nzolt\NetSuite\Note
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNoteDate()
    {
      if ($this->noteDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->noteDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $noteDate
     * @return \Nzolt\NetSuite\Note
     */
    public function setNoteDate(\DateTime $noteDate = null)
    {
      if ($noteDate == null) {
       $this->noteDate = null;
      } else {
        $this->noteDate = $noteDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param string $note
     * @return \Nzolt\NetSuite\Note
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Note
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getActivity()
    {
      return $this->activity;
    }

    /**
     * @param RecordRef $activity
     * @return \Nzolt\NetSuite\Note
     */
    public function setActivity($activity)
    {
      $this->activity = $activity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param RecordRef $author
     * @return \Nzolt\NetSuite\Note
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\Note
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFolder()
    {
      return $this->folder;
    }

    /**
     * @param RecordRef $folder
     * @return \Nzolt\NetSuite\Note
     */
    public function setFolder($folder)
    {
      $this->folder = $folder;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\Note
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMedia()
    {
      return $this->media;
    }

    /**
     * @param RecordRef $media
     * @return \Nzolt\NetSuite\Note
     */
    public function setMedia($media)
    {
      $this->media = $media;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param RecordRef $record
     * @return \Nzolt\NetSuite\Note
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordType()
    {
      return $this->recordType;
    }

    /**
     * @param RecordRef $recordType
     * @return \Nzolt\NetSuite\Note
     */
    public function setRecordType($recordType)
    {
      $this->recordType = $recordType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTopic()
    {
      return $this->topic;
    }

    /**
     * @param RecordRef $topic
     * @return \Nzolt\NetSuite\Note
     */
    public function setTopic($topic)
    {
      $this->topic = $topic;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\Note
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Note
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Note
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Note
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Note
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
