<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeTranslationsList
{

    /**
     * @var CustomRecordTypeTranslations[] $translations
     */
    protected $translations = null;

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
     * @return CustomRecordTypeTranslations[]
     */
    public function getTranslations()
    {
      return $this->translations;
    }

    /**
     * @param CustomRecordTypeTranslations[] $translations
     * @return \Nzolt\NetSuite\CustomRecordTypeTranslationsList
     */
    public function setTranslations(array $translations = null)
    {
      $this->translations = $translations;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeTranslationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
