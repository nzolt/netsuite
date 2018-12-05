<?php

namespace Nzolt\NetSuite;

class TaskContact
{

    /**
     * @var RecordRef $company
     */
    protected $company = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param RecordRef $company
     * @return \Nzolt\NetSuite\TaskContact
     */
    public function setCompany($company)
    {
      $this->company = $company;
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
     * @return \Nzolt\NetSuite\TaskContact
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

}
