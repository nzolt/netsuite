<?php

namespace Nzolt\NetSuite;

class EntityGroupSearch extends SearchRecord
{

    /**
     * @var EntityGroupSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchBasic $groupMemberJoin
     */
    protected $groupMemberJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param EntityGroupSearchBasic $basic
     * @return \Nzolt\NetSuite\EntityGroupSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getGroupMemberJoin()
    {
      return $this->groupMemberJoin;
    }

    /**
     * @param EntitySearchBasic $groupMemberJoin
     * @return \Nzolt\NetSuite\EntityGroupSearch
     */
    public function setGroupMemberJoin($groupMemberJoin)
    {
      $this->groupMemberJoin = $groupMemberJoin;
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
     * @return \Nzolt\NetSuite\EntityGroupSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\EntityGroupSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
