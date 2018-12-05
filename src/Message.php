<?php

namespace Nzolt\NetSuite;

class Message extends Record
{

    /**
     * @var RecordRef $author
     */
    protected $author = null;

    /**
     * @var string $authorEmail
     */
    protected $authorEmail = null;

    /**
     * @var RecordRef $recipient
     */
    protected $recipient = null;

    /**
     * @var string $recipientEmail
     */
    protected $recipientEmail = null;

    /**
     * @var string $cc
     */
    protected $cc = null;

    /**
     * @var string $bcc
     */
    protected $bcc = null;

    /**
     * @var \DateTime $messageDate
     */
    protected $messageDate = null;

    /**
     * @var string $recordName
     */
    protected $recordName = null;

    /**
     * @var string $recordTypeName
     */
    protected $recordTypeName = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $emailed
     */
    protected $emailed = null;

    /**
     * @var RecordRef $activity
     */
    protected $activity = null;

    /**
     * @var boolean $compressAttachments
     */
    protected $compressAttachments = null;

    /**
     * @var boolean $incoming
     */
    protected $incoming = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var MessageMediaItemList $mediaItemList
     */
    protected $mediaItemList = null;

    /**
     * @var string $dateTime
     */
    protected $dateTime = null;

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
     * @return RecordRef
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param RecordRef $author
     * @return \Nzolt\NetSuite\Message
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
      return $this->authorEmail;
    }

    /**
     * @param string $authorEmail
     * @return \Nzolt\NetSuite\Message
     */
    public function setAuthorEmail($authorEmail)
    {
      $this->authorEmail = $authorEmail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param RecordRef $recipient
     * @return \Nzolt\NetSuite\Message
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmail()
    {
      return $this->recipientEmail;
    }

    /**
     * @param string $recipientEmail
     * @return \Nzolt\NetSuite\Message
     */
    public function setRecipientEmail($recipientEmail)
    {
      $this->recipientEmail = $recipientEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param string $cc
     * @return \Nzolt\NetSuite\Message
     */
    public function setCc($cc)
    {
      $this->cc = $cc;
      return $this;
    }

    /**
     * @return string
     */
    public function getBcc()
    {
      return $this->bcc;
    }

    /**
     * @param string $bcc
     * @return \Nzolt\NetSuite\Message
     */
    public function setBcc($bcc)
    {
      $this->bcc = $bcc;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMessageDate()
    {
      if ($this->messageDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->messageDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $messageDate
     * @return \Nzolt\NetSuite\Message
     */
    public function setMessageDate(\DateTime $messageDate = null)
    {
      if ($messageDate == null) {
       $this->messageDate = null;
      } else {
        $this->messageDate = $messageDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordName()
    {
      return $this->recordName;
    }

    /**
     * @param string $recordName
     * @return \Nzolt\NetSuite\Message
     */
    public function setRecordName($recordName)
    {
      $this->recordName = $recordName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordTypeName()
    {
      return $this->recordTypeName;
    }

    /**
     * @param string $recordTypeName
     * @return \Nzolt\NetSuite\Message
     */
    public function setRecordTypeName($recordTypeName)
    {
      $this->recordTypeName = $recordTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Nzolt\NetSuite\Message
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\Message
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailed()
    {
      return $this->emailed;
    }

    /**
     * @param boolean $emailed
     * @return \Nzolt\NetSuite\Message
     */
    public function setEmailed($emailed)
    {
      $this->emailed = $emailed;
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
     * @return \Nzolt\NetSuite\Message
     */
    public function setActivity($activity)
    {
      $this->activity = $activity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompressAttachments()
    {
      return $this->compressAttachments;
    }

    /**
     * @param boolean $compressAttachments
     * @return \Nzolt\NetSuite\Message
     */
    public function setCompressAttachments($compressAttachments)
    {
      $this->compressAttachments = $compressAttachments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncoming()
    {
      return $this->incoming;
    }

    /**
     * @param boolean $incoming
     * @return \Nzolt\NetSuite\Message
     */
    public function setIncoming($incoming)
    {
      $this->incoming = $incoming;
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
     * @return \Nzolt\NetSuite\Message
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
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\Message
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return MessageMediaItemList
     */
    public function getMediaItemList()
    {
      return $this->mediaItemList;
    }

    /**
     * @param MessageMediaItemList $mediaItemList
     * @return \Nzolt\NetSuite\Message
     */
    public function setMediaItemList($mediaItemList)
    {
      $this->mediaItemList = $mediaItemList;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTime()
    {
      return $this->dateTime;
    }

    /**
     * @param string $dateTime
     * @return \Nzolt\NetSuite\Message
     */
    public function setDateTime($dateTime)
    {
      $this->dateTime = $dateTime;
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
     * @return \Nzolt\NetSuite\Message
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
     * @return \Nzolt\NetSuite\Message
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
