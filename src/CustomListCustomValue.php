<?php

namespace Nzolt\NetSuite;

class CustomListCustomValue
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var string $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var int $valueId
     */
    protected $valueId = null;

    /**
     * @var LanguageValueList $valueLanguageValueList
     */
    protected $valueLanguageValueList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Nzolt\NetSuite\CustomListCustomValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return \Nzolt\NetSuite\CustomListCustomValue
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
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
     * @return \Nzolt\NetSuite\CustomListCustomValue
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueId()
    {
      return $this->valueId;
    }

    /**
     * @param int $valueId
     * @return \Nzolt\NetSuite\CustomListCustomValue
     */
    public function setValueId($valueId)
    {
      $this->valueId = $valueId;
      return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getValueLanguageValueList()
    {
      return $this->valueLanguageValueList;
    }

    /**
     * @param LanguageValueList $valueLanguageValueList
     * @return \Nzolt\NetSuite\CustomListCustomValue
     */
    public function setValueLanguageValueList($valueLanguageValueList)
    {
      $this->valueLanguageValueList = $valueLanguageValueList;
      return $this;
    }

}
