<?php

namespace Nzolt\NetSuite;

class SearchColumnStringField extends SearchColumnField
{

    /**
     * @var string $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string $searchValue
     * @return \Nzolt\NetSuite\SearchColumnStringField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
