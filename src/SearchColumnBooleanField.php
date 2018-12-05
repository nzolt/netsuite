<?php

namespace Nzolt\NetSuite;

class SearchColumnBooleanField extends SearchColumnField
{

    /**
     * @var boolean $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nzolt\NetSuite\SearchColumnBooleanField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
