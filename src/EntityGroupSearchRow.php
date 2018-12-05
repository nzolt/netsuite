<?php

namespace Nzolt\NetSuite;

class EntityGroupSearchRow extends SearchRow
{

    /**
     * @var EntityGroupSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchRowBasic $groupMemberJoin
     */
    protected $groupMemberJoin = null;

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
     * @return EntityGroupSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param EntityGroupSearchRowBasic $basic
     * @return \Nzolt\NetSuite\EntityGroupSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getGroupMemberJoin()
    {
      return $this->groupMemberJoin;
    }

    /**
     * @param EntitySearchRowBasic $groupMemberJoin
     * @return \Nzolt\NetSuite\EntityGroupSearchRow
     */
    public function setGroupMemberJoin($groupMemberJoin)
    {
      $this->groupMemberJoin = $groupMemberJoin;
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
     * @return \Nzolt\NetSuite\EntityGroupSearchRow
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
     * @return \Nzolt\NetSuite\EntityGroupSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
