<?php

namespace Nzolt\NetSuite;

class TermSearch extends SearchRecord
{

    /**
     * @var TermSearchBasic $basic
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
     * @return TermSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TermSearchBasic $basic
     * @return \Nzolt\NetSuite\TermSearch
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
     * @return \Nzolt\NetSuite\TermSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
