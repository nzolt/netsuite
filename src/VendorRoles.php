<?php

namespace Nzolt\NetSuite;

class VendorRoles
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
     * @return \Nzolt\NetSuite\VendorRoles
     */
    public function setSelectedRole($selectedRole)
    {
      $this->selectedRole = $selectedRole;
      return $this;
    }

}
