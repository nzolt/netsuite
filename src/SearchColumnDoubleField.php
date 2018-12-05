<?php

namespace Nzolt\NetSuite;

class SearchColumnDoubleField extends SearchColumnField
{

    /**
     * @var float $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param float $searchValue
     * @return \Nzolt\NetSuite\SearchColumnDoubleField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
