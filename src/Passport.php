<?php

namespace Nzolt\NetSuite;

class Passport
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @var RecordRef $role
     */
    protected $role = null;

    /**
     * @param string $email
     * @param string $password
     * @param string $account
     */
    public function __construct($email, $password, $account)
    {
      $this->email = $email;
      $this->password = $password;
      $this->account = $account;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\Passport
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Nzolt\NetSuite\Passport
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param string $account
     * @return \Nzolt\NetSuite\Passport
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
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
     * @return \Nzolt\NetSuite\Passport
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
