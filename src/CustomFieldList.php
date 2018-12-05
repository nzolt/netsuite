<?php

namespace Nzolt\NetSuite;

class CustomFieldList
{

    /**
     * @var CustomFieldRef[] $customField
     */
    protected $customField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomFieldRef[]
     */
    public function getCustomField()
    {
      return $this->customField;
    }

    /**
     * @param CustomFieldRef[] $customField
     * @return \Nzolt\NetSuite\CustomFieldList
     */
    public function setCustomField(array $customField = null)
    {
      $this->customField = $customField;
      return $this;
    }

}
