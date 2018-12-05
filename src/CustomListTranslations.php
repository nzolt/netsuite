<?php

namespace Nzolt\NetSuite;

class CustomListTranslations
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
     * @var string $name
     */
    protected $name = null;

    
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
     * @return \Nzolt\NetSuite\CustomListTranslations
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
     * @return \Nzolt\NetSuite\CustomListTranslations
     */
    public function setLocaleDescription($localeDescription)
    {
      $this->localeDescription = $localeDescription;
      return $this;
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
     * @return \Nzolt\NetSuite\CustomListTranslations
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
