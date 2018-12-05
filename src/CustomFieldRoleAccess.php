<?php

namespace Nzolt\NetSuite;

class CustomFieldRoleAccess
{

    /**
     * @var RecordRef $role
     */
    protected $role = null;

    /**
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\CustomFieldRoleAccess
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return \Nzolt\NetSuite\CustomFieldRoleAccess
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel()
    {
      return $this->searchLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return \Nzolt\NetSuite\CustomFieldRoleAccess
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
      return $this;
    }

}
