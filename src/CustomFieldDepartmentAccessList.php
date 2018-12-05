<?php

namespace Nzolt\NetSuite;

class CustomFieldDepartmentAccessList
{

    /**
     * @var CustomFieldDepartmentAccess[] $deptAccess
     */
    protected $deptAccess = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return CustomFieldDepartmentAccess[]
     */
    public function getDeptAccess()
    {
      return $this->deptAccess;
    }

    /**
     * @param CustomFieldDepartmentAccess[] $deptAccess
     * @return \Nzolt\NetSuite\CustomFieldDepartmentAccessList
     */
    public function setDeptAccess(array $deptAccess = null)
    {
      $this->deptAccess = $deptAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\CustomFieldDepartmentAccessList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
