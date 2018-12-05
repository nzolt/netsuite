<?php

namespace Nzolt\NetSuite;

class GetSavedSearchResponse
{

    /**
     * @var GetSavedSearchResult $getSavedSearchResult
     */
    protected $getSavedSearchResult = null;

    /**
     * @param GetSavedSearchResult $getSavedSearchResult
     */
    public function __construct($getSavedSearchResult)
    {
      $this->getSavedSearchResult = $getSavedSearchResult;
    }

    /**
     * @return GetSavedSearchResult
     */
    public function getGetSavedSearchResult()
    {
      return $this->getSavedSearchResult;
    }

    /**
     * @param GetSavedSearchResult $getSavedSearchResult
     * @return \Nzolt\NetSuite\GetSavedSearchResponse
     */
    public function setGetSavedSearchResult($getSavedSearchResult)
    {
      $this->getSavedSearchResult = $getSavedSearchResult;
      return $this;
    }

}
