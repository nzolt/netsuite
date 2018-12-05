<?php

namespace Nzolt\NetSuite;

class ChangePasswordRequest
{

    /**
     * @var ChangePassword $changePassword
     */
    protected $changePassword = null;

    /**
     * @param ChangePassword $changePassword
     */
    public function __construct($changePassword)
    {
      $this->changePassword = $changePassword;
    }

    /**
     * @return ChangePassword
     */
    public function getChangePassword()
    {
      return $this->changePassword;
    }

    /**
     * @param ChangePassword $changePassword
     * @return \Nzolt\NetSuite\ChangePasswordRequest
     */
    public function setChangePassword($changePassword)
    {
      $this->changePassword = $changePassword;
      return $this;
    }

}
