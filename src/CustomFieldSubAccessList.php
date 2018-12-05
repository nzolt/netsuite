<?php

namespace Nzolt\NetSuite;

class CustomFieldSubAccessList
{

    /**
     * @var CustomFieldSubAccess[] $subAccess
     */
    protected $subAccess = null;

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
     * @return CustomFieldSubAccess[]
     */
    public function getSubAccess()
    {
      return $this->subAccess;
    }

    /**
     * @param CustomFieldSubAccess[] $subAccess
     * @return \Nzolt\NetSuite\CustomFieldSubAccessList
     */
    public function setSubAccess(array $subAccess = null)
    {
      $this->subAccess = $subAccess;
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
     * @return \Nzolt\NetSuite\CustomFieldSubAccessList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
