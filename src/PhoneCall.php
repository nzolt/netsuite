<?php

namespace Nzolt\NetSuite;

class PhoneCall extends Record
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var RecordRef $company
     */
    protected $company = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var RecordRef $supportCase
     */
    protected $supportCase = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var RecordRef $milestone
     */
    protected $milestone = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var RecordRef $assigned
     */
    protected $assigned = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $timedEvent
     */
    protected $timedEvent = null;

    /**
     * @var \DateTime $completedDate
     */
    protected $completedDate = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var PhoneCallStatus $status
     */
    protected $status = null;

    /**
     * @var PhoneCallPriority $priority
     */
    protected $priority = null;

    /**
     * @var boolean $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var PhoneCallReminderType $reminderType
     */
    protected $reminderType = null;

    /**
     * @var PhoneCallReminderMinutes $reminderMinutes
     */
    protected $reminderMinutes = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var PhoneCallContactList $contactList
     */
    protected $contactList = null;

    /**
     * @var PhoneCallTimeItemList $timeItemList
     */
    protected $timeItemList = null;

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
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param RecordRef $company
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param RecordRef $contact
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupportCase()
    {
      return $this->supportCase;
    }

    /**
     * @param RecordRef $supportCase
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setSupportCase($supportCase)
    {
      $this->supportCase = $supportCase;
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
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMilestone()
    {
      return $this->milestone;
    }

    /**
     * @param RecordRef $milestone
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setMilestone($milestone)
    {
      $this->milestone = $milestone;
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
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
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
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param RecordRef $assigned
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->sendEmail;
    }

    /**
     * @param boolean $sendEmail
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTimedEvent()
    {
      return $this->timedEvent;
    }

    /**
     * @param boolean $timedEvent
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setTimedEvent($timedEvent)
    {
      $this->timedEvent = $timedEvent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
      if ($this->completedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->completedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $completedDate
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setCompletedDate(\DateTime $completedDate = null)
    {
      if ($completedDate == null) {
       $this->completedDate = null;
      } else {
        $this->completedDate = $completedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return PhoneCallStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param PhoneCallStatus $status
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return PhoneCallPriority
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param PhoneCallPriority $priority
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param boolean $accessLevel
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return PhoneCallReminderType
     */
    public function getReminderType()
    {
      return $this->reminderType;
    }

    /**
     * @param PhoneCallReminderType $reminderType
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setReminderType($reminderType)
    {
      $this->reminderType = $reminderType;
      return $this;
    }

    /**
     * @return PhoneCallReminderMinutes
     */
    public function getReminderMinutes()
    {
      return $this->reminderMinutes;
    }

    /**
     * @param PhoneCallReminderMinutes $reminderMinutes
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setReminderMinutes($reminderMinutes)
    {
      $this->reminderMinutes = $reminderMinutes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\PhoneCall
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
     * @return PhoneCallContactList
     */
    public function getContactList()
    {
      return $this->contactList;
    }

    /**
     * @param PhoneCallContactList $contactList
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setContactList($contactList)
    {
      $this->contactList = $contactList;
      return $this;
    }

    /**
     * @return PhoneCallTimeItemList
     */
    public function getTimeItemList()
    {
      return $this->timeItemList;
    }

    /**
     * @param PhoneCallTimeItemList $timeItemList
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setTimeItemList($timeItemList)
    {
      $this->timeItemList = $timeItemList;
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
     * @return \Nzolt\NetSuite\PhoneCall
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
     * @return \Nzolt\NetSuite\PhoneCall
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
     * @return \Nzolt\NetSuite\PhoneCall
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
