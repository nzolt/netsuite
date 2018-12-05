<?php

namespace Nzolt\NetSuite;

class ContactCategorySearchRow extends SearchRow
{

    /**
     * @var ContactCategorySearchRowBasic $basic
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
     * @return ContactCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ContactCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\ContactCategorySearchRow
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
     * @return \Nzolt\NetSuite\ContactCategorySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
