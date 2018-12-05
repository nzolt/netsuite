<?php

namespace Nzolt\NetSuite;

class GetPostingTransactionSummaryResult
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
     * @var string $operationId
     */
    protected $operationId = null;

    /**
     * @var PostingTransactionSummaryList $postingTransactionSummaryList
     */
    protected $postingTransactionSummaryList = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationId()
    {
      return $this->operationId;
    }

    /**
     * @param string $operationId
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

    /**
     * @return PostingTransactionSummaryList
     */
    public function getPostingTransactionSummaryList()
    {
      return $this->postingTransactionSummaryList;
    }

    /**
     * @param PostingTransactionSummaryList $postingTransactionSummaryList
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResult
     */
    public function setPostingTransactionSummaryList($postingTransactionSummaryList)
    {
      $this->postingTransactionSummaryList = $postingTransactionSummaryList;
      return $this;
    }

}
