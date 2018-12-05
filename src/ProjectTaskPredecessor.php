<?php

namespace Nzolt\NetSuite;

class ProjectTaskPredecessor
{

    /**
     * @var RecordRef $task
     */
    protected $task = null;

    /**
     * @var ProjectTaskPredecessorPredecessorType $type
     */
    protected $type = null;

    /**
     * @var float $lagDays
     */
    protected $lagDays = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getTask()
    {
      return $this->task;
    }

    /**
     * @param RecordRef $task
     * @return \Nzolt\NetSuite\ProjectTaskPredecessor
     */
    public function setTask($task)
    {
      $this->task = $task;
      return $this;
    }

    /**
     * @return ProjectTaskPredecessorPredecessorType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ProjectTaskPredecessorPredecessorType $type
     * @return \Nzolt\NetSuite\ProjectTaskPredecessor
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return float
     */
    public function getLagDays()
    {
      return $this->lagDays;
    }

    /**
     * @param float $lagDays
     * @return \Nzolt\NetSuite\ProjectTaskPredecessor
     */
    public function setLagDays($lagDays)
    {
      $this->lagDays = $lagDays;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\ProjectTaskPredecessor
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\ProjectTaskPredecessor
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
