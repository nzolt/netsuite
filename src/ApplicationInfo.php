<?php

namespace Nzolt\NetSuite;

class ApplicationInfo
{

    /**
     * @var string $applicationId
     */
    protected $applicationId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
      return $this->applicationId;
    }

    /**
     * @param string $applicationId
     * @return \Nzolt\NetSuite\ApplicationInfo
     */
    public function setApplicationId($applicationId)
    {
      $this->applicationId = $applicationId;
      return $this;
    }

}
