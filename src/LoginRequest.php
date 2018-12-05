<?php

namespace Nzolt\NetSuite;

class LoginRequest
{

    /**
     * @var Passport $passport
     */
    protected $passport = null;

    /**
     * @param Passport $passport
     */
    public function __construct($passport)
    {
      $this->passport = $passport;
    }

    /**
     * @return Passport
     */
    public function getPassport()
    {
      return $this->passport;
    }

    /**
     * @param Passport $passport
     * @return \Nzolt\NetSuite\LoginRequest
     */
    public function setPassport($passport)
    {
      $this->passport = $passport;
      return $this;
    }

}
