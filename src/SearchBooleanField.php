<?php

namespace Nzolt\NetSuite;

class SearchBooleanField
{

    /**
     * @var boolean $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param boolean $searchValue
     * @return \Nzolt\NetSuite\SearchBooleanField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
