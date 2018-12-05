<?php

namespace Nzolt\NetSuite;

class BinSearchRow extends SearchRow
{

    /**
     * @var BinSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BinSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param BinSearchRowBasic $basic
     * @return \Nzolt\NetSuite\BinSearchRow
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
     * @return \Nzolt\NetSuite\BinSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\BinSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
