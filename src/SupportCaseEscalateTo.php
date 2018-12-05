<?php

namespace Nzolt\NetSuite;

class SupportCaseEscalateTo
{

    /**
     * @var RecordRef $escalatee
     */
    protected $escalatee = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getEscalatee()
    {
      return $this->escalatee;
    }

    /**
     * @param RecordRef $escalatee
     * @return \Nzolt\NetSuite\SupportCaseEscalateTo
     */
    public function setEscalatee($escalatee)
    {
      $this->escalatee = $escalatee;
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
     * @return \Nzolt\NetSuite\SupportCaseEscalateTo
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Nzolt\NetSuite\SupportCaseEscalateTo
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

}
