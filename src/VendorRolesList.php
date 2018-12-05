<?php

namespace Nzolt\NetSuite;

class VendorRolesList
{

    /**
     * @var VendorRoles[] $roles
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
     * @return VendorRoles[]
     */
    public function getRoles()
    {
      return $this->roles;
    }

    /**
     * @param VendorRoles[] $roles
     * @return \Nzolt\NetSuite\VendorRolesList
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
     * @return \Nzolt\NetSuite\VendorRolesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
