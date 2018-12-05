<?php

namespace Nzolt\NetSuite;

class TranslationList
{

    /**
     * @var Translation[] $translation
     */
    protected $translation = null;

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
     * @return Translation[]
     */
    public function getTranslation()
    {
      return $this->translation;
    }

    /**
     * @param Translation[] $translation
     * @return \Nzolt\NetSuite\TranslationList
     */
    public function setTranslation(array $translation = null)
    {
      $this->translation = $translation;
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
     * @return \Nzolt\NetSuite\TranslationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
