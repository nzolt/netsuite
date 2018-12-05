<?php

namespace Nzolt\NetSuite;

class ChangePassword
{

    /**
     * @var string $currentPassword
     */
    protected $currentPassword = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @var string $newPassword2
     */
    protected $newPassword2 = null;

    /**
     * @param string $currentPassword
     */
    public function __construct($currentPassword)
    {
      $this->currentPassword = $currentPassword;
    }

    /**
     * @return string
     */
    public function getCurrentPassword()
    {
      return $this->currentPassword;
    }

    /**
     * @param string $currentPassword
     * @return \Nzolt\NetSuite\ChangePassword
     */
    public function setCurrentPassword($currentPassword)
    {
      $this->currentPassword = $currentPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \Nzolt\NetSuite\ChangePassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword2()
    {
      return $this->newPassword2;
    }

    /**
     * @param string $newPassword2
     * @return \Nzolt\NetSuite\ChangePassword
     */
    public function setNewPassword2($newPassword2)
    {
      $this->newPassword2 = $newPassword2;
      return $this;
    }

}
