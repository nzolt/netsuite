<?php

namespace Nzolt\NetSuite;

class MessageSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $author
     */
    protected $author = null;

    /**
     * @var SearchColumnStringField[] $authorEmail
     */
    protected $authorEmail = null;

    /**
     * @var SearchColumnStringField[] $bcc
     */
    protected $bcc = null;

    /**
     * @var SearchColumnStringField[] $cc
     */
    protected $cc = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $hasAttachment
     */
    protected $hasAttachment = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $internalOnly
     */
    protected $internalOnly = null;

    /**
     * @var SearchColumnBooleanField[] $isEmailed
     */
    protected $isEmailed = null;

    /**
     * @var SearchColumnBooleanField[] $isIncoming
     */
    protected $isIncoming = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnDateField[] $messageDate
     */
    protected $messageDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $messageType
     */
    protected $messageType = null;

    /**
     * @var SearchColumnSelectField[] $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchColumnStringField[] $recipientEmail
     */
    protected $recipientEmail = null;

    /**
     * @var SearchColumnStringField[] $subject
     */
    protected $subject = null;

    
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
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setAuthor(array $author = null)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAuthorEmail()
    {
      return $this->authorEmail;
    }

    /**
     * @param SearchColumnStringField[] $authorEmail
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setAuthorEmail(array $authorEmail = null)
    {
      $this->authorEmail = $authorEmail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBcc()
    {
      return $this->bcc;
    }

    /**
     * @param SearchColumnStringField[] $bcc
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setBcc(array $bcc = null)
    {
      $this->bcc = $bcc;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param SearchColumnStringField[] $cc
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setCc(array $cc = null)
    {
      $this->cc = $cc;
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
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasAttachment()
    {
      return $this->hasAttachment;
    }

    /**
     * @param SearchColumnBooleanField[] $hasAttachment
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setHasAttachment(array $hasAttachment = null)
    {
      $this->hasAttachment = $hasAttachment;
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
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInternalOnly()
    {
      return $this->internalOnly;
    }

    /**
     * @param SearchColumnBooleanField[] $internalOnly
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setInternalOnly(array $internalOnly = null)
    {
      $this->internalOnly = $internalOnly;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsEmailed()
    {
      return $this->isEmailed;
    }

    /**
     * @param SearchColumnBooleanField[] $isEmailed
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setIsEmailed(array $isEmailed = null)
    {
      $this->isEmailed = $isEmailed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsIncoming()
    {
      return $this->isIncoming;
    }

    /**
     * @param SearchColumnBooleanField[] $isIncoming
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setIsIncoming(array $isIncoming = null)
    {
      $this->isIncoming = $isIncoming;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getMessageDate()
    {
      return $this->messageDate;
    }

    /**
     * @param SearchColumnDateField[] $messageDate
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setMessageDate(array $messageDate = null)
    {
      $this->messageDate = $messageDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getMessageType()
    {
      return $this->messageType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $messageType
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setMessageType(array $messageType = null)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchColumnSelectField[] $recipient
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setRecipient(array $recipient = null)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecipientEmail()
    {
      return $this->recipientEmail;
    }

    /**
     * @param SearchColumnStringField[] $recipientEmail
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setRecipientEmail(array $recipientEmail = null)
    {
      $this->recipientEmail = $recipientEmail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param SearchColumnStringField[] $subject
     * @return \Nzolt\NetSuite\MessageSearchRowBasic
     */
    public function setSubject(array $subject = null)
    {
      $this->subject = $subject;
      return $this;
    }

}
