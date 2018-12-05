<?php

namespace Nzolt\NetSuite;

class UpdateInviteeStatusListRequest
{

    /**
     * @var UpdateInviteeStatusReference[] $updateInviteeStatusReference
     */
    protected $updateInviteeStatusReference = null;

    /**
     * @param UpdateInviteeStatusReference[] $updateInviteeStatusReference
     */
    public function __construct(array $updateInviteeStatusReference)
    {
      $this->updateInviteeStatusReference = $updateInviteeStatusReference;
    }

    /**
     * @return UpdateInviteeStatusReference[]
     */
    public function getUpdateInviteeStatusReference()
    {
      return $this->updateInviteeStatusReference;
    }

    /**
     * @param UpdateInviteeStatusReference[] $updateInviteeStatusReference
     * @return \Nzolt\NetSuite\UpdateInviteeStatusListRequest
     */
    public function setUpdateInviteeStatusReference(array $updateInviteeStatusReference)
    {
      $this->updateInviteeStatusReference = $updateInviteeStatusReference;
      return $this;
    }

}
