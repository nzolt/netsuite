<?php

namespace Nzolt\NetSuite;

class MessageSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $author
     */
    protected $author = null;

    /**
     * @var SearchStringField $authorEmail
     */
    protected $authorEmail = null;

    /**
     * @var SearchStringField $bcc
     */
    protected $bcc = null;

    /**
     * @var SearchStringField $cc
     */
    protected $cc = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchBooleanField $hasAttachment
     */
    protected $hasAttachment = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $internalOnly
     */
    protected $internalOnly = null;

    /**
     * @var SearchStringField $message
     */
    protected $message = null;

    /**
     * @var SearchDateField $messageDate
     */
    protected $messageDate = null;

    /**
     * @var SearchEnumMultiSelectField $messageType
     */
    protected $messageType = null;

    /**
     * @var SearchMultiSelectField $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchStringField $recipientEmail
     */
    protected $recipientEmail = null;

    /**
     * @var SearchStringField $subject
     */
    protected $subject = null;

    
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
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAuthorEmail()
    {
      return $this->authorEmail;
    }

    /**
     * @param SearchStringField $authorEmail
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setAuthorEmail($authorEmail)
    {
      $this->authorEmail = $authorEmail;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBcc()
    {
      return $this->bcc;
    }

    /**
     * @param SearchStringField $bcc
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setBcc($bcc)
    {
      $this->bcc = $bcc;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCc()
    {
      return $this->cc;
    }

    /**
     * @param SearchStringField $cc
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setCc($cc)
    {
      $this->cc = $cc;
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
     * @return \Nzolt\NetSuite\MessageSearchBasic
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
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasAttachment()
    {
      return $this->hasAttachment;
    }

    /**
     * @param SearchBooleanField $hasAttachment
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setHasAttachment($hasAttachment)
    {
      $this->hasAttachment = $hasAttachment;
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
     * @return \Nzolt\NetSuite\MessageSearchBasic
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
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInternalOnly()
    {
      return $this->internalOnly;
    }

    /**
     * @param SearchBooleanField $internalOnly
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setInternalOnly($internalOnly)
    {
      $this->internalOnly = $internalOnly;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchStringField $message
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getMessageDate()
    {
      return $this->messageDate;
    }

    /**
     * @param SearchDateField $messageDate
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setMessageDate($messageDate)
    {
      $this->messageDate = $messageDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getMessageType()
    {
      return $this->messageType;
    }

    /**
     * @param SearchEnumMultiSelectField $messageType
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRecipientEmail()
    {
      return $this->recipientEmail;
    }

    /**
     * @param SearchStringField $recipientEmail
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setRecipientEmail($recipientEmail)
    {
      $this->recipientEmail = $recipientEmail;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param SearchStringField $subject
     * @return \Nzolt\NetSuite\MessageSearchBasic
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}
