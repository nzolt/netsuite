<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskPredecessor
{

    /**
     * @var RecordRef $task
     */
    protected $task = null;

    /**
     * @var ManufacturingOperationTaskPredecessorPredecessorType $type
     */
    protected $type = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var ManufacturingLagType $lagType
     */
    protected $lagType = null;

    /**
     * @var int $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var string $lagUnits
     */
    protected $lagUnits = null;

    
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
     */
    public function setTask($task)
    {
      $this->task = $task;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskPredecessorPredecessorType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ManufacturingOperationTaskPredecessorPredecessorType $type
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
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

    /**
     * @return ManufacturingLagType
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param ManufacturingLagType $lagType
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
     */
    public function setLagType($lagType)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return int
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param int $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
     */
    public function setLagAmount($lagAmount)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param string $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessor
     */
    public function setLagUnits($lagUnits)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

}
