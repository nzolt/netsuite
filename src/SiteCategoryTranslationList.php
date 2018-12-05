<?php

namespace Nzolt\NetSuite;

class SiteCategoryTranslationList
{

    /**
     * @var SiteCategoryTranslation[] $translation
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
     * @return SiteCategoryTranslation[]
     */
    public function getTranslation()
    {
      return $this->translation;
    }

    /**
     * @param SiteCategoryTranslation[] $translation
     * @return \Nzolt\NetSuite\SiteCategoryTranslationList
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
     * @return \Nzolt\NetSuite\SiteCategoryTranslationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
