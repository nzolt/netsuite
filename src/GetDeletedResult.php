<?php

namespace Nzolt\NetSuite;

class GetDeletedResult
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
     * @var DeletedRecordList $deletedRecordList
     */
    protected $deletedRecordList = null;

    /**
     * @param Status $status
     * @param DeletedRecordList $deletedRecordList
     */
    public function __construct($status, $deletedRecordList)
    {
      $this->status = $status;
      $this->deletedRecordList = $deletedRecordList;
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
     * @return \Nzolt\NetSuite\GetDeletedResult
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
     * @return \Nzolt\NetSuite\GetDeletedResult
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
     * @return \Nzolt\NetSuite\GetDeletedResult
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
     * @return \Nzolt\NetSuite\GetDeletedResult
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
     * @return \Nzolt\NetSuite\GetDeletedResult
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

    /**
     * @return DeletedRecordList
     */
    public function getDeletedRecordList()
    {
      return $this->deletedRecordList;
    }

    /**
     * @param DeletedRecordList $deletedRecordList
     * @return \Nzolt\NetSuite\GetDeletedResult
     */
    public function setDeletedRecordList($deletedRecordList)
    {
      $this->deletedRecordList = $deletedRecordList;
      return $this;
    }

}
