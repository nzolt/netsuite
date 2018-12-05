<?php

namespace Nzolt\NetSuite;

class ContactAccessRoles
{

    /**
     * @var boolean $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var RecordRef $role
     */
    protected $role = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $password2
     */
    protected $password2 = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getGiveAccess()
    {
      return $this->giveAccess;
    }

    /**
     * @param boolean $giveAccess
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param RecordRef $contact
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
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
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setRole($role)
    {
      $this->role = $role;
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
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword2()
    {
      return $this->password2;
    }

    /**
     * @param string $password2
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setPassword2($password2)
    {
      $this->password2 = $password2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->sendEmail;
    }

    /**
     * @param boolean $sendEmail
     * @return \Nzolt\NetSuite\ContactAccessRoles
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

}
