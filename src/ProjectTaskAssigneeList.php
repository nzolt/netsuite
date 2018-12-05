<?php

namespace Nzolt\NetSuite;

class ProjectTaskAssigneeList
{

    /**
     * @var ProjectTaskAssignee[] $projectTaskAssignee
     */
    protected $projectTaskAssignee = null;

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
     * @return ProjectTaskAssignee[]
     */
    public function getProjectTaskAssignee()
    {
      return $this->projectTaskAssignee;
    }

    /**
     * @param ProjectTaskAssignee[] $projectTaskAssignee
     * @return \Nzolt\NetSuite\ProjectTaskAssigneeList
     */
    public function setProjectTaskAssignee(array $projectTaskAssignee = null)
    {
      $this->projectTaskAssignee = $projectTaskAssignee;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssigneeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
