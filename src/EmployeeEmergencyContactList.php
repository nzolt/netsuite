<?php

namespace Nzolt\NetSuite;

class EmployeeEmergencyContactList
{

    /**
     * @var EmployeeEmergencyContact[] $employeeEmergencyContact
     */
    protected $employeeEmergencyContact = null;

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
     * @return EmployeeEmergencyContact[]
     */
    public function getEmployeeEmergencyContact()
    {
      return $this->employeeEmergencyContact;
    }

    /**
     * @param EmployeeEmergencyContact[] $employeeEmergencyContact
     * @return \Nzolt\NetSuite\EmployeeEmergencyContactList
     */
    public function setEmployeeEmergencyContact(array $employeeEmergencyContact = null)
    {
      $this->employeeEmergencyContact = $employeeEmergencyContact;
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
     * @return \Nzolt\NetSuite\EmployeeEmergencyContactList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
