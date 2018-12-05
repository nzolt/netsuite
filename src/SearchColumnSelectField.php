<?php

namespace Nzolt\NetSuite;

class SearchColumnSelectField extends SearchColumnField
{

    /**
     * @var RecordRef $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RecordRef
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param RecordRef $searchValue
     * @return \Nzolt\NetSuite\SearchColumnSelectField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
