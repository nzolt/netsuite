<?php

namespace Nzolt\NetSuite;

class WsRoleList
{

    /**
     * @var WsRole[] $wsRole
     */
    protected $wsRole = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WsRole[]
     */
    public function getWsRole()
    {
      return $this->wsRole;
    }

    /**
     * @param WsRole[] $wsRole
     * @return \Nzolt\NetSuite\WsRoleList
     */
    public function setWsRole(array $wsRole = null)
    {
      $this->wsRole = $wsRole;
      return $this;
    }

}
