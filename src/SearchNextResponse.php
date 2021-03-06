<?php

namespace Nzolt\NetSuite;

class SearchNextResponse
{

    /**
     * @var SearchResult $searchResult
     */
    protected $searchResult = null;

    /**
     * @param SearchResult $searchResult
     */
    public function __construct($searchResult)
    {
      $this->searchResult = $searchResult;
    }

    /**
     * @return SearchResult
     */
    public function getSearchResult()
    {
      return $this->searchResult;
    }

    /**
     * @param SearchResult $searchResult
     * @return \Nzolt\NetSuite\SearchNextResponse
     */
    public function setSearchResult($searchResult)
    {
      $this->searchResult = $searchResult;
      return $this;
    }

}
