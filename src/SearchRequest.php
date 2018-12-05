<?php

namespace Nzolt\NetSuite;

class SearchRequest
{

    /**
     * @var SearchRecord $searchRecord
     */
    protected $searchRecord = null;

    /**
     * @param SearchRecord $searchRecord
     */
    public function __construct($searchRecord)
    {
      $this->searchRecord = $searchRecord;
    }

    /**
     * @return SearchRecord
     */
    public function getSearchRecord()
    {
      return $this->searchRecord;
    }

    /**
     * @param SearchRecord $searchRecord
     * @return \Nzolt\NetSuite\SearchRequest
     */
    public function setSearchRecord($searchRecord)
    {
      $this->searchRecord = $searchRecord;
      return $this;
    }

}
