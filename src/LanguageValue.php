<?php

namespace Nzolt\NetSuite;

class LanguageValue
{

    /**
     * @var Language $locale
     */
    protected $locale = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
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
     * @return \Nzolt\NetSuite\LanguageValue
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
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
     * @return \Nzolt\NetSuite\LanguageValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
