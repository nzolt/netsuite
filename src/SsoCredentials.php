<?php

namespace Nzolt\NetSuite;

class SsoCredentials
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
     * @var string $authenticationToken
     */
    protected $authenticationToken = null;

    /**
     * @var string $partnerId
     */
    protected $partnerId = null;

    /**
     * @param string $email
     * @param string $password
     * @param string $account
     * @param string $authenticationToken
     * @param string $partnerId
     */
    public function __construct($email, $password, $account, $authenticationToken, $partnerId)
    {
      $this->email = $email;
      $this->password = $password;
      $this->account = $account;
      $this->authenticationToken = $authenticationToken;
      $this->partnerId = $partnerId;
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
     * @return \Nzolt\NetSuite\SsoCredentials
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
     * @return \Nzolt\NetSuite\SsoCredentials
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
     * @return \Nzolt\NetSuite\SsoCredentials
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
     * @return \Nzolt\NetSuite\SsoCredentials
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
      return $this->authenticationToken;
    }

    /**
     * @param string $authenticationToken
     * @return \Nzolt\NetSuite\SsoCredentials
     */
    public function setAuthenticationToken($authenticationToken)
    {
      $this->authenticationToken = $authenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerId()
    {
      return $this->partnerId;
    }

    /**
     * @param string $partnerId
     * @return \Nzolt\NetSuite\SsoCredentials
     */
    public function setPartnerId($partnerId)
    {
      $this->partnerId = $partnerId;
      return $this;
    }

}
