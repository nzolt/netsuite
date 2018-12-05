<?php

namespace Nzolt\NetSuite;

class ContactRoleSearch extends SearchRecord
{

    /**
     * @var ContactRoleSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactRoleSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ContactRoleSearchBasic $basic
     * @return \Nzolt\NetSuite\ContactRoleSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\ContactRoleSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
