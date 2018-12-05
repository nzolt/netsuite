<?php

namespace Nzolt\NetSuite;

class ProjectTaskPredecessorList
{

    /**
     * @var ProjectTaskPredecessor[] $projectTaskPredecessor
     */
    protected $projectTaskPredecessor = null;

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
     * @return ProjectTaskPredecessor[]
     */
    public function getProjectTaskPredecessor()
    {
      return $this->projectTaskPredecessor;
    }

    /**
     * @param ProjectTaskPredecessor[] $projectTaskPredecessor
     * @return \Nzolt\NetSuite\ProjectTaskPredecessorList
     */
    public function setProjectTaskPredecessor(array $projectTaskPredecessor = null)
    {
      $this->projectTaskPredecessor = $projectTaskPredecessor;
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
     * @return \Nzolt\NetSuite\ProjectTaskPredecessorList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
