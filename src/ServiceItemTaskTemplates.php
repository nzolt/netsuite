<?php

namespace Nzolt\NetSuite;

class ServiceItemTaskTemplates
{

    /**
     * @var string $taskName
     */
    protected $taskName = null;

    /**
     * @var int $taskStartOffset
     */
    protected $taskStartOffset = null;

    /**
     * @var Duration $taskDuration
     */
    protected $taskDuration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTaskName()
    {
      return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return \Nzolt\NetSuite\ServiceItemTaskTemplates
     */
    public function setTaskName($taskName)
    {
      $this->taskName = $taskName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaskStartOffset()
    {
      return $this->taskStartOffset;
    }

    /**
     * @param int $taskStartOffset
     * @return \Nzolt\NetSuite\ServiceItemTaskTemplates
     */
    public function setTaskStartOffset($taskStartOffset)
    {
      $this->taskStartOffset = $taskStartOffset;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getTaskDuration()
    {
      return $this->taskDuration;
    }

    /**
     * @param Duration $taskDuration
     * @return \Nzolt\NetSuite\ServiceItemTaskTemplates
     */
    public function setTaskDuration($taskDuration)
    {
      $this->taskDuration = $taskDuration;
      return $this;
    }

}
