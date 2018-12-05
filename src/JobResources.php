<?php

namespace Nzolt\NetSuite;

class JobResources
{

    /**
     * @var RecordRef $jobResource
     */
    protected $jobResource = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var RecordRef $role
     */
    protected $role = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getJobResource()
    {
      return $this->jobResource;
    }

    /**
     * @param RecordRef $jobResource
     * @return \Nzolt\NetSuite\JobResources
     */
    public function setJobResource($jobResource)
    {
      $this->jobResource = $jobResource;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\JobResources
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param RecordRef $role
     * @return \Nzolt\NetSuite\JobResources
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
