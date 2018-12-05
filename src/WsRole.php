<?php

namespace Nzolt\NetSuite;

class WsRole
{

    /**
     * @var RecordRef $role
     */
    protected $role = null;

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $isLoggedInRole
     */
    protected $isLoggedInRole = null;

    
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
     * @return \Nzolt\NetSuite\WsRole
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return \Nzolt\NetSuite\WsRole
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\WsRole
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLoggedInRole()
    {
      return $this->isLoggedInRole;
    }

    /**
     * @param boolean $isLoggedInRole
     * @return \Nzolt\NetSuite\WsRole
     */
    public function setIsLoggedInRole($isLoggedInRole)
    {
      $this->isLoggedInRole = $isLoggedInRole;
      return $this;
    }

}
