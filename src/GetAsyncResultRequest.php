<?php

namespace Nzolt\NetSuite;

class GetAsyncResultRequest
{

    /**
     * @var string $jobId
     */
    protected $jobId = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @param string $jobId
     * @param int $pageIndex
     */
    public function __construct($jobId, $pageIndex)
    {
      $this->jobId = $jobId;
      $this->pageIndex = $pageIndex;
    }

    /**
     * @return string
     */
    public function getJobId()
    {
      return $this->jobId;
    }

    /**
     * @param string $jobId
     * @return \Nzolt\NetSuite\GetAsyncResultRequest
     */
    public function setJobId($jobId)
    {
      $this->jobId = $jobId;
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
     * @return \Nzolt\NetSuite\GetAsyncResultRequest
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

}
