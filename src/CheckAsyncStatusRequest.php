<?php

namespace Nzolt\NetSuite;

class CheckAsyncStatusRequest
{

    /**
     * @var string $jobId
     */
    protected $jobId = null;

    /**
     * @param string $jobId
     */
    public function __construct($jobId)
    {
      $this->jobId = $jobId;
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
     * @return \Nzolt\NetSuite\CheckAsyncStatusRequest
     */
    public function setJobId($jobId)
    {
      $this->jobId = $jobId;
      return $this;
    }

}
