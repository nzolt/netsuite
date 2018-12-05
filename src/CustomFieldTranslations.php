<?php

namespace Nzolt\NetSuite;

class CustomFieldTranslations
{

    /**
     * @var Language $locale
     */
    protected $locale = null;

    /**
     * @var string $localeDescription
     */
    protected $localeDescription = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $help
     */
    protected $help = null;

    
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
     * @return \Nzolt\NetSuite\CustomFieldTranslations
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleDescription()
    {
      return $this->localeDescription;
    }

    /**
     * @param string $localeDescription
     * @return \Nzolt\NetSuite\CustomFieldTranslations
     */
    public function setLocaleDescription($localeDescription)
    {
      $this->localeDescription = $localeDescription;
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
     * @return \Nzolt\NetSuite\CustomFieldTranslations
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelp()
    {
      return $this->help;
    }

    /**
     * @param string $help
     * @return \Nzolt\NetSuite\CustomFieldTranslations
     */
    public function setHelp($help)
    {
      $this->help = $help;
      return $this;
    }

}
