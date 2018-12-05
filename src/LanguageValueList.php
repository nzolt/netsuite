<?php

namespace Nzolt\NetSuite;

class LanguageValueList
{

    /**
     * @var LanguageValue[] $languageValue
     */
    protected $languageValue = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return LanguageValue[]
     */
    public function getLanguageValue()
    {
      return $this->languageValue;
    }

    /**
     * @param LanguageValue[] $languageValue
     * @return \Nzolt\NetSuite\LanguageValueList
     */
    public function setLanguageValue(array $languageValue = null)
    {
      $this->languageValue = $languageValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\LanguageValueList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
