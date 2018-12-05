<?php

namespace Nzolt\NetSuite;

class PhoneCallContactList
{

    /**
     * @var PhoneCallContact[] $contact
     */
    protected $contact = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return PhoneCallContact[]
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param PhoneCallContact[] $contact
     * @return \Nzolt\NetSuite\PhoneCallContactList
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\PhoneCallContactList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
