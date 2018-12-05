<?php

namespace Nzolt\NetSuite;

class JobResourcesList
{

    /**
     * @var JobResources[] $jobResources
     */
    protected $jobResources = null;

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
     * @return JobResources[]
     */
    public function getJobResources()
    {
      return $this->jobResources;
    }

    /**
     * @param JobResources[] $jobResources
     * @return \Nzolt\NetSuite\JobResourcesList
     */
    public function setJobResources(array $jobResources = null)
    {
      $this->jobResources = $jobResources;
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
     * @return \Nzolt\NetSuite\JobResourcesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
