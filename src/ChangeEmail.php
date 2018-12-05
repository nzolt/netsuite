<?php

namespace Nzolt\NetSuite;

class ChangeEmail
{

    /**
     * @var string $currentPassword
     */
    protected $currentPassword = null;

    /**
     * @var string $newEmail
     */
    protected $newEmail = null;

    /**
     * @var string $newEmail2
     */
    protected $newEmail2 = null;

    /**
     * @var boolean $justThisAccount
     */
    protected $justThisAccount = null;

    /**
     * @param string $currentPassword
     * @param string $newEmail
     * @param string $newEmail2
     */
    public function __construct($currentPassword, $newEmail, $newEmail2)
    {
      $this->currentPassword = $currentPassword;
      $this->newEmail = $newEmail;
      $this->newEmail2 = $newEmail2;
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
     * @return \Nzolt\NetSuite\ChangeEmail
     */
    public function setCurrentPassword($currentPassword)
    {
      $this->currentPassword = $currentPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewEmail()
    {
      return $this->newEmail;
    }

    /**
     * @param string $newEmail
     * @return \Nzolt\NetSuite\ChangeEmail
     */
    public function setNewEmail($newEmail)
    {
      $this->newEmail = $newEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewEmail2()
    {
      return $this->newEmail2;
    }

    /**
     * @param string $newEmail2
     * @return \Nzolt\NetSuite\ChangeEmail
     */
    public function setNewEmail2($newEmail2)
    {
      $this->newEmail2 = $newEmail2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getJustThisAccount()
    {
      return $this->justThisAccount;
    }

    /**
     * @param boolean $justThisAccount
     * @return \Nzolt\NetSuite\ChangeEmail
     */
    public function setJustThisAccount($justThisAccount)
    {
      $this->justThisAccount = $justThisAccount;
      return $this;
    }

}
