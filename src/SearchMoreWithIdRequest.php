<?php

namespace Nzolt\NetSuite;

class SearchMoreWithIdRequest
{

    /**
     * @var string $searchId
     */
    protected $searchId = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @param string $searchId
     * @param int $pageIndex
     */
    public function __construct($searchId, $pageIndex)
    {
      $this->searchId = $searchId;
      $this->pageIndex = $pageIndex;
    }

    /**
     * @return string
     */
    public function getSearchId()
    {
      return $this->searchId;
    }

    /**
     * @param string $searchId
     * @return \Nzolt\NetSuite\SearchMoreWithIdRequest
     */
    public function setSearchId($searchId)
    {
      $this->searchId = $searchId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
      return $this->pageIndex;
    }

    /**
     * @param int $pageIndex
     * @return \Nzolt\NetSuite\SearchMoreWithIdRequest
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

}
