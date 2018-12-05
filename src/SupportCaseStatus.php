<?php

namespace Nzolt\NetSuite;

class SupportCaseStatus extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $insertBefore
     */
    protected $insertBefore = null;

    /**
     * @var SupportCaseStatusStage $stage
     */
    protected $stage = null;

    /**
     * @var boolean $caseOnHold
     */
    protected $caseOnHold = null;

    /**
     * @var boolean $autoCloseCase
     */
    protected $autoCloseCase = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertBefore()
    {
      return $this->insertBefore;
    }

    /**
     * @param RecordRef $insertBefore
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setInsertBefore($insertBefore)
    {
      $this->insertBefore = $insertBefore;
      return $this;
    }

    /**
     * @return SupportCaseStatusStage
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SupportCaseStatusStage $stage
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCaseOnHold()
    {
      return $this->caseOnHold;
    }

    /**
     * @param boolean $caseOnHold
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setCaseOnHold($caseOnHold)
    {
      $this->caseOnHold = $caseOnHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoCloseCase()
    {
      return $this->autoCloseCase;
    }

    /**
     * @param boolean $autoCloseCase
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setAutoCloseCase($autoCloseCase)
    {
      $this->autoCloseCase = $autoCloseCase;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\SupportCaseStatus
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
     * @return \Nzolt\NetSuite\SupportCaseStatus
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
