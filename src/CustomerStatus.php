<?php

namespace Nzolt\NetSuite;

class CustomerStatus extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var CustomerStatusStage $stage
     */
    protected $stage = null;

    /**
     * @var float $probability
     */
    protected $probability = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $includeInLeadReports
     */
    protected $includeInLeadReports = null;

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
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return CustomerStatusStage
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param CustomerStatusStage $stage
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return float
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param float $probability
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setProbability($probability)
    {
      $this->probability = $probability;
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
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInLeadReports()
    {
      return $this->includeInLeadReports;
    }

    /**
     * @param boolean $includeInLeadReports
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setIncludeInLeadReports($includeInLeadReports)
    {
      $this->includeInLeadReports = $includeInLeadReports;
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
     * @return \Nzolt\NetSuite\CustomerStatus
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
     * @return \Nzolt\NetSuite\CustomerStatus
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
     * @return \Nzolt\NetSuite\CustomerStatus
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
