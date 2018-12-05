<?php

namespace Nzolt\NetSuite;

class EmailEmployeesList
{

    /**
     * @var RecordRef[] $emailEmployees
     */
    protected $emailEmployees = null;

    /**
     * @param RecordRef[] $emailEmployees
     */
    public function __construct(array $emailEmployees)
    {
      $this->emailEmployees = $emailEmployees;
    }

    /**
     * @return RecordRef[]
     */
    public function getEmailEmployees()
    {
      return $this->emailEmployees;
    }

    /**
     * @param RecordRef[] $emailEmployees
     * @return \Nzolt\NetSuite\EmailEmployeesList
     */
    public function setEmailEmployees(array $emailEmployees)
    {
      $this->emailEmployees = $emailEmployees;
      return $this;
    }

}
