<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeChildrenList
{

    /**
     * @var CustomRecordTypeChildren[] $children
     */
    protected $children = null;

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
     * @return CustomRecordTypeChildren[]
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param CustomRecordTypeChildren[] $children
     * @return \Nzolt\NetSuite\CustomRecordTypeChildrenList
     */
    public function setChildren(array $children = null)
    {
      $this->children = $children;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeChildrenList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
