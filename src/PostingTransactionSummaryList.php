<?php

namespace Nzolt\NetSuite;

class PostingTransactionSummaryList
{

    /**
     * @var PostingTransactionSummary[] $postingTransactionSummary
     */
    protected $postingTransactionSummary = null;

    /**
     * @param PostingTransactionSummary[] $postingTransactionSummary
     */
    public function __construct(array $postingTransactionSummary)
    {
      $this->postingTransactionSummary = $postingTransactionSummary;
    }

    /**
     * @return PostingTransactionSummary[]
     */
    public function getPostingTransactionSummary()
    {
      return $this->postingTransactionSummary;
    }

    /**
     * @param PostingTransactionSummary[] $postingTransactionSummary
     * @return \Nzolt\NetSuite\PostingTransactionSummaryList
     */
    public function setPostingTransactionSummary(array $postingTransactionSummary)
    {
      $this->postingTransactionSummary = $postingTransactionSummary;
      return $this;
    }

}
