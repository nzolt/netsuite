<?php

namespace Nzolt\NetSuite;

class WorkOrderCompletionComponentList
{

    /**
     * @var WorkOrderCompletionComponent[] $workOrderCompletionComponent
     */
    protected $workOrderCompletionComponent = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return WorkOrderCompletionComponent[]
     */
    public function getWorkOrderCompletionComponent()
    {
      return $this->workOrderCompletionComponent;
    }

    /**
     * @param WorkOrderCompletionComponent[] $workOrderCompletionComponent
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponentList
     */
    public function setWorkOrderCompletionComponent(array $workOrderCompletionComponent = null)
    {
      $this->workOrderCompletionComponent = $workOrderCompletionComponent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
