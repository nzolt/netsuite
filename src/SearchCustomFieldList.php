<?php

namespace Nzolt\NetSuite;

class SearchCustomFieldList
{

    /**
     * @var SearchCustomField[] $customField
     */
    protected $customField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchCustomField[]
     */
    public function getCustomField()
    {
      return $this->customField;
    }

    /**
     * @param SearchCustomField[] $customField
     * @return \Nzolt\NetSuite\SearchCustomFieldList
     */
    public function setCustomField(array $customField = null)
    {
      $this->customField = $customField;
      return $this;
    }

}
