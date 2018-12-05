<?php

namespace Nzolt\NetSuite;

class JobPercentCompleteOverrideList
{

    /**
     * @var JobPercentCompleteOverride[] $jobPercentCompleteOverride
     */
    protected $jobPercentCompleteOverride = null;

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
     * @return JobPercentCompleteOverride[]
     */
    public function getJobPercentCompleteOverride()
    {
      return $this->jobPercentCompleteOverride;
    }

    /**
     * @param JobPercentCompleteOverride[] $jobPercentCompleteOverride
     * @return \Nzolt\NetSuite\JobPercentCompleteOverrideList
     */
    public function setJobPercentCompleteOverride(array $jobPercentCompleteOverride = null)
    {
      $this->jobPercentCompleteOverride = $jobPercentCompleteOverride;
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
     * @return \Nzolt\NetSuite\JobPercentCompleteOverrideList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
