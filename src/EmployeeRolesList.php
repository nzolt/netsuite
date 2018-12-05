<?php

namespace Nzolt\NetSuite;

class EmployeeRolesList
{

    /**
     * @var EmployeeRoles[] $roles
     */
    protected $roles = null;

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
     * @return EmployeeRoles[]
     */
    public function getRoles()
    {
      return $this->roles;
    }

    /**
     * @param EmployeeRoles[] $roles
     * @return \Nzolt\NetSuite\EmployeeRolesList
     */
    public function setRoles(array $roles = null)
    {
      $this->roles = $roles;
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
     * @return \Nzolt\NetSuite\EmployeeRolesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
