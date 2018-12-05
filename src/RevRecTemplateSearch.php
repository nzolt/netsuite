<?php

namespace Nzolt\NetSuite;

class RevRecTemplateSearch extends SearchRecord
{

    /**
     * @var RevRecTemplateSearchBasic $basic
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
     * @return RevRecTemplateSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param RevRecTemplateSearchBasic $basic
     * @return \Nzolt\NetSuite\RevRecTemplateSearch
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
