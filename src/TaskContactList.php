<?php

namespace Nzolt\NetSuite;

class TaskContactList
{

    /**
     * @var TaskContact[] $contact
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
     * @return TaskContact[]
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param TaskContact[] $contact
     * @return \Nzolt\NetSuite\TaskContactList
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
     * @return \Nzolt\NetSuite\TaskContactList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
