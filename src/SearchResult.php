<?php

namespace Nzolt\NetSuite;

class SearchResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $totalPages
     */
    protected $totalPages = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @var string $searchId
     */
    protected $searchId = null;

    /**
     * @var RecordList $recordList
     */
    protected $recordList = null;

    /**
     * @var SearchRowList $searchRowList
     */
    protected $searchRowList = null;

    /**
     * @param Status $status
     * @param RecordList $recordList
     * @param SearchRowList $searchRowList
     */
    public function __construct($status, $recordList, $searchRowList)
    {
      $this->status = $status;
      $this->recordList = $recordList;
      $this->searchRowList = $searchRowList;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
      return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setTotalPages($totalPages)
    {
      $this->totalPages = $totalPages;
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
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
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
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setSearchId($searchId)
    {
      $this->searchId = $searchId;
      return $this;
    }

    /**
     * @return RecordList
     */
    public function getRecordList()
    {
      return $this->recordList;
    }

    /**
     * @param RecordList $recordList
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setRecordList($recordList)
    {
      $this->recordList = $recordList;
      return $this;
    }

    /**
     * @return SearchRowList
     */
    public function getSearchRowList()
    {
      return $this->searchRowList;
    }

    /**
     * @param SearchRowList $searchRowList
     * @return \Nzolt\NetSuite\SearchResult
     */
    public function setSearchRowList($searchRowList)
    {
      $this->searchRowList = $searchRowList;
      return $this;
    }

}
