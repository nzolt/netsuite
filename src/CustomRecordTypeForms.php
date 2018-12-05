<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeForms
{

    /**
     * @var string $formEdit
     */
    protected $formEdit = null;

    /**
     * @var string $formName
     */
    protected $formName = null;

    /**
     * @var boolean $formPref
     */
    protected $formPref = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFormEdit()
    {
      return $this->formEdit;
    }

    /**
     * @param string $formEdit
     * @return \Nzolt\NetSuite\CustomRecordTypeForms
     */
    public function setFormEdit($formEdit)
    {
      $this->formEdit = $formEdit;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormName()
    {
      return $this->formName;
    }

    /**
     * @param string $formName
     * @return \Nzolt\NetSuite\CustomRecordTypeForms
     */
    public function setFormName($formName)
    {
      $this->formName = $formName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFormPref()
    {
      return $this->formPref;
    }

    /**
     * @param boolean $formPref
     * @return \Nzolt\NetSuite\CustomRecordTypeForms
     */
    public function setFormPref($formPref)
    {
      $this->formPref = $formPref;
      return $this;
    }

}
