<?php

namespace Nzolt\NetSuite;

class CustomList extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var boolean $isOrdered
     */
    protected $isOrdered = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isMatrixOption
     */
    protected $isMatrixOption = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @var boolean $convertToCustomRecord
     */
    protected $convertToCustomRecord = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var CustomListCustomValueList $customValueList
     */
    protected $customValueList = null;

    /**
     * @var CustomListTranslationsList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOrdered()
    {
      return $this->isOrdered;
    }

    /**
     * @param boolean $isOrdered
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setIsOrdered($isOrdered)
    {
      $this->isOrdered = $isOrdered;
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
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMatrixOption()
    {
      return $this->isMatrixOption;
    }

    /**
     * @param boolean $isMatrixOption
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setIsMatrixOption($isMatrixOption)
    {
      $this->isMatrixOption = $isMatrixOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getScriptId()
    {
      return $this->scriptId;
    }

    /**
     * @param string $scriptId
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConvertToCustomRecord()
    {
      return $this->convertToCustomRecord;
    }

    /**
     * @param boolean $convertToCustomRecord
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setConvertToCustomRecord($convertToCustomRecord)
    {
      $this->convertToCustomRecord = $convertToCustomRecord;
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
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return CustomListCustomValueList
     */
    public function getCustomValueList()
    {
      return $this->customValueList;
    }

    /**
     * @param CustomListCustomValueList $customValueList
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setCustomValueList($customValueList)
    {
      $this->customValueList = $customValueList;
      return $this;
    }

    /**
     * @return CustomListTranslationsList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param CustomListTranslationsList $translationsList
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
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
     * @return \Nzolt\NetSuite\CustomList
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
