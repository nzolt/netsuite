<?php

namespace Nzolt\NetSuite;

class AsyncStatusResult
{

    /**
     * @var string $jobId
     */
    protected $jobId = null;

    /**
     * @var AsyncStatusType $status
     */
    protected $status = null;

    /**
     * @var float $percentCompleted
     */
    protected $percentCompleted = null;

    /**
     * @var float $estRemainingDuration
     */
    protected $estRemainingDuration = null;

    /**
     * @param string $jobId
     * @param AsyncStatusType $status
     * @param float $percentCompleted
     * @param float $estRemainingDuration
     */
    public function __construct($jobId, $status, $percentCompleted, $estRemainingDuration)
    {
      $this->jobId = $jobId;
      $this->status = $status;
      $this->percentCompleted = $percentCompleted;
      $this->estRemainingDuration = $estRemainingDuration;
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
     * @return \Nzolt\NetSuite\AsyncStatusResult
     */
    public function setJobId($jobId)
    {
      $this->jobId = $jobId;
      return $this;
    }

    /**
     * @return AsyncStatusType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param AsyncStatusType $status
     * @return \Nzolt\NetSuite\AsyncStatusResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentCompleted()
    {
      return $this->percentCompleted;
    }

    /**
     * @param float $percentCompleted
     * @return \Nzolt\NetSuite\AsyncStatusResult
     */
    public function setPercentCompleted($percentCompleted)
    {
      $this->percentCompleted = $percentCompleted;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstRemainingDuration()
    {
      return $this->estRemainingDuration;
    }

    /**
     * @param float $estRemainingDuration
     * @return \Nzolt\NetSuite\AsyncStatusResult
     */
    public function setEstRemainingDuration($estRemainingDuration)
    {
      $this->estRemainingDuration = $estRemainingDuration;
      return $this;
    }

}
