<?php

namespace Nzolt\NetSuite;

class CustomListTranslationsList
{

    /**
     * @var CustomListTranslations[] $translations
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
     * @return CustomListTranslations[]
     */
    public function getTranslations()
    {
      return $this->translations;
    }

    /**
     * @param CustomListTranslations[] $translations
     * @return \Nzolt\NetSuite\CustomListTranslationsList
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
     * @return \Nzolt\NetSuite\CustomListTranslationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
