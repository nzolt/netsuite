<?php

namespace Nzolt\NetSuite;

class CustomRecordTranslations
{

    /**
     * @var Language $locale
     */
    protected $locale = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $label
     */
    protected $label = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param Language $locale
     * @return \Nzolt\NetSuite\CustomRecordTranslations
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Nzolt\NetSuite\CustomRecordTranslations
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Nzolt\NetSuite\CustomRecordTranslations
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
