<?php

namespace Nzolt\NetSuite;

class AttachContactReference extends AttachReference
{

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var RecordRef $contactRole
     */
    protected $contactRole = null;

    /**
     * @param BaseRef $attachTo
     * @param RecordRef $contact
     */
    public function __construct($attachTo, $contact)
    {
      parent::__construct($attachTo);
      $this->contact = $contact;
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
     * @return \Nzolt\NetSuite\AttachContactReference
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContactRole()
    {
      return $this->contactRole;
    }

    /**
     * @param RecordRef $contactRole
     * @return \Nzolt\NetSuite\AttachContactReference
     */
    public function setContactRole($contactRole)
    {
      $this->contactRole = $contactRole;
      return $this;
    }

}
