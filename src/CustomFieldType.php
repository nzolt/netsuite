<?php

namespace Nzolt\NetSuite;

abstract class CustomFieldType extends Record
{

    /**
     * @var CustomizationFieldType $fieldType
     */
    protected $fieldType = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CustomizationFieldType
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param CustomizationFieldType $fieldType
     * @return \Nzolt\NetSuite\CustomFieldType
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

    /**
     * @return string
     */
    public function getScriptId()
    {
      return $this->scriptId;
    }

    /**
     * @param string $scriptId
     * @return \Nzolt\NetSuite\CustomFieldType
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
