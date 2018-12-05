<?php

namespace Nzolt\NetSuite;

class ClassTranslation
{

    /**
     * @var string $locale
     */
    protected $locale = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param string $locale
     * @return \Nzolt\NetSuite\ClassTranslation
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
     * @return \Nzolt\NetSuite\ClassTranslation
     */
    public function setLanguage($language)
    {
      $this->language = $language;
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
     * @return \Nzolt\NetSuite\ClassTranslation
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
