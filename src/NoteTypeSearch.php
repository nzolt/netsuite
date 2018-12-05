<?php

namespace Nzolt\NetSuite;

class NoteTypeSearch extends SearchRecord
{

    /**
     * @var NoteTypeSearchBasic $basic
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
     * @return NoteTypeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param NoteTypeSearchBasic $basic
     * @return \Nzolt\NetSuite\NoteTypeSearch
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
     * @return \Nzolt\NetSuite\NoteTypeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
