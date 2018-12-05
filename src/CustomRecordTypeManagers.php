<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeManagers
{

    /**
     * @var RecordRef $managerEmp
     */
    protected $managerEmp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getManagerEmp()
    {
      return $this->managerEmp;
    }

    /**
     * @param RecordRef $managerEmp
     * @return \Nzolt\NetSuite\CustomRecordTypeManagers
     */
    public function setManagerEmp($managerEmp)
    {
      $this->managerEmp = $managerEmp;
      return $this;
    }

}
