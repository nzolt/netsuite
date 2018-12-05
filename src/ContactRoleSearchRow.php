<?php

namespace Nzolt\NetSuite;

class ContactRoleSearchRow extends SearchRow
{

    /**
     * @var ContactRoleSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactRoleSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ContactRoleSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ContactRoleSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\ContactRoleSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
