<?php

namespace Nzolt\NetSuite;

class GetPostingTransactionSummaryRequest
{

    /**
     * @var PostingTransactionSummaryField $fields
     */
    protected $fields = null;

    /**
     * @var PostingTransactionSummaryFilter $filters
     */
    protected $filters = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @var string $operationId
     */
    protected $operationId = null;

    /**
     * @param int $pageIndex
     */
    public function __construct($pageIndex)
    {
      $this->pageIndex = $pageIndex;
    }

    /**
     * @return PostingTransactionSummaryField
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param PostingTransactionSummaryField $fields
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return PostingTransactionSummaryFilter
     */
    public function getFilters()
    {
      return $this->filters;
    }

    /**
     * @param PostingTransactionSummaryFilter $filters
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryRequest
     */
    public function setFilters($filters)
    {
      $this->filters = $filters;
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryRequest
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
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
