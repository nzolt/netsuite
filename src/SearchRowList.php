<?php

namespace Nzolt\NetSuite;

class SearchRowList
{

    /**
     * @var SearchRow[] $searchRow
     */
    protected $searchRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchRow[]
     */
    public function getSearchRow()
    {
      return $this->searchRow;
    }

    /**
     * @param SearchRow[] $searchRow
     * @return \Nzolt\NetSuite\SearchRowList
     */
    public function setSearchRow(array $searchRow = null)
    {
      $this->searchRow = $searchRow;
      return $this;
    }

}
