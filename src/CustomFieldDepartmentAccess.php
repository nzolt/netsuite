<?php

namespace Nzolt\NetSuite;

class CustomFieldDepartmentAccess
{

    /**
     * @var RecordRef $dept
     */
    protected $dept = null;

    /**
     * @var CustomizationAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var CustomizationSearchLevel $searchLevel
     */
    protected $searchLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getDept()
    {
      return $this->dept;
    }

    /**
     * @param RecordRef $dept
     * @return \Nzolt\NetSuite\CustomFieldDepartmentAccess
     */
    public function setDept($dept)
    {
      $this->dept = $dept;
      return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return \Nzolt\NetSuite\CustomFieldDepartmentAccess
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel()
    {
      return $this->searchLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return \Nzolt\NetSuite\CustomFieldDepartmentAccess
     */
    public function setSearchLevel($searchLevel)
    {
      $this->searchLevel = $searchLevel;
      return $this;
    }

}
