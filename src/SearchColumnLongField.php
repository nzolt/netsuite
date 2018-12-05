<?php

namespace Nzolt\NetSuite;

class SearchColumnLongField extends SearchColumnField
{

    /**
     * @var int $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param int $searchValue
     * @return \Nzolt\NetSuite\SearchColumnLongField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
