<?php

namespace Nzolt\NetSuite;

class CustomRecordTypePermissionsList
{

    /**
     * @var CustomRecordTypePermissions[] $permissions
     */
    protected $permissions = null;

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
     * @return CustomRecordTypePermissions[]
     */
    public function getPermissions()
    {
      return $this->permissions;
    }

    /**
     * @param CustomRecordTypePermissions[] $permissions
     * @return \Nzolt\NetSuite\CustomRecordTypePermissionsList
     */
    public function setPermissions(array $permissions = null)
    {
      $this->permissions = $permissions;
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
     * @return \Nzolt\NetSuite\CustomRecordTypePermissionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
