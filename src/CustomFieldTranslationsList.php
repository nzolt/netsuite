<?php

namespace Nzolt\NetSuite;

class CustomFieldTranslationsList
{

    /**
     * @var CustomFieldTranslations[] $translations
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
     * @return CustomFieldTranslations[]
     */
    public function getTranslations()
    {
      return $this->translations;
    }

    /**
     * @param CustomFieldTranslations[] $translations
     * @return \Nzolt\NetSuite\CustomFieldTranslationsList
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
     * @return \Nzolt\NetSuite\CustomFieldTranslationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
