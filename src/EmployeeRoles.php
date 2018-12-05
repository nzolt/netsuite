<?php

namespace Nzolt\NetSuite;

class EmployeeRoles
{

    /**
     * @var RecordRef $selectedRole
     */
    protected $selectedRole = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getSelectedRole()
    {
      return $this->selectedRole;
    }

    /**
     * @param RecordRef $selectedRole
     * @return \Nzolt\NetSuite\EmployeeRoles
     */
    public function setSelectedRole($selectedRole)
    {
      $this->selectedRole = $selectedRole;
      return $this;
    }

}
