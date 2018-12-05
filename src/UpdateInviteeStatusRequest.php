<?php

namespace Nzolt\NetSuite;

class UpdateInviteeStatusRequest
{

    /**
     * @var UpdateInviteeStatusReference $updateInviteeStatusReference
     */
    protected $updateInviteeStatusReference = null;

    /**
     * @param UpdateInviteeStatusReference $updateInviteeStatusReference
     */
    public function __construct($updateInviteeStatusReference)
    {
      $this->updateInviteeStatusReference = $updateInviteeStatusReference;
    }

    /**
     * @return UpdateInviteeStatusReference
     */
    public function getUpdateInviteeStatusReference()
    {
      return $this->updateInviteeStatusReference;
    }

    /**
     * @param UpdateInviteeStatusReference $updateInviteeStatusReference
     * @return \Nzolt\NetSuite\UpdateInviteeStatusRequest
     */
    public function setUpdateInviteeStatusReference($updateInviteeStatusReference)
    {
      $this->updateInviteeStatusReference = $updateInviteeStatusReference;
      return $this;
    }

}
