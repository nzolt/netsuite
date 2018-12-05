<?php

namespace Nzolt\NetSuite;

class CustomListCustomValueList
{

    /**
     * @var CustomListCustomValue[] $customValue
     */
    protected $customValue = null;

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
     * @return CustomListCustomValue[]
     */
    public function getCustomValue()
    {
      return $this->customValue;
    }

    /**
     * @param CustomListCustomValue[] $customValue
     * @return \Nzolt\NetSuite\CustomListCustomValueList
     */
    public function setCustomValue(array $customValue = null)
    {
      $this->customValue = $customValue;
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
     * @return \Nzolt\NetSuite\CustomListCustomValueList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
