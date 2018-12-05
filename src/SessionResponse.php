<?php

namespace Nzolt\NetSuite;

class SessionResponse
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var RecordRef $userId
     */
    protected $userId = null;

    /**
     * @var WsRoleList $wsRoleList
     */
    protected $wsRoleList = null;

    /**
     * @param Status $status
     * @param WsRoleList $wsRoleList
     */
    public function __construct($status, $wsRoleList)
    {
      $this->status = $status;
      $this->wsRoleList = $wsRoleList;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\SessionResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param RecordRef $userId
     * @return \Nzolt\NetSuite\SessionResponse
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return WsRoleList
     */
    public function getWsRoleList()
    {
      return $this->wsRoleList;
    }

    /**
     * @param WsRoleList $wsRoleList
     * @return \Nzolt\NetSuite\SessionResponse
     */
    public function setWsRoleList($wsRoleList)
    {
      $this->wsRoleList = $wsRoleList;
      return $this;
    }

}
