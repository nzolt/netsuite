<?php

namespace Nzolt\NetSuite;

class GetSavedSearchRecord
{

    /**
     * @var SearchRecordType $searchType
     */
    protected $searchType = null;

    /**
     * @param SearchRecordType $searchType
     */
    public function __construct($searchType)
    {
      $this->searchType = $searchType;
    }

    /**
     * @return SearchRecordType
     */
    public function getSearchType()
    {
      return $this->searchType;
    }

    /**
     * @param SearchRecordType $searchType
     * @return \Nzolt\NetSuite\GetSavedSearchRecord
     */
    public function setSearchType($searchType)
    {
      $this->searchType = $searchType;
      return $this;
    }

}
