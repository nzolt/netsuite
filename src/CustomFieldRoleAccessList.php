<?php

namespace Nzolt\NetSuite;

class CustomFieldRoleAccessList
{

    /**
     * @var CustomFieldRoleAccess[] $roleAccess
     */
    protected $roleAccess = null;

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
     * @return CustomFieldRoleAccess[]
     */
    public function getRoleAccess()
    {
      return $this->roleAccess;
    }

    /**
     * @param CustomFieldRoleAccess[] $roleAccess
     * @return \Nzolt\NetSuite\CustomFieldRoleAccessList
     */
    public function setRoleAccess(array $roleAccess = null)
    {
      $this->roleAccess = $roleAccess;
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
     * @return \Nzolt\NetSuite\CustomFieldRoleAccessList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
