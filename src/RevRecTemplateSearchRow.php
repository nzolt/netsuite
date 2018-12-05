<?php

namespace Nzolt\NetSuite;

class RevRecTemplateSearchRow extends SearchRow
{

    /**
     * @var RevRecTemplateSearchRowBasic $basic
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
     * @return RevRecTemplateSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param RevRecTemplateSearchRowBasic $basic
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRow
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
