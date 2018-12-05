<?php

namespace Nzolt\NetSuite;

class WorkOrderIssueComponentList
{

    /**
     * @var WorkOrderIssueComponent[] $workOrderIssueComponent
     */
    protected $workOrderIssueComponent = null;

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
     * @return WorkOrderIssueComponent[]
     */
    public function getWorkOrderIssueComponent()
    {
      return $this->workOrderIssueComponent;
    }

    /**
     * @param WorkOrderIssueComponent[] $workOrderIssueComponent
     * @return \Nzolt\NetSuite\WorkOrderIssueComponentList
     */
    public function setWorkOrderIssueComponent(array $workOrderIssueComponent = null)
    {
      $this->workOrderIssueComponent = $workOrderIssueComponent;
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
     * @return \Nzolt\NetSuite\WorkOrderIssueComponentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
