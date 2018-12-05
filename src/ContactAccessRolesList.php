<?php

namespace Nzolt\NetSuite;

class ContactAccessRolesList
{

    /**
     * @var ContactAccessRoles[] $contactRoles
     */
    protected $contactRoles = null;

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
     * @return ContactAccessRoles[]
     */
    public function getContactRoles()
    {
      return $this->contactRoles;
    }

    /**
     * @param ContactAccessRoles[] $contactRoles
     * @return \Nzolt\NetSuite\ContactAccessRolesList
     */
    public function setContactRoles(array $contactRoles = null)
    {
      $this->contactRoles = $contactRoles;
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
     * @return \Nzolt\NetSuite\ContactAccessRolesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
