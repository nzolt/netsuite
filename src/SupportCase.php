<?php

namespace Nzolt\NetSuite;

class SupportCase extends Record
{

    /**
     * @var string $escalationMessage
     */
    protected $escalationMessage = null;

    /**
     * @var \DateTime $lastReopenedDate
     */
    protected $lastReopenedDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $incomingMessage
     */
    protected $incomingMessage = null;

    /**
     * @var RecordRef $insertSolution
     */
    protected $insertSolution = null;

    /**
     * @var string $outgoingMessage
     */
    protected $outgoingMessage = null;

    /**
     * @var string $searchSolution
     */
    protected $searchSolution = null;

    /**
     * @var boolean $emailForm
     */
    protected $emailForm = null;

    /**
     * @var string $newSolutionFromMsg
     */
    protected $newSolutionFromMsg = null;

    /**
     * @var boolean $internalOnly
     */
    protected $internalOnly = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $caseNumber
     */
    protected $caseNumber = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $lastMessageDate
     */
    protected $lastMessageDate = null;

    /**
     * @var RecordRef $company
     */
    protected $company = null;

    /**
     * @var RecordRef $profile
     */
    protected $profile = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var RecordRef $product
     */
    protected $product = null;

    /**
     * @var RecordRef $module
     */
    protected $module = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var string $inboundEmail
     */
    protected $inboundEmail = null;

    /**
     * @var RecordRef $issue
     */
    protected $issue = null;

    /**
     * @var RecordRef $status
     */
    protected $status = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $priority
     */
    protected $priority = null;

    /**
     * @var RecordRef $origin
     */
    protected $origin = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var RecordRef $assigned
     */
    protected $assigned = null;

    /**
     * @var boolean $helpDesk
     */
    protected $helpDesk = null;

    /**
     * @var EmailEmployeesList $emailEmployeesList
     */
    protected $emailEmployeesList = null;

    /**
     * @var SupportCaseEscalateToList $escalateToList
     */
    protected $escalateToList = null;

    /**
     * @var SupportCaseTimeItemList $timeItemList
     */
    protected $timeItemList = null;

    /**
     * @var SupportCaseSolutionsList $solutionsList
     */
    protected $solutionsList = null;

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
    public function getEscalationMessage()
    {
      return $this->escalationMessage;
    }

    /**
     * @param string $escalationMessage
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setEscalationMessage($escalationMessage)
    {
      $this->escalationMessage = $escalationMessage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReopenedDate()
    {
      if ($this->lastReopenedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastReopenedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastReopenedDate
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setLastReopenedDate(\DateTime $lastReopenedDate = null)
    {
      if ($lastReopenedDate == null) {
       $this->lastReopenedDate = null;
      } else {
        $this->lastReopenedDate = $lastReopenedDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return string
     */
    public function getIncomingMessage()
    {
      return $this->incomingMessage;
    }

    /**
     * @param string $incomingMessage
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setIncomingMessage($incomingMessage)
    {
      $this->incomingMessage = $incomingMessage;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertSolution()
    {
      return $this->insertSolution;
    }

    /**
     * @param RecordRef $insertSolution
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setInsertSolution($insertSolution)
    {
      $this->insertSolution = $insertSolution;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutgoingMessage()
    {
      return $this->outgoingMessage;
    }

    /**
     * @param string $outgoingMessage
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setOutgoingMessage($outgoingMessage)
    {
      $this->outgoingMessage = $outgoingMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchSolution()
    {
      return $this->searchSolution;
    }

    /**
     * @param string $searchSolution
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setSearchSolution($searchSolution)
    {
      $this->searchSolution = $searchSolution;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailForm()
    {
      return $this->emailForm;
    }

    /**
     * @param boolean $emailForm
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setEmailForm($emailForm)
    {
      $this->emailForm = $emailForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewSolutionFromMsg()
    {
      return $this->newSolutionFromMsg;
    }

    /**
     * @param string $newSolutionFromMsg
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setNewSolutionFromMsg($newSolutionFromMsg)
    {
      $this->newSolutionFromMsg = $newSolutionFromMsg;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternalOnly()
    {
      return $this->internalOnly;
    }

    /**
     * @param boolean $internalOnly
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setInternalOnly($internalOnly)
    {
      $this->internalOnly = $internalOnly;
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaseNumber()
    {
      return $this->caseNumber;
    }

    /**
     * @param string $caseNumber
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setCaseNumber($caseNumber)
    {
      $this->caseNumber = $caseNumber;
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \DateTime
     */
    public function getLastMessageDate()
    {
      if ($this->lastMessageDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastMessageDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastMessageDate
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setLastMessageDate(\DateTime $lastMessageDate = null)
    {
      if ($lastMessageDate == null) {
       $this->lastMessageDate = null;
      } else {
        $this->lastMessageDate = $lastMessageDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProfile()
    {
      return $this->profile;
    }

    /**
     * @param RecordRef $profile
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param RecordRef $product
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param RecordRef $module
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setModule($module)
    {
      $this->module = $module;
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param RecordRef $serialNumber
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundEmail()
    {
      return $this->inboundEmail;
    }

    /**
     * @param string $inboundEmail
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setInboundEmail($inboundEmail)
    {
      $this->inboundEmail = $inboundEmail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssue()
    {
      return $this->issue;
    }

    /**
     * @param RecordRef $issue
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setIssue($issue)
    {
      $this->issue = $issue;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param RecordRef $status
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param RecordRef $priority
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param RecordRef $origin
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHelpDesk()
    {
      return $this->helpDesk;
    }

    /**
     * @param boolean $helpDesk
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setHelpDesk($helpDesk)
    {
      $this->helpDesk = $helpDesk;
      return $this;
    }

    /**
     * @return EmailEmployeesList
     */
    public function getEmailEmployeesList()
    {
      return $this->emailEmployeesList;
    }

    /**
     * @param EmailEmployeesList $emailEmployeesList
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setEmailEmployeesList($emailEmployeesList)
    {
      $this->emailEmployeesList = $emailEmployeesList;
      return $this;
    }

    /**
     * @return SupportCaseEscalateToList
     */
    public function getEscalateToList()
    {
      return $this->escalateToList;
    }

    /**
     * @param SupportCaseEscalateToList $escalateToList
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setEscalateToList($escalateToList)
    {
      $this->escalateToList = $escalateToList;
      return $this;
    }

    /**
     * @return SupportCaseTimeItemList
     */
    public function getTimeItemList()
    {
      return $this->timeItemList;
    }

    /**
     * @param SupportCaseTimeItemList $timeItemList
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setTimeItemList($timeItemList)
    {
      $this->timeItemList = $timeItemList;
      return $this;
    }

    /**
     * @return SupportCaseSolutionsList
     */
    public function getSolutionsList()
    {
      return $this->solutionsList;
    }

    /**
     * @param SupportCaseSolutionsList $solutionsList
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setSolutionsList($solutionsList)
    {
      $this->solutionsList = $solutionsList;
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \Nzolt\NetSuite\SupportCase
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
     * @return \Nzolt\NetSuite\SupportCase
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
