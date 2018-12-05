<?php

namespace Nzolt\NetSuite;

class CustomRecordTranslationsList
{

    /**
     * @var CustomRecordTranslations[] $customRecordTranslations
     */
    protected $customRecordTranslations = null;

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
     * @return CustomRecordTranslations[]
     */
    public function getCustomRecordTranslations()
    {
      return $this->customRecordTranslations;
    }

    /**
     * @param CustomRecordTranslations[] $customRecordTranslations
     * @return \Nzolt\NetSuite\CustomRecordTranslationsList
     */
    public function setCustomRecordTranslations(array $customRecordTranslations = null)
    {
      $this->customRecordTranslations = $customRecordTranslations;
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
     * @return \Nzolt\NetSuite\CustomRecordTranslationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
