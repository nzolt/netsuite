<?php

namespace Nzolt\NetSuite;

class ChangeEmailRequest
{

    /**
     * @var ChangeEmail $changeEmail
     */
    protected $changeEmail = null;

    /**
     * @param ChangeEmail $changeEmail
     */
    public function __construct($changeEmail)
    {
      $this->changeEmail = $changeEmail;
    }

    /**
     * @return ChangeEmail
     */
    public function getChangeEmail()
    {
      return $this->changeEmail;
    }

    /**
     * @param ChangeEmail $changeEmail
     * @return \Nzolt\NetSuite\ChangeEmailRequest
     */
    public function setChangeEmail($changeEmail)
    {
      $this->changeEmail = $changeEmail;
      return $this;
    }

}
