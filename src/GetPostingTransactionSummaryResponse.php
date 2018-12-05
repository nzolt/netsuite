<?php

namespace Nzolt\NetSuite;

class GetPostingTransactionSummaryResponse
{

    /**
     * @var GetPostingTransactionSummaryResult $getPostingTransactionSummaryResult
     */
    protected $getPostingTransactionSummaryResult = null;

    /**
     * @param GetPostingTransactionSummaryResult $getPostingTransactionSummaryResult
     */
    public function __construct($getPostingTransactionSummaryResult)
    {
      $this->getPostingTransactionSummaryResult = $getPostingTransactionSummaryResult;
    }

    /**
     * @return GetPostingTransactionSummaryResult
     */
    public function getGetPostingTransactionSummaryResult()
    {
      return $this->getPostingTransactionSummaryResult;
    }

    /**
     * @param GetPostingTransactionSummaryResult $getPostingTransactionSummaryResult
     * @return \Nzolt\NetSuite\GetPostingTransactionSummaryResponse
     */
    public function setGetPostingTransactionSummaryResult($getPostingTransactionSummaryResult)
    {
      $this->getPostingTransactionSummaryResult = $getPostingTransactionSummaryResult;
      return $this;
    }

}
