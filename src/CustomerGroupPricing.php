<?php

namespace Nzolt\NetSuite;

class CustomerGroupPricing
{

    /**
     * @var RecordRef $group
     */
    protected $group = null;

    /**
     * @var RecordRef $level
     */
    protected $level = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param RecordRef $group
     * @return \Nzolt\NetSuite\CustomerGroupPricing
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param RecordRef $level
     * @return \Nzolt\NetSuite\CustomerGroupPricing
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

}
