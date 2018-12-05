<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeFormsList
{

    /**
     * @var CustomRecordTypeForms[] $forms
     */
    protected $forms = null;

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
     * @return CustomRecordTypeForms[]
     */
    public function getForms()
    {
      return $this->forms;
    }

    /**
     * @param CustomRecordTypeForms[] $forms
     * @return \Nzolt\NetSuite\CustomRecordTypeFormsList
     */
    public function setForms(array $forms = null)
    {
      $this->forms = $forms;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeFormsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
