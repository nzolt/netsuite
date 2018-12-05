<?php

namespace Nzolt\NetSuite;

class SearchColumnCustomFieldList
{

    /**
     * @var SearchColumnCustomField[] $customField
     */
    protected $customField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnCustomField[]
     */
    public function getCustomField()
    {
      return $this->customField;
    }

    /**
     * @param SearchColumnCustomField[] $customField
     * @return \Nzolt\NetSuite\SearchColumnCustomFieldList
     */
    public function setCustomField(array $customField = null)
    {
      $this->customField = $customField;
      return $this;
    }

}
