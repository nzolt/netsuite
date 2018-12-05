<?php

namespace Nzolt\NetSuite;

class WorkOrderCompletionOperationList
{

    /**
     * @var WorkOrderCompletionOperation[] $workOrderCompletionOperation
     */
    protected $workOrderCompletionOperation = null;

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
     * @return WorkOrderCompletionOperation[]
     */
    public function getWorkOrderCompletionOperation()
    {
      return $this->workOrderCompletionOperation;
    }

    /**
     * @param WorkOrderCompletionOperation[] $workOrderCompletionOperation
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperationList
     */
    public function setWorkOrderCompletionOperation(array $workOrderCompletionOperation = null)
    {
      $this->workOrderCompletionOperation = $workOrderCompletionOperation;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
