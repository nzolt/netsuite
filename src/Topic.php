<?php

namespace Nzolt\NetSuite;

class Topic extends Record
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $parentTopic
     */
    protected $parentTopic = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $longDescription
     */
    protected $longDescription = null;

    /**
     * @var TopicSolutionList $solutionList
     */
    protected $solutionList = null;

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
     * @return \Nzolt\NetSuite\Topic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentTopic()
    {
      return $this->parentTopic;
    }

    /**
     * @param RecordRef $parentTopic
     * @return \Nzolt\NetSuite\Topic
     */
    public function setParentTopic($parentTopic)
    {
      $this->parentTopic = $parentTopic;
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
     * @return \Nzolt\NetSuite\Topic
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
     * @return \Nzolt\NetSuite\Topic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return \Nzolt\NetSuite\Topic
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return TopicSolutionList
     */
    public function getSolutionList()
    {
      return $this->solutionList;
    }

    /**
     * @param TopicSolutionList $solutionList
     * @return \Nzolt\NetSuite\Topic
     */
    public function setSolutionList($solutionList)
    {
      $this->solutionList = $solutionList;
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
     * @return \Nzolt\NetSuite\Topic
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
     * @return \Nzolt\NetSuite\Topic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
